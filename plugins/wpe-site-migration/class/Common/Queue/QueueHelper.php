<?php

namespace DeliciousBrains\WPMDB\Common\Queue;

use DeliciousBrains\WPMDB\Common\Filesystem\Filesystem;
use DeliciousBrains\WPMDB\Common\Http\Helper;
use DeliciousBrains\WPMDB\Common\Http\Http;
use DeliciousBrains\WPMDB\Common\MigrationPersistence\Persistence;
use DeliciousBrains\WPMDB\Common\Transfers\Files\Util;
use DI\DependencyException;
use DI\NotFoundException;
use Exception;
use WP_Error;

class QueueHelper
{

    public $filesystem;
    /**
     * @var Http
     */
    private $http;
    /**
     * @var Helper
     */
    private $http_helper;
    /**
     * @var Util
     */
    private $transfer_util;
    /**
     * @var Manager
     */
    private $queue_manager;
    /**
     * @var \DeliciousBrains\WPMDB\Common\Util\Util
     */
    private $util;

    public function __construct(
        Filesystem $filesystem,
        Http $http,
        Helper $http_helper,
        Util $transfer_util,
        Manager $queue_manager,
        \DeliciousBrains\WPMDB\Common\Util\Util $util
    ) {
        $this->filesystem     = $filesystem;
        $this->http           = $http;
        $this->http_helper    = $http_helper;
        $this->transfer_util  = $transfer_util;
        $this->queue_manager  = $queue_manager;
        $this->util           = $util;
    }

    /**
     * Populate the queue with given file data.
     *
     * @param array  $file_data
     * @param string $intent
     * @param string $stage
     * @param string $migration_state_id
     * @param bool   $full_site_export
     *
     * @return array|WP_Error
     * @throws Exception
     */
    public function populate_queue($file_data, $intent, $stage, $migration_state_id, $full_site_export = false)
    {
        if ( ! $file_data) {
            return $this->transfer_util->log_and_return_error(__('File list empty or incomplete. Please contact support.'));
        }

        if (is_wp_error($file_data)) {
            return $file_data;
        }

        foreach ($file_data['files'] as $item) {
            if (is_array($item)) {
                $enqueued = $this->transfer_util->enqueue_files($item, $this->queue_manager, $stage);

                if (is_wp_error($enqueued)) {
                    return $enqueued;
                }
            }
        }

        $queue_status = [
            'total'    => $file_data['meta']['count'],
            'size'     => $file_data['meta']['size'],
            'manifest' => $file_data['meta']['manifest'],
        ];

        //Always store local manifest even for push intents, to keep track of recursive scanning items count.
        $complete_status = $this->store_local_manifest(
            $queue_status,
            $file_data,
            $stage,
            $migration_state_id,
            $full_site_export
        );

        if (is_wp_error($complete_status)) {
            return $complete_status;
        }

        if ('push' === $intent) {
            $response = $this->store_remote_manifest($queue_status, $stage);
            if (true !== $response) {
                return $response;
            }
        }

        // Manifest can get quite large, so remove it once it's no longer needed
        unset($queue_status['manifest'], $complete_status['manifest']);

        return $complete_status;
    }

    /**
     * Saves the remote manifest.
     *
     * @param array $queue_status
     * @param string $stage
     *
     * @return bool|WP_Error
     * @throws Exception
     */
    private function store_remote_manifest($queue_status, $stage)
    {
        $key      = $stage === 'media_files' ? 'mf' : 'tp';
        $response = $this->transfer_util->save_queue_status_to_remote(
            $queue_status,
            "wpmdb{$key}_respond_to_save_queue_status"
        );

        if (is_wp_error($response)) {
            return $response;
        }

        $decoded_response = json_decode($response->body, true);

        if ((isset($decoded_response['success']) && $decoded_response['success'] === false) || empty($decoded_response)) {
            return $this->transfer_util->log_and_return_error($decoded_response['data']);
        }

        return true;
    }

