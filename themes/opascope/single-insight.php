<?php get_header(); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<style>
	a {
	  outline : none !important;
	}
	.wp-block-column .wp-block-buttons .btnTwo a.wp-block-button__link {
	  color: #ffffff !important;
	}
	.single-journal .journal-new-page-bg-black-texts .wp-block-group__inner-container{
	  background: #11151C !important;
	}

	.single-journal .rightbox .content ul li,
	.single-journal .rightbox .content .list-Items li {
	  list-style: disc !important;
	  margin-left: 20px;
	}
	  .single-journal .rightbox .content ul li {
	    color: #11151C !important;
	  }

	.journal-new-page-bg-black-texts .takeways-heading {
	  border-bottom: 1px solid #ADADAD !important;
	}

	.rightbox .content .journal-new-page-bg-black-texts ul li {
	  color: #fff !important;
	  list-style: none !important;
	  margin-left: 0px;
	}

	.wp-block-column .wp-block-buttons .btnTwo a.wp-block-button__link:hover {
	  background-color: #ffffff !important;
	  color: #11151c !important;
	}

	.wp-block-button a.wp-element-button {
	  text-transform: capitalize;
	}
	.wp-block-embed iframe {
	    width: 100%;
	}
	#ez-toc-container {
	  background: #ffffff;
	  border: 1px solid #000;
	  border-radius: 0px;
	  -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
	  box-shadow: 0 2px 4px rgb(0 0 0 / 10%);
	  display: block;
	  margin-bottom: 15px;
	  padding: 10px;
	  position: sticky !important;
	  width: auto;
	  padding: 20px;
	  top: 20px;
	}

	.ez-toc-container-direction {
	  padding: 32px 32px 0px !important;
	}

	.ez-toc-container-direction {
	  margin-top: 20px;
	}

	.single-journal .ez-toc-title-container {
	  font-weight: 700;
	  border-bottom: 1px solid #11151c;
	  font-size: 18px;
	  padding-right: 50px;
	  padding-bottom: 12px;
	  color: #11151c;
	}

	#ez-toc-container {
		position: unset !important;
	}
	#ez-toc-container ul {
		list-style: none !important;
	}
	#ez-toc-container ul li a {
	  color: #6E7074 !important;
	  font-weight: 400;
	}


	div#ez-toc-container ul li a:hover {
	  text-decoration: none;
	  color: #11151c !important;
	}

	div#ez-toc-container ul li {
	  font-size: 18px;
	  margin: 24px 10px 24px 0px;
	}
	div#ez-toc-container ul li:last-child{
	  border:0px;
	}
	#ez-toc-container a:visited {
	  /*  color: #11151c !important; */
	  display: inline-block !important;
	}
	.ez-toc-counter nav ul li a::before, #ez-toc-container a.ez-toc-toggle {
	  display:none;
	}


	@media (max-width:767px){
	  .single-journal .rightbox .wp-block-image img {
	    height: auto !important;
	  }
	}

	@media(max-width: 991px) {
	    .single-journal .rightbox .content figure {
	      margin: 0 auto;
	      text-align: center;
	      padding-bottom: 20px;
	  }
	  .newsletterContentBox {
	    max-width: 100%;
	    padding: 20px 30px 50px !important;
	  }
	  .newsletterSection figure img {
	    width: 50%;
	    height: 100%;
	  }
	}
	@media(max-height:1000px) {
	  #ez-toc-container {
	    overflow: scroll;
	    padding-bottom: 0px !important;
	  }
	}
	@media(max-height:800px) {
	  #ez-toc-container {
	    min-height: 500px !important;
	    height: 300px;
	  }
	}


	@media(max-height:768px) {
	  #ez-toc-container {
	    padding-bottom: 0px !important;
	    min-height: 410px !important;
	    height: 300px;
	  }
	}

	/* journal page Emil */
	@media (max-width: 1024px) {
	  .single-journal .rightbox .content ul li {
	    font-size: 16px;
	    margin-bottom: 6px;
	  }
	.single-journal .rightbox .content p {
	  margin-bottom: 20px;
	}
	  .single-journal .statisticSection {
	    padding: 0;
	  }
	}
	@media (max-width: 767px) {
	  .page-template-archive-journal #content {
	    padding-top: 12px;
	  }
	  body .journal_pageTitle {
	    margin: 0;
	    padding-bottom: 10.4px !important;
	  }
	  body .journal_pageTitle h1 {
	    margin-bottom: 0 !important;
	  }
	  .page-template-archive-journal .horrizontal-line {
	    margin-bottom: 48px !important;
	  }
	  .page-template-archive-journal .postImage img {
	    width: 100% !important;
	    height: auto;
	  }
	  .page-template-archive-journal .customPostBox {
	    gap: 0px;
	  }
	  .journal-page-texts {
	    display: flex;
	    flex-wrap: wrap;
	  }
	  .postReadMore p{
	    display: none;
	  }
	  .postCategory {
	    order: 1;
	    margin-top: 16px;
	  }
	  .post-btns {
	    order: 4;
	  }
	  .postCategory span {
	    margin-top: 0 !important;
	    margin-bottom: 0px !important;
	  }
	  .postHeading h2 {
	    font-size: 24px !important;
	    line-height: 32px !important;
	  }
	  .post-btns {
	    gap: 19px;
	  }
	}
	p {
		margin-bottom: 1.6em;
	}
	p > em > a > strong {
		text-decoration: underline;
	}
	.postCategory {
		padding-bottom: 20px;
		min-height: 76px;
	}
	.postCategory > a {
		text-decoration: none;
	}
	.postCategory .badge{
		display: inline-block;
		background-color: #11151c;
		color: #ffffff;
		padding: 5px 8px;
		text-transform: uppercase;
		font-size: 12px;
		line-height: 16px;
		font-weight: 700;
		margin-right: 5px;
	}
	.banner {
		padding: 14px 0px 78px;
		margin-top: 36px;
	}

	.banner h1 {
		font-size: 68px;
		line-height: 74px;
		color: #11151C;
		font-weight: 700;
		margin: 0;
	}

	.banner ul {
		padding: 0px 0px 48px;
		margin-bottom: 0;
	}

	.banner ul li {
		list-style: none;
		font-size: 16px;
		line-height: 18.4px;
		display: flex;
		align-items: center;
	}
	.cta_top_wrapper {
		display: none;
	}
	
	
	.banner ul li a {
		color: #6E7074;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		line-height: 22.4px;
	}

	.banner ul li span {
		margin: 0px 5px;
		font-weight: 700;
		color: #11151c;
	}

	/* Banner Css Close */

	/* Percentage Section Css Start */

	.innersection {
		display: flex;
		justify-content: space-between;
		flex-wrap: wrap;
		padding: 0px 0px 160px;
	}

	.innersection .leftbox {
		width: 30%;
	}

	.innersection .rightbox {
		width: 63.5%;
	}

	.newsletterForm input {
	    height: 51px;
	    padding: 14px 16px;
	    width: 100%;
	    font-size: 15px;
	    border: 1px solid #41454a;
	    background: transparent;
	    color: #6E7074;
	}
	.newsletterForm input[type="submit"] {
		margin-top: 0px !important;
		padding: 16px 14px !important;
        background: #fff !important;
        color: #11151c !important;
		border: 1px solid #fff;
		max-width: 90px;
	}

	.newsletterForm input[type="submit"]:hover {
		background: transparent !important;
		color: #fff !important;
	}
	
	.read-more {
		display: none;
	} 
	
	.leftbox .newsletterForm {
		background-color: #11151c;
		padding: 50px 35px;
		margin-bottom: 20px;
	}
	
	.leftbox .newsletterForm > div:first-child {
		color: #fff;
		line-height: 26px;
		font-weight: 700;
		font-size: 16px;
		text-align: left;
		margin-bottom: 32px;
	}
	
	.leftbox .newsletterForm form {
		display: flex;
		flex-direction: row;
		align-items: flex-start;
		gap: 10px;
	}

	.leftbox .newsletterForm form p {
		margin: 0;
	}
	
	.leftbox .newsletterForm form input {
		background: transparent;
		color: #fff;
		border-radius: 0;
		padding: 18px 15px;
        border: 1px solid #fff;
	}
	
	.wp-block-columns {
		flex-wrap: nowrap !important;
	}
	
	.wpcf7 input:not([type=submit]), .wpcf7 select, .wpcf7 textarea {
		padding: 15px;
		border: 1px solid #fff;
	}
	
	.leftbox .newsletterForm form .Form-button {
		margin: 0;
	}
	
	.leftbox .newsletterForm form .Form-button input{
		min-height: 51px;
		padding: 14px 16px;
		width: 100%;
		font-size: 18px;
		border: 1px solid #fff;
		background: #fff;
		color: #11151c;
		border-radius: 0;
	}
	
	.rightbox .content {
		margin-bottom: 64px;
	}
	
	.rightbox .content ul {
		margin-bottom: 32px;
		margin-left: 0px;
		padding-left: 0;
		list-style: none;
	}

	.rightbox .content ul li{
		color: #11151C;
		font-size: 20px;
		line-height: 28px;
		margin-bottom: 15px;
	}
	
	.rightbox .content ul em{
		margin-left: 5px;
	}

	.rightbox .content h2 {
		color: #11151C;
		font-size: 48px;
		margin: 0px 0px 32px;
		line-height: 57px;
		font-weight: 700;
	}
	
	.rightbox .content h3 {
		color: #fff;
		font-size: 24px;
		line-height: 34px;
		font-weight: 700;
		margin: 0 0 30px;
    	padding-bottom: 16px;
	}

	.rightbox .content h4 {
		color: #11151C;
		font-size: 24px;
		line-height: 36px;
		font-weight: 600;
		margin-bottom: 16px;
	}
	
	.rightbox .content p {
		color: #11151C;
		font-size: 20px;
		line-height: 32px;
	}
	
	.rightbox .content p a {
		color: #000;
	}
	
	.rightbox .content blockquote {
		margin: 0;
		border: 0;
		padding: 16px 0;
	}
	
	.rightbox .content blockquote p {
		font-style: italic;
		font-weight: 700;
		font-size: 24px;
		line-height: 41px;
	}
	
	.rightbox .content figure{
		margin: 32px 0;
	}
	.rightbox .content figure {
	    margin: 0 auto;
	    text-align: center;
	}

	.rightbox .content figcaption {
		text-align: left;
		font-size: 16px;
		line-height: 24px;
		font-weight: 400;
		color: #11151c99;
	}

	.rightbox .content.text-category {
		margin-bottom: 0px !important;
	}

	.text-category p {
		margin-bottom: 20px;
	}

	/* Percentage Section Css Close */

	/* Desktop Percentage Section css */

	.desktopSection .Solution {
		width: 100%;
	}
	
	.desktopSection .alignCenter {
		text-align: center;
	}
	.desktopSection .leftBoxContent {
		position: sticky;
		top: 30px;
	}
	.mainsection {
		display: none;
	}
	.mainsection.desktopSection {
		display: block;
	}

	/* Desktop Percentage Section css close */


   /* Styling for bulleted list with white background starts*/

   .rightbox .content ul li.list-white {
	    list-style-type: disc; 
    	color: #11151C !important;
    	margin-left: 15px; 
	}

   /* Styling for bulleted list with white background ends*/

	/* Results Section css Start */

	.popular-post {
		padding: 160px 0px;
		background: #F9F9F9;
	}

	.popular-post h2 {
		font-size: 48px;
		font-weight: 600;
		color: #11151C;
		line-height: 56px;
		margin: 0 0 64px;
	}

	.popular-post h2 a {
		font-size: 48px;
		font-weight: 700;
		color: #11151C;
		line-height: 56px;
		text-decoration: none;
	}


	.popular-post .cards {
		display: flex;
		justify-content: space-between;
		flex-wrap: wrap;
	}

	.card {
		padding-top: 30px;
		position: relative;
		min-height: 525px;
	}

	.card h2 {
		font-size: 32px;
		font-weight: 600;
		color: #11151C;
		line-height: 44px;
		margin: 0 0 20px;
	}
	@media (min-width: 991px) {
		.card h2 {
			min-height: 295px;
		}
	}

	.card::before {
		position: absolute;
		content: '';
		background: #11151C;
		width: 80px;
		height: 1px;
		left: 0;
		top: 0;
		z-index: 9;
	}

	.card p {
		font-size: 20px;
		color: #6E7074;
		line-height: 30px;
		margin-bottom: 20px;
	}

	.card a {
		font-size: 16px;
		color: #11151C;
		line-height: 26px;
		text-transform: capitalize;
		text-decoration: underline;
		font-weight: 600;
	}

	.popular-post .owl-dot {
		width: 10px;
		height: 10px;
		background: #11151C !important;
		border: 1px solid #11151C !important;
		margin: 8px;
		border-radius: 50px;
	}

	.popular-post .owl-dot.active {
		background: transparent !important;
	}

	.popular-post .owl-dots {
		text-align: center;
		margin-top: 40px;
	}
	.bottom-line {
		position: absolute;
		bottom: 0;
	}

	.Jombo-section {
		padding: 80px 0px;
	}

	.journal-new-page-bg-black-texts {
		padding: 60px;
	}
	
	/* statistic css */

	.statisticSection {
		display: flex;
		flex-wrap: wrap;
		gap: 20px;
		padding-top: 80px;
	}
	.statistic {
		width: calc(25% - 15px);
		background: #11151C;
		padding: 40px 32px;
	}
	.statistic > div {
		font-size: 48px;
		font-weight: 600;
		color: #fff;
		line-height: 56px;
		margin-bottom: 32px;
	}
	.statistic > p {
		font-size: 22px;
		line-height: 32px;
		color: #fff;
		margin-bottom: 0px;
	}


	/* statistic css close */


	/* Responsive Css Start */

	@media(max-width: 1024px) {
		.innersection .leftbox .box {
			padding: 50px 30px;
		}
		
		.popular-post {
			padding: 140px 0px;
		}	
		
		.innersection {
			padding-bottom: 140px;
		}
		
		.newsletterForm input[type="submit"] {
			padding: 15px 20px !important;
			font-size: 16px !important;
		}
		
		.wpcf7 input:not([type=submit]), .wpcf7 select, .wpcf7 textarea {
			padding: 10px;
		}
		
		.leftbox .newsletterForm {
			padding: 40px 30px;
		}	
		
		.innersection .leftbox .box h2 {
			font-size: 58px;
			line-height: 80px;
		}

		.innersection .leftbox .box p {
			font-size: 26px;
			line-height: 34px;
		}


		.Jombo-section {
			padding: 50px 0px;
		}
		.bottom-line {
			position: initial;
		}
		.card,
		.postCategory {
			min-height: initial;
		}


	}

	@media(max-width: 991px) {
		.banner h1 {
			font-size: 50px;
			line-height: 70px;
			font-weight: 700;
		}

		.banner ul {
			padding: 0px 0px 40px;
		}

		.innersection .leftbox {
			width: 100%;
		}

		.wp-block-spacer {
			display: none;
		}
		
		
		.innersection .rightbox,
		.Solution {
			width: 100%;
			margin-top: 50px;
		}

		.innersection .leftbox .box {
			padding: 50px 30px;
		}

		.leftbox .newsletterForm form {
			justify-content: space-between;
		}
		
		.innersection {
            padding-bottom: 24px;
        }
		
		.innersection .leftbox .box h2 {
			font-size: 58px;
			line-height: 80px;
		}

		.innersection .leftbox .box p {
			font-size: 26px;
			line-height: 34px;
		}

		.rightbox .content h2 {
			font-size: 36px;
			line-height: 42px;
		}

		.rightbox .content p {
			font-size: 16px;
			line-height: 28px;
			margin-bottom: 0px;
		}

		.journal-new-page-p-text {
			margin-bottom: 32px !important;
		}
		
		.rightbox .content {
			margin-bottom: 40px;
		}

		.popular-post {
			padding: 64px 0px;
		}
		
		.has-background {
			padding: 64px 30px !important;
		}
		
		.rightbox .content h4 {
			font-size: 22px;
			line-height: 32px;
		}

		.button {
			width: 30%;
		}
		.mainsection {
			display: block;
		}
		.statisticSection {
			padding-top: 50px;
		}
		.statistic {
			width: calc(50% - 15px);
		}
	}

	@media(max-width: 767px) {
		.leftbox {
			display: none;
		}
		.cta_top_wrapper {
			display: block;
		}
		
		.banner {
			padding-bottom: 32px;
		}
		.innersection .rightbox {
			margin-top: 64px;
		}
		.rightbox .content h3 {
			margin-bottom: 16px;
			margin-top: 64px;
		}
		.journal-new-page-h3-heading {
			margin-top: 0px !important;
		}
		
		
		.rightbox .content blockquote {
			padding: 24px 0px 16px;
		}
		.wp-block-columns {
			margin: 0px;
			flex-wrap: wrap !important;
		}
		.has-background {
			padding: 64px 16px !important;
		}
		
		.journal-new-page-bg-black-texts {
			padding: 10px 16px !important;
		}
		
		.journal-new-page-bg-black-texts h3 {
			margin-top: 30px !important;
		}
		
		.leftbox .newsletterForm form {
			flex-wrap: wrap;
			gap: 20px;
		}
		.leftbox .newsletterForm form .Form-button {
			width: 100%;
		}
		.leftbox .newsletterForm {
			padding: 32px 16px;
		}
		.container{
			padding: 0 16px !important;
		}
		.banner h1 {
			font-size: 32px;
			line-height: 40px;
			font-weight: 700;
		}
		.leftbox .newsletterForm form input {
			padding: 17px 32px !important;
			font-size: 18px;
		}
		.banner h1 {
			padding-bottom: 25px;
		}
		.banner {
			padding: 12px 0 0px;
		}

		.banner ul {
			padding: 0px 0px 20px;
		}

		.innersection{
			padding: 32px 0;
		}
		.innersection {
			padding-top: 0px;
		}
		
		
		.innersection .leftbox {
			width: 100%;
		}

		.innersection .rightbox,
		.Solution {
			width: 100%;
			margin-top: 20px;
		}

		.innersection .leftbox .box {
			padding: 32px 30px;
			margin-bottom: 16px;
		}

		.innersection .leftbox .box h2 {
			font-size: 42px;
			line-height: 50px;
			margin-bottom: 0;
		}

		.innersection .leftbox .box p {
			font-size: 18px;
			line-height: 24px;
		}

		.rightbox .content h2 {
			font-size: 28px;
			line-height: 38px;
		}

		.rightbox .content p {
			font-size: 16px;
			line-height: 28px;
		}

		.rightbox .content {
			margin-bottom: 40px;
		}

		.rightbox .content h4 {
			font-size: 20px;
			line-height: 28px;
		}

		.popular-post .cards .card {
			width: 100%;
			margin-bottom: 30px;
		}
		
		.popular-post {
			padding: 48px 0 !important;	
		}

		.popular-post .card h2 {
			font-size: 20px;
			line-height: 36px;
			margin-bottom: 10px;
		}

		.popular-post h2 {
			margin-bottom: 30px;
		}
		.card p,
		.card a {
			font-size: 16px;
			line-height: 30px;
		}
		
		.statistic {
			width: 100%;
		}
	}
	/* Responsive Css Close */

