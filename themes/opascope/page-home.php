<?php get_header(); ?>
	<?php if(have_posts()): the_post(); ?>
		<div class="container">
			<section class="main">
				<div class="row">
					<div class="col-md-5">
						<h1>Profitable performance marketing.</h1>
						<div class="button">
							<a href="<?php bloginfo('url'); ?>/book-intro-call">Book Intro Call</a>
						</div>
					</div>

					<div class="col-md-7 flex-end">
						<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

						<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


						<div class="slider-wrap">
						  <div class="slider">
						    <div>
						      <div class="item">
						        <div class="quote">"Opascope feels like an extension of the team. They think like founders; they think like engineers; they think like strategists."</div>
						        <div class="name">
						          <strong>Kenneth</strong>
						          Founder | Series B Lifestyle Startup
						        </div>
						      </div>
						    </div>

						    <div>
						      <div class="item">
						        <div class="quote">"The significant value Opascope brings to the table is maximizing the budget and maximizing the return."</div>
						        <div class="name">
						          <strong>Rob</strong>
						          Senior Director of Marketing | 950mm Revenue Tech Company
						        </div>
						      </div>
						    </div>

						    <div>
						      <div class="item">
						        <div class="quote">"They're not just some average joe. They're mathematicians." <br><br><br> </div>
						        <div class="name">
						          <strong>Ian</strong>
						          VP of Marketing | Series D SaaS Company
						        </div>
						      </div>
						    </div>
						  </div>
						</div>
						<script>
						$(function() {

						  $('.slider').slick({
						    dots: true,
						    arrows: false,
						    vertical: true
						  });

						})
						</script>
					</div>
				</div>
			</section>
		</div>
	<?php endif; ?>

<?php get_footer(); ?>