    /**
     * Saves the local manifest.
     *
     * @param array $queue_status
     * @param array $file_data
     * @param string $stage
     * @param string $migration_state_id
     * @return bool|mixed
     */
    private function store_local_manifest($queue_status, $file_data, $stage, $migration_state_id, $full_site_export = false) {
        $queue_status = $this->concat_existing_queue_items($queue_status, $file_data, $stage, $migration_state_id, $full_site_export);

        try {
            $this->transfer_util->save_queue_status($queue_status, $stage, $migration_state_id, $full_site_export);
        } catch (Exception $e) {
            return $this->transfer_util->log_and_return_error($e->getMessage());
        }

        return $queue_status;
    }

    /**
     * Concat existing queue status if exists.
     *
     * @param array $queue_status
     * @param array $file_data
     * @param string $stage
     * @param string $migration_state_id
     * @return array
     */
    private function concat_existing_queue_items($queue_status, $file_data, $stage, $migration_state_id, $full_site_export = false) {
        //attempt to load queue status
        $stored_queue = $this->transfer_util->get_queue_status($stage, $migration_state_id, $full_site_export);
        if (false !== $stored_queue) {
            $queue_status = $stored_queue;
            $queue_status['total'] += $file_data['meta']['count'];
            $queue_status['size'] += $file_data['meta']['size'];
            $queue_status['manifest'] = array_merge($file_data['meta']['manifest'], $queue_status['manifest']);
        }

        return $queue_status;
    }

    /**
     * Handle request for queue status.
     *
     * @return void
     * @throws DependencyException
     * @throws NotFoundException
     */
    public function ajax_get_queue_items()
    {
        $_POST = $this->http_helper->convert_json_body_to_post();

        $this->http->end_ajax($this->get_queue_items());
    }

    /**
     * Get queue status.
     *
     * @return array|WP_Error
     * @throws DependencyException
     * @throws NotFoundException
     */
    public function get_queue_items()
    {
        $this->util->set_time_limit();

        $key_rules = array(
            'action'             => 'key',
            'stage'              => 'string',
            'migration_state_id' => 'key',
            'nonce'              => 'key',
        );

        $state_data = Persistence::setPostData($key_rules, __METHOD__);

        if (is_wp_error($state_data)) {
            return $state_data;
        }

        if ($state_data['stage'] === 'media_files') {
            $folder_key = $state_data['folder'];
        } else {
            $folder_key = $state_data['folders'];
        }
        $current_option = isset($state_data[$state_data['stage'] . '_option'])
            ? $state_data[$state_data['stage'] . '_option']
            : null;
        if (empty($folder_key) && $current_option !== 'except') {
            return $this->transfer_util->log_and_return_error(
                __('Error: empty folder list supplied.', 'wp-migrate-db')
            );
        }

        $queue_status = get_site_transient(WPMDB_QUEUE_STATUS_OPTION);
        $count        = apply_filters('wpmdb_tranfers_queue_batch_size', 1000);
        $offset       = isset($queue_status['offset']) ? $queue_status['offset'] : 0;

        $q_data = $this->queue_manager->list_jobs($count, $offset);

        if (is_wp_error($q_data)) {
            return $q_data;
        }

        if (empty($q_data)) {
            delete_site_transient(WPMDB_QUEUE_STATUS_OPTION);

            return ['status' => 'complete'];
        }

        $file_data  = $this->process_file_data($q_data);
        $result_set = $this->transfer_util->process_queue_data($file_data, $state_data);

        $queue_status['offset'] = $offset + $count;
        set_site_transient(WPMDB_QUEUE_STATUS_OPTION, $queue_status);

        return ['queue_status' => $queue_status, 'items' => $result_set];
    }

    /**
     * Process data
     *
     * @param array $data
     *
     * @return array
     */
    public function process_file_data($data)
    {
        $result_set = [];

        if (!empty($data)) {
            foreach ($data as $size => $record) {
                $display_path                  = $record->file['subpath'];
                $record->file['relative_path'] = $display_path;

                $result_set[] = $record->file;
            }
        }

        return $result_set;
    }
}
