<?php get_header(); ?>
	<?php if(have_posts()): the_post(); ?>
		<section class="main">
			<div class="row align-items-center">
				<div class="gr"><img src="<?php bloginfo('template_url'); ?>/img/newsletter-bg.svg"></div>

				<div class="nl-form">
					<h1>keep<br> in touch</h1>
					<div class="text">Subscribe to our sporadic (for now) newsletter featuring approaches to performance marketing based on common sense and a ton of testing, not fads and hocus pocus.</div>
					<?php echo do_shortcode('[contact-form-7 id="3362" title="Newsletter Form"]'); ?>
					<p>Want to talk to us directly? Schedule an <a href="<?php bloginfo('url'); ?>/book-intro-call">intro call</a>.</p>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<script type="text/javascript">
         document.addEventListener( 'wpcf7mailsent', function( event ) {
              location = '<?php bloginfo('url'); ?>/thank-you-newsletter';
         }, false );
	</script>
<?php get_footer(); ?>