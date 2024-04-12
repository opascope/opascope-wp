<?php get_header(); ?>
	<?php if(have_posts()): the_post(); ?>
		<section class="main">
			<div class="container">
				<div class="row align-items-start">
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
			</div>
		</section>

		<section class="numbers">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="head">total client market capitalization</div>
						<div class="num">$ 310,290,084,075</div>
					</div>
					<div class="col-md-6">
						<div class="head">total ad spend analyzed</div>
						<div class="num">$ 826,982,024</div>
					</div>
				</div>
			</div>
		</section>

		<section class="how">
			<div class="container">
				<div class="item">
					<div class="head">How we look at the world</div>

					<div class="row">
						<div class="col-md-6">
							<div class="head-big">We are wired to do whatever it takes.</div>
						</div>
						<div class="col-md-6">
							<div class="text-1">Above all else, we’re problem solvers. Where other agencies see roadblocks, we see opportunities to unlock your potential:</div>
							<div class="text-2">
								<ul>
									<li>We solve problems other agencies don’t know to look for</li>
									<li>We’re technical and we’re not afraid to write some code</li>
									<li>We take extreme ownership of anything you hand us</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="head">How we work with you</div>

					<div class="row">
						<div class="col-md-6">
							<div class="head-big">We adjust to our
clients, not the
other way around.</div>
						</div>
						<div class="col-md-6">
							<div class="text-1">Positive change happens when you work side-by-side. We offer tailored client experiences that foster transparency and collaboration:</div>
							<div class="text-2">
								<ul>
									<li>Customized project management built for your team</li>
									<li>You work with experts, not junior account managers</li>
									<li>Integrated with your internal and external teams</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="head">Our commitments to our clients</div>

					<div class="row">
						<div class="col-md-6">
							<div class="head-big">Our relationships
							are measured in
							years, not months.</div>
						</div>
						<div class="col-md-6">
							<div class="text-1">We want to partner with our clients for the long term, and not because they’re contractually obligated to stick around:</div>
							<div class="text-2">
								<ul>
									<li>Opascope will be a profit center, not a cost center</li>
									<li>No long-term contracts; only results drive retention</li>
									<li>We’ll be strategic advisors and subject matter experts</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="quote-s">
			<div class="container">
				<div class="inner">
					<div class="text">“There are very few agencies that I can unconditionally recommend. Opascope is one. They’re an overall pleasure to work with.”</div>
					<div class="auth">Jen, Senior Manager at a Publicly Traded Cloud Management Company</div>
				</div>
			</div>
		</section>

		<section class="card">
			<div class="container">
				<div class="text"><span>Businesses are complicated.</span>
				This is why we don’t sell a package or process: because one size does not fit all. We identify opportunities, select the optimal growth levers, and operationalize bespoke marketing strategies while overcoming the obstacles that arise at scale.</div>
			</div>
		</section>

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
	<?php endif; ?>

<?php get_footer(); ?>