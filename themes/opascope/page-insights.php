<?php get_header();
?>
<style>
	.postCategory span{
		display: inline-block;
		color: #000;
		font-size: 12px;
		font-style: normal;
		font-weight: 400;
		line-height: normal;
		text-transform: capitalize;
		margin-top: 14px;
	}

	.post-btns {
		display: flex;
		align-items: center;
		gap: 27px;
	}

	.postHeading h3{
		font-weight: 700;
		font-size: 32px;
		font-style: normal;
		line-height: normal;
		-moz-box-align: center;
		align-items: center;
		text-transform: capitalize;
		color: #11151c;
		margin: 0;
	}
	.postDescription p {
		margin: 0 0 24px;
		font-style: italic;
		font-weight: 400;
		font-size: 18px;
		line-height: 24px;
		color: #949699;
	}

	.postDescription a{
		font-family: Helvetica;
		font-size: 16px;
		font-weight: 700;
		line-height: 24px;
		letter-spacing: 0em;
		text-align: center;
		color:#000000;
		text-decoration:none;
	}

	.postReadMore button {
		color: #fff !important;
		background: #000;
		padding: 5px 7.792px;
		border: 1px solid #000;
	}

	.postReadMore button:hover {
		background: transparent;
		color: #000 !important;
	}

	.vertical-separator {
		padding: 0px 5px;
	}

	.postReadMore button, .post-btns .span-reading-time {
		position: relative;
		-moz-box-align: center;
		align-items: center;
		text-transform: capitalize;
		color: #000;
		font-size: 12.468px;
		font-style: normal;
		font-weight: 700;
		line-height: normal;
		-webkit-transition: .4s;
		transition: .4s;
		text-decoration:none;
	}
	.postReadMore p{
		margin: 12px 0 0px;
		font-size: 16px;
		font-style: normal;
		font-weight: 400;
		line-height: normal;
		color: #000;
	}
	ul.page-numbers {
		margin-left: 0px;
		list-style: none;
		display: flex;
		justify-content: flex-end;
		display: flex;
		align-items: center;
		text-decoration: none;
		color: #000;
		font-weight: 600;
		margin: 0px !important;

	}
	.pagination .page-numbers {
	    display: flex;
	    align-items: center;
	    text-decoration: none;
	    color: #000;
	    font-weight: 600;
	    margin: 0px !important;
	}
	ul.page-numbers li {
		padding: 0px 10px;
	}
	.pagination .page-numbers.first-page,
	.pagination .page-numbers.last-page {
	    opacity: .4;
	}
	ul.page-numbers li span, ul.page-numbers li a {
		font-size: 16px;
		line-height: 24px;
		font-weight: 700;
		color: #000;
		opacity: .4;
		text-decoration: none;
	}
	ul.page-numbers li span.page-numbers.current,
	ul.page-numbers li a.page-numbers.current {
		opacity: 1;
	}
	.pagination {
		display: flex;
		justify-content: flex-end;
		margin-bottom: 20px;
	} 
	ul.page-numbers {
		display: inline-block;
		padding: 5px 5px;
		text-decoration: none;
		color: #abb8c3;
		vertical-align: middle;
	}
	ul.page-numbers.current {
		color: #11151c;
    	border: none;
		font-weight:600;
		vertical-align: middle;
	}
	ul.page-numbers.next,
	ul.page-numbers.first-page,
	ul.page-numbers.last-page  {
		color: #abb8c3;
		padding: 5px 5px;
		vertical-align: middle;
	}
	ul.page-numbers:hover
	{
		color: #abb8c3;
	}
	page-numbers, ul.page-numbers.next {
		text-decoration: none;
	}

	@media (max-width: 991px) {
		.text {
		    display: flex;
		    flex-wrap: wrap;
		}
		.postHeading h3 {
		    font-size: 24px;
		    line-height: 32px;
		}
		.postHeading {
		    order: 2;
		    margin: 13px 0 17px 0;
		}
		.insights .post-btns {
		    order: 4;
		    margin-top: 0;
		}

		.postCategory {
			order: 1;
			margin-top: 16px;
		}
		.postCategory .badge {
			margin-top: 0;
		}
</style>

<section>
	<div class="container">
		<h1><?php echo the_title(); ?></h1>

		<?php 
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$wp_query = new WP_Query(
				array(
					'post_type'=>'insight',
					'post_status'=>'publish',
				    'posts_per_page' => 10,
				    'paged' => $paged,
					'orderby'   => array(
				      'date' =>'DESC',
				      'menu_order'=>'ASC'
				   	)
				)
			);
		?>

		<?php if ( $wp_query->have_posts() ) : ?>
			<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

			<div class="item">
				<a href="<?php echo get_permalink() ?>">
				  	<div class="row">
						<div class="col-md-3 postImage">
							<?php 
								$url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'full' ); 
								if($url) :
									echo '<img src="' . $url . '" />';
								else : 
						        	echo '<img src="' . get_bloginfo('template_url') . '/img/default-journal-image.png" alt="Default Image">';
						        endif;
							?>
						</div>

						<div class="col-md-9 text">
							<div class="postHeading">
								<h3><?php the_title(); ?></h3>
							</div>

							<div class="postReadMore hidden-mobile">
								<p><?php echo get_field('excerpt'); ?></p>
							</div>

							<div class="postCategory badge">
								<?php
									$post_id = get_the_ID();
									$terms = get_the_terms($post_id, 'insight-category');

									if ($terms && !is_wp_error($terms)):
										$count = 1;
										foreach($terms as $term) :
											if($count != 1) :  ?>
												<span class="vertical-separator"> | </span>
											<?php endif; ?>
											<span class="badge badge-primary"><?php echo $term -> name; ?></span>
										<?php $count++; endforeach; 
									endif;
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

			<div class="pagination">	
				<?php
					$total_pages = $wp_query->max_num_pages;

				    if ($total_pages > 1) :
				        $current_page = max(1, get_query_var('paged'));
				        echo '<a class="page-numbers first-page" href="' . get_pagenum_link(1) . '">' . __('<<') . '</a>';
				        echo paginate_links(array(
				            'base' => get_pagenum_link(1) . '%_%',
				            'format' => 'page/%#%',
				            'current' => $current_page,
				            'total' => $total_pages,
				            'prev_text'    => __('<'),
				            'next_text'    => __('>'),
							'mid_size' => 1, // Show only one page number on each side of the current page
							'end_size' => 1, // Show one page number at the beginning and end
							'type' => 'list', // Output as an unordered list
				        ));
						echo '<a class="page-numbers last-page" href="' . get_pagenum_link($total_pages) . '">' . __('>>') . '</a>';
				    endif;
				?>
			</div>

		<?php wp_reset_postdata(); ?>

		<?php else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>