</style>
<div class="single-journal">
    <!-- Banner Section -->
	<div class="container">	
		<div class="banner">
			<div class="postCategory badge">
				<a href="<?php bloginfo('url'); ?>/insights"><span class="badge badge-primary">Insights</span></a>
			</div>

			<h1><?php the_title(); ?></h1>

			<?php if ( have_rows( 'statistics' ) ) : ?>
				<?php while ( have_rows( 'statistics' )) :
					the_row(); ?>
					<?php if ( get_sub_field( 'title_first_stat' ) || get_sub_field( 'content_first_stat' ) ) : ?>
						<div class="statisticSection">
							<?php if ( get_sub_field( 'title_first_stat' ) || get_sub_field( 'content_first_stat' ) ) : ?>
								<div class="statistic">
									<div><?php echo esc_html( get_sub_field( 'title_first_stat' ) ); ?></div>
									<p><?php echo esc_html( get_sub_field( 'content_first_stat' ) ); ?></p>
								</div>
							<?php endif; ?>
							<?php if ( get_sub_field( 'title_second_stat' ) || get_sub_field( 'content_second_stat' ) ) : ?>
								<div class="statistic">
									<div><?php echo esc_html( get_sub_field( 'title_second_stat' ) ); ?></div>
									<p><?php echo esc_html( get_sub_field( 'content_second_stat' ) ); ?></p>
								</div>
							<?php endif; ?>
							<?php if ( get_sub_field( 'title_third_stat' ) || get_sub_field( 'content_third_stat' ) ) : ?>
								<div class="statistic">
									<div><?php echo esc_html( get_sub_field( 'title_third_stat' ) ); ?></div>
									<p><?php echo esc_html( get_sub_field( 'content_third_stat' ) ); ?></p>
								</div>
							<?php endif; ?>
							<?php if ( get_sub_field( 'title_fourth_stat' ) || get_sub_field( 'content_fourth_stat' ) ) : ?>
								<div class="statistic">
									<div><?php echo esc_html( get_sub_field( 'title_fourth_stat' ) ); ?></div>
									<p><?php echo esc_html( get_sub_field( 'content_fourth_stat' ) ); ?></p>
								</div>
							<?php endif; ?>
						</div>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
    <!-- Banner Section Close -->

	<div class="container">
		<div class="mainsection desktopSection">
			<div class="innersection">
				<div class="leftbox">
					<div class="leftBoxContent">
						<?php echo do_shortcode('[ez-toc]');  ?>
						<div class="alignCenter newsletterForm">
							<div>Please send me tips on marketing strategies that impact revenue.</div>
							<?php echo do_shortcode('[contact-form-7 id="2782" title="Insight Marketing Form"]'); ?>
						</div>
					</div>
				</div>

				<div class="rightbox">
					<div class="content">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>	

    <div class="popular-post">
		<div class="container">
			<h2>Popular Post</h2>
			<div class="owl-carousel">
				<?php
				$args = array(
					'post_type' => 'insight',
					'posts_per_page' => 3
				);
				$query = new WP_Query($args);

				if ($query->have_posts()) {
					while ($query->have_posts()) {
						$query->the_post();
						?>
						<div class="item">
							<div class="card">
								<div class="postCategory badge">
									<?php
									$post_id = get_the_ID();
									$terms = get_the_terms($post_id, 'insight-category');
									foreach($terms as $term) {
										echo '<span class="badge badge-primary">' . $term -> name . '</span>';
									}
									?>
								</div>
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<div class="bottom-line">
									<p><?php echo get_field('excerpt'); ?></p>
									<a href="<?php the_permalink(); ?>">Read More</a>
								</div>
							</div>
						</div>
						<?php
					}
				}

				wp_reset_postdata();
				?>
			</div>
		</div>
	</div>

	<section class="letstalk">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-7"><div class="text">Let’s<br><span>talk</span></div></div>
				<div class="col-md-5">
					<div class="form">
						<div class="form-head">Let us show you how we’re different</div>
						<?php include get_template_directory() . '/reusable-form.php'; ?>
					</div>
				</div>
			</div>
		</div>
	</section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                items: 3, // Number of items to display
                margin: 40,
                loop: true, // Enable infinite loop
                autoplay: false, // Enable autoplay
                nav: false, // Enable navigation arrows
                dots: true,
                // Add more options as needed
                responsive: {
                    // breakpoint for Phone
                    0: {
                        items: 1
                    },
                    // breakpoint for Ipad
                    767: {
                        items: 2
                    },
                    // breakpoint for Ipad Pro
                    1024: {
                        items: 2
                    },
                    // breakpoint for Ipad Pro
                    1600: {
                        items: 2
                    },
                }
            });
        });
    </script>
</div>

<?php get_footer(); ?>
