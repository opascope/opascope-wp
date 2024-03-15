<?php get_header(); ?>
	
	<?php if(have_posts()): the_post(); ?>
		<section class="main default-page">
			<div class="container">
				<h1><?php the_title(); ?></h1>

				<div class="content">
					<?php the_content(); ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

<?php get_footer(); ?>