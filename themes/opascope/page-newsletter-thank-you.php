<?php get_header(); ?>
	<?php if(have_posts()): the_post(); ?>
		<section class="main">
			<div class="row align-items-center">
				<div class="gr"><img src="<?php bloginfo('template_url'); ?>/img/newsletter-bg.svg"></div>

				<div class="nl-form">
					<h1>Your Subscription was Successful</h1>
					<p><a href="<?php bloginfo('url'); ?>">Go To Home Page</a></p>
				</div>
			</div>
		</section>
	<?php endif; ?>
<?php get_footer(); ?>