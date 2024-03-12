<?php get_header(); ?>
	<?php if(have_posts()): the_post(); ?>
		<section class="main">
			<div class="container">
				<div class="row align-items-start">
					<div class="col-md-6 pd-1">
						<h1>No<br class="hidden-mobile"> pitch.<br>Just solutions.</h1>
						<div class="subline">You will be prompted to pick a meeting time after submitting the form.</div>

						<div class="quote hidden-mobile">
							“Everyone else told me ‘Sorry, but that’s not something that we offer.’ When I talked to Opascope, the first thing they said was ‘We think we can figure out a way to make that work.’”
							<div class="auth">Marisa, Founder of a Law Firm</div>
						</div>
					</div>

					<div class="col-md-6 flex-end">
						<div class="form">
							<div class="form-head">Book Intro Call</div>
							<?php include get_template_directory() . '/reusable-form.php'; ?>
						</div>
						<div class="quote visible-mobile">
							“Everyone else told me ‘Sorry, but that’s not something that we offer.’ When I talked to Opascope, the first thing they said was ‘We think we can figure out a way to make that work.’”
							<div class="auth">Marisa, Founder of a Law Firm</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>

<?php get_footer(); ?>