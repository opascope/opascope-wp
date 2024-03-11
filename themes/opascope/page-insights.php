<?php get_header(); ?>
	<?php if(have_posts()): the_post(); ?>
<section class="customPostPreview">
<!-- 	<div class="container"> -->
		<div class="journal_pageTitle">
			<h1><?php echo get_the_title(); ?></h1>
			<?php the_content(); ?>
		</div>
		<div class="horrizontal-line"></div>
		<?php 
		// the query
		$wpb_all_query = new WP_Query(
			array(
				'post_type'=>'insights',
				'post_status'=>'publish',
				'orderby'   => array(
			      'date' =>'DESC',
			      'menu_order'=>'ASC'
			   	)
			)
		); ?>

		<?php if ( $wpb_all_query->have_posts() ) : ?>

			<!-- the loop -->
			<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>

			<div class="item mobView">
				<a href="<?php echo get_permalink() ?>">
				  	<div class="customPostBox">
					<div class="postImage">
						<?php
					    // Get the post thumbnail (featured image)
					    if ( $featured_icon = get_field('featured_icon', get_the_ID()) ) {
					    	echo '<img src="'.$featured_icon.'" />';
					    } else {
					        // If no featured image is set, you can display a default image or leave it empty.
					        // Example with a default image:
					        echo '<img src="/wp-content/uploads/2023/09/default-journal-image.png" alt="Default Image">';
					    }
					    ?>
					</div>

					<div class="journal-page-texts">	

					<div class="postHeading">
						<h2><?php the_title(); ?></h2>
					</div>

					<div class="postReadMore">
						<p><?php echo get_field('excerpt'); ?></p>
					</div>

					<div class="postCategory badge">
						<?php
						$post_id = get_the_ID();
						$terms = get_the_terms($post_id, 'journal-category');
						if ($terms && !is_wp_error($terms)):
						$tslugs_arr = array();
						$count = 1;
						foreach($terms as $term) {
							if($count != 1){
								echo '<span class="vertical-separator"> | </span>';
							}
							$count++;
							echo '<span class="badge badge-primary">' . $term -> name . '</span>';
						}
						//$terms_slug_str = join(" ", $tslugs_arr);
						endif;
						//echo $terms_slug_str;
						?>



					</div>


					<div class="post-btns">
					<div class="postReadMore">
							<button>Read Now</button>
						</div>
					<?php echo do_shortcode('[rt_reading_time postfix="min read" postfix_singular="min"]'); ?>
					</div>


					</div>

				  	</div>
				</a>	
			</div>
			<?php endwhile; ?>
			<!-- end of the loop -->

		<?php wp_reset_postdata(); ?>

		<?php else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>

		<div class="row">
			<div class="col-12 text-center">
				<?php //get_template_part('templates/bs-default-pagination'); ?>
			</div>
		</div>
<!-- 	</div> -->
</section>
	<?php endif; ?>

<?php get_footer(); ?>