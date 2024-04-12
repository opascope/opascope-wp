<?php get_header(); ?>
	<?php if(have_posts()): the_post(); ?>
		<section class="main">
			<div class="container">
				<div class="row align-items-start">
					<div class="col-md-5 pd-1">
						<h1><?php the_title(); ?></h1>
					</div>

					<div class="col-md-7 flex-end">
						<div class="text">At Opascope, we collaborate with high-growth companies facing unique challenges, seeking a true performance marketing partner. Our case studies are anonymous to protect clients’ strategies. Let’s chat to see how we can help you.</div>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<style>
		#ajax-loader {
			display: none;
		}

		.customPostPreview{
			/* 	padding-top: 100px; */
		}
		.caseStudies_pageContent{
	    	margin: 50px 0 0px;
	    	padding-bottom: 100px;
			display: flex;
		}
		.caseStudies_pageTitle {
			width: 100%;
	 	/*	display: -moz-box;
			display: flex;
			-moz-box-orient: horizontal;
			-moz-box-direction: normal;
			flex-direction: row;
			flex-wrap: wrap;
			width: 100%;
			-moz-box-pack: justify;
			justify-content: space-between;
			-moz-box-align: flex-start;
			align-items: flex-start; */
		}
		.caseStudies_pageTitle h1 {
			margin: 0;
			font-weight: 700;
			font-size: 80px;
			line-height: 91.99px;
			text-transform: capitalize;
			color: #11151c;
			flex-basis: -webkit-calc(50% - 16px);
			flex-basis: calc(50% - 16px);
		}
		/* 	.caseStudies_pageDes{
				width: 50%;
		} */
		.caseStudies_pageDescription{
			width: 100%;
	 		/* display: flex;
	    	gap: 50px; */
		}
		.caseStudies_pageDes {
			border-left: 2px solid #d7d9dd;
			padding-left: 20px;
		}
		.caseStudies_pageDescription p {
			font-size: 22px;
			line-height: 150%;
			letter-spacing: -.01em;
			flex-basis: -webkit-calc(50% - 16px);
	    	flex-basis: calc(50% - 16px);
			color: #000;
			margin-bottom: 0;
		}
		.caseStudies_pageDescription p a{
			color: #11151c;
		}
		.customPostPreview .row{
			display: -moz-box;
			display: flex;
			-moz-box-orient: horizontal;
			-moz-box-direction: normal;
			flex-direction: row;
			flex-wrap: wrap;
			width: 100%;
			-moz-box-pack: justify;
			justify-content: space-between;
			margin: 0;
		}
		.customPostPreview .col-sm-6{
			margin-bottom: 32px;
		    margin: 0 0 64px;
		    flex-basis: -webkit-calc(50% - 16px);
		    flex-basis: calc(50% - 16px);
		    width: calc(50% - 16px);
		    border: 1px solid #11151C;
		}
		.customPostPreview .col-sm-6 {
			padding: 0;
		}
		.customPostPreview .col-sm-6 a {
			text-decoration: none;
		    padding: 30px 20px 50px 20px;
		    display: block;
		}
		.customPostPreview .featureCaseStudies a{
			text-decoration: none;
		    display: flex;
		    flex-wrap: wrap;
		    align-items: center;
		    width:100%;
		}	
		.postCategory span{
			padding: 5px 8px 4px;
			background: #d7d9dd;
			display: inline-block;
			font-weight: 600;
			font-size: 12px;
			line-height: 130%;
			text-transform: uppercase;
			color: #fff;
			margin: 7px 7px 0 0;
		}
		.postHeading h3{
			margin: 16px 0;
			margin-top: 0px;
			font-weight: 700;
			font-size: 34.5px;
			line-height: 43.2px;
			-moz-box-align: center;
			align-items: center;
			text-transform: capitalize;
			color: #11151c;
		}
		.postDescription p {
			margin: 0 0 24px;
			font-style: italic;
			font-weight: 400;
			font-size: 18px;
			line-height: 24px;
			color: #949699;
		}	

		@media (max-width: 1291px) {
			.customPostPreview .col-sm-6 a {
			    min-height: 350px;
			}
		}

		.postReadMore {
		    position: absolute;
		    bottom: 18px;
		    z-index: 9999;
		}

		.postReadMore button {
			position: relative;
			-moz-box-align: center;
			align-items: center;
			text-transform: capitalize;
			font-weight: 700;
			font-size: 16px;
			line-height: 24px;
			-webkit-transition: .4s;
			transition: .4s;
			background: #11151C;
			color: #fff;
			padding: 10px 10px;
			border: 1px solid #11151C;
			border-radius: 0;
		}	
		.postReadMore button:hover {
			background: transparent;
			color: #11151C;
		}
		.postReadMore a {
			position: relative;
			-moz-box-align: center;
			align-items: center;
			text-transform: capitalize;
			color: #000;
			font-weight: 700;
			font-size: 16px;
			line-height: 24px;
			-webkit-transition: .4s;
			transition: .4s;
			background: #11151C;
			color: #fff;
			padding: 10px 10px;
		}
		.caseStudies {
			padding-top: 80px;
		}
		.featureCaseStudiesSection {
			background-color: #D9D9D9;
			padding: 80px 0px;
		}
		.featureCaseStudies {
			display: flex;
			flex-wrap: wrap;
			margin-bottom: 80px;
			align-items: center;
		}
		.featureCaseStudies:last-child {
			margin-bottom: 0px;
		}
		.featureCaseStudiesContent {
			padding: 20px 30px 0px 0px;
			width: 35%;
		}
		.featureCaseStudiesContent p {
			margin: 15px 0px 30px;
			font-size: 16px;
			line-height: 22px;
			color: #000;
			max-width: 480px;
		}
		.featureCaseStudiesGraphs {
			background-color: #11151C;
			padding: 50px 40px;
			width: 65%;
			display: flex;
			justify-content: space-between;
			flex-wrap: wrap;
			align-items: center;
		}
		.graphBox {
			display: flex;
			align-items: center;
		}
		.graphBox img {
			width: auto;
			margin-right: 15px;
		}
		.graphBox .postHeading {
			text-align: center;
		}
		.graphBox .postHeading h3, .graphBox .postHeading p {
			color: #fff;
			margin: 0px;
		}
		.graphBox .postHeading p {
			min-width: 200px;
			max-width: 200px;
			font-size: 16px;
			line-height: 22px;
		}
		.postPercentageSection {
			display: flex;
			margin: 30px 0px;
		}
		.postPercentage {
			display: flex;
			align-items: center;
			margin-right: 40px;
		}
		.postPercentage:last-child {
			margin-right: 0px;
		}
		.postPercentage p {
			margin-bottom: 0px;
			max-width: 190px;
			font-size: 16px;
			line-height: 22px;
	 	/*	font-style: italic; */
			color: #000;
			margin-left: 20px;
			text-align: left;
		}
		.postPercentageSection p {
		    margin-bottom: 0px;
		    font-size: 16px;
		    line-height: 22px;
		    /* font-style: italic; */
		    color: #000;
		    text-align: left;
		}
		.customPostPreview ul.page-numbers {
			margin-left: 0px;
			list-style: none;
			display: flex;
			justify-content: flex-end;
		}
		.customPostPreview ul.page-numbers li {
			padding: 0px 10px;
		}
		.customPostPreview ul.page-numbers li span, .customPostPreview ul.page-numbers li a {
			font-size: 16px;
			line-height: 24px;
			font-weight: 700;
			color: #000;
			opacity: .4;
			text-decoration: none;
		}
		.customPostPreview ul.page-numbers li span.page-numbers.current,
		.customPostPreview ul.page-numbers li a.page-numbers.current {
			opacity: 1;
		}
		.customPostPreview .ajax-pagination {
			padding-bottom: 40px;
			margin-top: -30px;
		}
		.page-numbers .icon-circle {
		    font-size: 10px;
		    margin-left: 3px;
		}
		.page-numbers .disabled img{
		    color: #999; 
		    display: none !important;
		}
		
		/*Styling default wordpress pagination*/
		
		/* Center the pagination */
		.pagination {
			display: flex;
			justify-content: flex-end;
			margin-bottom: 20px;
		} 
		/* Style for individual pagination links */
		ul.page-numbers {
			display: inline-block;
			padding: 5px 5px;
			text-decoration: none;
			color: #abb8c3;
			vertical-align: middle;
		}
		/* Style for the current page link */
		ul.page-numbers.current {
			color: #11151c;
	    	border: none;
			font-weight:600;
			vertical-align: middle;
		}
		/* Style for the "next" link */
		ul.page-numbers.next,
		ul.page-numbers.first-page,
		ul.page-numbers.last-page  {
			color: #abb8c3;
			padding: 5px 5px;
			vertical-align: middle;
		}
	    /* Add hover effect for links */
		ul.page-numbers:hover
		{
			color: #abb8c3;
		}
		/* Remove underlines from links */
		page-numbers, ul.page-numbers.next {
			text-decoration: none;
		}
		.customPostPreview .pagination {
			margin-bottom: 40px;
		}
		.customPostPreview .pagination .page-numbers.first-page, .customPostPreview .pagination .page-numbers.last-page {
		    opacity: .4;
		}
		.customPostPreview .pagination .page-numbers {
		    display: flex;
		    align-items: center;
		    text-decoration: none;
		    color: #000;
		    font-weight: 600;
		    margin: 0px !important;
		}
		.midSizeHeading {
		    font-size: 28px;
		    font-weight: 700;
		    line-height: 1.1;
		    color: #11151c;
		    margin: 0;
		}

		.postHeading > div {
			color: #fff;
		    margin: 16px 0;
		    margin-top: 0px;
		    font-weight: 700;
		    font-size: 36px;
		    line-height: 43.2px;
		    -moz-box-align: center;
		    align-items: center;
		    text-transform: capitalize;
		}

		/*Styling default wordpress pagination ends*/
		
		@media(max-width: 1500px) {
			.featureCaseStudiesGraphs {
				padding-left: 50px;
			}	
		}	
		@media (max-width: 1440px){
			.graphBox {
				display: block;
				text-align: center;
			}
			.graphBox img {
				margin-bottom: 20px;
				margin-right: 0px;
			}
		}
		@media (max-width: 1280px){
			.postPercentage {
			    flex-direction: column;
			    text-align: center;
			}
			.postPercentageSection p {
			    text-align: center;
			    margin-left: 0;
			    margin-bottom: 30px;
			}
		}
		@media (max-width: 991px){
			.caseStudies_pageContent{
				padding-bottom: 60px !important;
			}
			.caseStudies_pageTitle {
				padding-bottom: 0px !important;
			}
			.caseStudies_pageTitle h1{
				margin-bottom: 38px;
			}
			.caseStudies_pageDescription{
				gap: 20px;
			}
			.caseStudies_pageDes {
				border-left: 0px;
				padding-left: 0px;
			}
			.featureCaseStudiesContent {
				padding: 0px;
				width: 100%;
				margin-bottom: 50px;
			}
			.featureCaseStudiesGraphs {
				padding: 30px 50px;
				width: 100%;
			}
			.caseStudies_pageContent {
				display: block;
			}
			.postPercentage {
			    margin-right: 25px;
			}
			.midSizeHeading {
				font-size: 24px;
			}
			.featureCaseStudiesSection {
				padding: 50px 0;
			}
			.postHeading > div {
				font-size: 22px;
   				line-height: 28px;
   				margin: 0;
			}
			.customPostPreview .row {
			    display: block;
			}
			.customPostPreview .col-sm-6 a {
				padding: 30px 20px;
			}
			.caseStudies .postPercentage .midSizeHeading {
				text-align: left;
			}
		}
		@media (max-width: 767px) {
			.customPostPreview .col-sm-6 a {
				min-height: auto;
			}
			.postPercentage {
			    padding: 0px !important;
			}
			.postPercentageSection {
			   margin: 20px 0px 55px !important;
			}

			#content{
				padding: 1.5rem 0;
			}
			.caseStudies_pageContent{
				padding-top: 30px;
				margin-top: 0px;
			}
			.caseStudies_pageTitle h1 {
				margin-bottom: 20px !important;
				line-height: 35px !important;
			}
			.caseStudies_pageTitle{
				margin-bottom: 0px;
			}
			.caseStudies_pageDescription{
				flex-direction: column;
			}
			.caseStudies_pageDescription p{
				font-size: 18px;
			}
			.featureCaseStudies {
				margin-bottom: 40px;
			}
			.graphBox .postHeading p {
				min-width: auto;
				max-width: 150px;
			}
			.postPercentage {
				display: block;
				margin-right: 20px;
				text-align: center;
			}
			.postPercentage {
				display: block;
				margin-right: 0;
				text-align: center;
				width: 50%;
				padding: 0px 10px;
			}
			.postHeading h3 {
				font-size: 22px !important;
				line-height: 28px !important;
			}
			.postPercentage p {
				font-size: 12px;
			    line-height: 18px;
			    margin-left: 0px;
			    text-align: left;
			}
			.postPercentageSection {
				margin: 20px 0px 25px;
			}
			.caseStudies {
				padding-top: 50px;
			}
			.customPostPreview .col-sm-6 {
				margin: 0 0 30px;
				padding: 0;
	   			width: 100%;
			}
			.featureCaseStudiesGraphs {
				padding: 30px 15px;
			}
			.featureCaseStudiesContent {
				margin-bottom: 20px;
			}
			.customPostPreview .ajax-pagination {
				padding-bottom: 20px;
			}
		}
	</style>

	<section class="customPostPreview">
		<div class="featureCaseStudiesSection">
			<div class="container">
				<?php
				$featured_post_ids = array();

				// the query
				$wpb_all_query = new WP_Query(
					array(
						'post_type'      => 'case-study',
						'post_status'    => 'publish',
						'meta_key'       => '_is_ns_featured_post',
						'meta_value'     => 'yes',
						'order'          => 'DESC',
						'posts_per_page' => '4'
					)
				);

				// Loop through the featured case-study posts
				while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post();
					$featured_post_ids[] = get_the_ID();
					$statistics = get_field('statistics'); // Assuming the ACF group key is 'statistics'
					$post_content = get_field('content');
					// If the ACF group 'statistics' exists, get the sub-field values
					if ($statistics) :
						$first_stat_title = $statistics['title_first_stat'];
						$first_stat_content = $statistics['content_first_stat'];
						$first_stat_image = $statistics['image_first_stat'];
						$second_stat_title = $statistics['title_second_stat'];
						$second_stat_content = $statistics['content_second_stat'];				
						$second_stat_image = $statistics['image_second_stat'];
					endif;
				?>

				<div class="featureCaseStudies">
					<a href="<?php echo get_permalink() ?>">
						<div class="featureCaseStudiesContent">
							<h3 class="midSizeHeading"><?php the_title(); ?></h3>
							<p><?php echo $post_content; ?></p>
							<div class="postReadMore">
								<button>Read Now</button>
							</div>
						</div>
						<div class="featureCaseStudiesGraphs">
							<div class="graphBox">
								<img src="<?php echo $first_stat_image; ?>" alt="">
								<div class="postHeading">
									<div><?php echo esc_html($first_stat_title); ?></div>
									<p><?php echo esc_html($first_stat_content); ?></p>
								</div>
							</div>
							<div class="graphBox">
								<img src="<?php echo $second_stat_image; ?>" alt="">
								<div class="postHeading">
									<div><?php echo esc_html($second_stat_title); ?></div>
									<p><?php echo esc_html($second_stat_content); ?></p>
								</div>
							</div>
						</div>
					</a>
				</div>

				<?php endwhile; wp_reset_postdata();
				?>
			</div>
		</div>
		<div class="container">
			<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

			$args = array(
			   'post_type'=>'case-study',
			   'post_status'=>'publish',
			   'posts_per_page' => 4,
			   'paged' => $paged,
			   'post__not_in'   => $featured_post_ids, 
			   'orderby' => 'date',
			   'order' => 'DESC'
			);
			$loop = new WP_Query( $args );

			if ( $loop->have_posts() ) : ?>
				<div class="row caseStudies" id="ajax-pagination-container">
					<?php
						while ( $loop->have_posts() ) : $loop->the_post();

						$statistics = get_field('statistics'); // Assuming the ACF group key is 'statistics'
						$post_content = get_field('content');
						// If the ACF group 'statistics' exists, get the sub-field values
						if ($statistics) {
							$first_stat_title = $statistics['title_first_stat'];
							$first_stat_content = $statistics['content_first_stat'];
							$second_stat_title = $statistics['title_second_stat'];
							$second_stat_content = $statistics['content_second_stat'];
						}

						// Check if both $first_stat_content and $second_stat_content are empty
						$both_contents_empty = empty($first_stat_content) && empty($second_stat_content); ?>
					   
					   <div class="col-sm-6 mobView">
							<a href="<?php echo get_permalink() ?>">
								<div class="customPostBox">
									<div class="postCategory badge">
										<?php
										$post_id = get_the_ID();
										$terms = get_the_terms($post_id, 'category');
										if ($terms && !is_wp_error($terms)):
											$tslugs_arr = array();
										endif;
										?>
									</div>
									<div class="postHeading">
										<h3><?php the_title(); ?></h3>
									</div>
									<div class="postPercentageSection">
										<?php if (!$both_contents_empty) : ?>
											<div class="postPercentage">
												<div class="midSizeHeading"><?php echo $first_stat_title; ?></div>
												<p><?php echo $first_stat_content; ?></p>
											</div>
											<div class="postPercentage">
												<div class="midSizeHeading"><?php echo $second_stat_title; ?></div>
												<p><?php echo $second_stat_content; ?></p>
											</div>
										<?php else : ?>
											<p><?php echo $post_content; ?></p>
										<?php endif; ?>
									</div>
									<?php if ( $dflip_id = get_field( 'dflip_id' ) ) : ?>
										<div class="postReadMore">
											<a href="<?php echo get_permalink() ?>" target="_blank">Read Now</a>
										</div>
									<?php endif; ?>
									<div class="postReadMore">
										<button>Read Now</button>
									</div>
								</div>
							</a>
						</div>

					<?php endwhile; ?>		
				</div>
				<div class='pagination'>	
					<?php
						$total_pages = $loop->max_num_pages;

					    if ($total_pages > 1){
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
					    }
					?>
				</div>
			<?php endif; wp_reset_postdata(); ?>
		</div>
	</section>

	<script>
	    jQuery(function ($) {
	    var page = <?php echo json_encode($current_page); ?>; // Get the current page number from PHP

	    // Show/hide loader
	    function showLoader() {
	        $('#ajax-loader').show();
	        $('#ajax-overlay').show();
	    }

	    function hideLoader() {
	        $('#ajax-loader').hide();
	        $('#ajax-overlay').hide();
	    }

	    $(document).on('click', '.ajax-pagination a', function (e) {
	        e.preventDefault();
	        var $loadMoreBtn = $(this);

	        if ($loadMoreBtn.hasClass('prev') || $loadMoreBtn.hasClass('next')) {
	            // Handle previous and next page links
	            var pageUrl = $loadMoreBtn.attr('href');
	            page = getPageNumberFromUrl(pageUrl);
	        } else {
	            // Handle numbered pagination links
	            page = parseInt($loadMoreBtn.text());
	        }

	        showLoader(); // Show loader when the link is clicked

	        $.ajax({
	            url: ajaxpagination.ajaxurl,
	            type: 'post',
	            data: {
	                action: 'custom_ajax_pagination',
	                page: page
	            },
	            success: function (response) {
	                if (response.html) {
	                    $('#ajax-pagination-container').html(response.html);
	                    updatePaginationLinks(page); // Update pagination links
	                } else {
	                    $loadMoreBtn.text('No more posts');
	                    $loadMoreBtn.prop('disabled', true);
	                }

	                hideLoader(); // Hide loader after successful AJAX request
	            }
	        });
	    });
		
		function getPageNumberFromUrl(url) {
			var urlParts = url.split('/');
			var pageNumIndex = urlParts.indexOf('page') + 1;
			return pageNumIndex < urlParts.length ? parseInt(urlParts[pageNumIndex]) : 1;
		}


	    function updatePaginationLinks(currentPage) {
	        $('.ajax-pagination span, .ajax-pagination a').removeClass('current');
	        $('.ajax-pagination .page-numbers').each(function () {
	            if ($(this).text() == currentPage) {
	                $(this).addClass('current');
	            } else if (currentPage === 1 && $(this).text() === "‹") {
	                $(this).addClass('disabled');
	            } else {
	                $(this).removeClass('disabled');
	            }
	        });
	    }

	    // Initialize pagination links on page load
	    updatePaginationLinks(page);

	});
	$(document).ready(function() {
		$('.page-numbers').on('click', function(event) {
	        // Store in localStorage that the page is being reloaded due to a page numbers link click
	        localStorage.setItem('reloadSource', 'page-numbers');
	    });
		var reloadSource = localStorage.getItem('reloadSource');
	    
	    // Clear the reloadSource from localStorage after using it
	    localStorage.removeItem('reloadSource');
	    
	    // Scroll to the .caseStudies section on page load if necessary
	    if (reloadSource === 'page-numbers') {
	        // Scroll to the .caseStudies section
	        $('html, body').animate({
	            scrollTop: $('.caseStudies').offset().top
	        }, 700); // Adjust the animation duration as needed
	    }
	});
	</script>

<?php get_footer(); ?>