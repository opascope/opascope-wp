
<?php get_header(); ?>
	
	<?php if(have_posts()): the_post(); ?>
		<section class="main">
			<div class="container">
				<div class="content">
					<div class="login-form">
						<h1><?php the_title(); ?></h1>
						<?php echo do_shortcode('[wp_login_form form_id="cstmloginform" redirect="https://opascope.com/dashboard/"]'); ?>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>

<?php get_footer(); ?>