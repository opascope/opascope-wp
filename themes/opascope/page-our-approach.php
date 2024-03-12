<?php get_header(); ?>
	<?php if(have_posts()): the_post(); ?>
		<section class="main">
			<div class="container">
				<div class="row align-items-start">
					<div class="col-md-6 pd-1">
						<h1>Problem-solving: a common sense approach to growth</h1>
						<div class="button">
							<a href="<?php bloginfo('url'); ?>/book-intro-call">Book Intro Call</a>
						</div>
					</div>

					<div class="col-md-6 flex-end">
						<div class="inner">
							<div>“They’re not just some average joe. They’re mathematicians.”</div>
							<div class="auth">Ian, VP of Marketing | Series D SaaS Company</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="problems">
			<div class="container">
				<div class="row">
					<div class="col-md-4 pd-1">
						<div class="subhead">TECHNICAL PROBLEM-SOLVING</div>
						<div class="head">We don’t throw money at things that are broken</div>
					</div>

					<div class="col-md-8">
						<div class="text">Before we start scaling any strategy, our priority is to build a strong foundation. Sometimes that means rebuilding an ad account. Other times it’s your measurement and attribution framework — either way, we start by fixing problems we know are holding you back.<br><br>Within the first 30 days, we expect our clients to see either reduced cost, increased efficiency or, at a minimum, visibility into what’s working and what’s not.</div>
					</div>
				</div>

				<div class="prob-head">Common Problems We See:</div>

				<div class="row columns">
					<div class="col">
						<div class="inner">
							<span>Technical issues</span> with websites, user journeys, and targeting.
						</div>
					</div>
					<div class="col">
						<div class="inner">
							Bad setups inside ad platforms that lead to <span>wasted ad dollars.</span>
						</div>
					</div>
					<div class="col">
						<div class="inner">
							<span>Broken analytics</span> that cause decision-making based on bad data.
						</div>
					</div>
					<div class="col">
						<div class="inner">
							Bugs and other errors in the funnel that <span>prevent conversions.</span>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="scaling">
			<div class="container">
				<div class="row">
					<div class="col-md-4 pd-1">
						<div class="subhead">THE SCALING PUZZLE</div>
						<div class="head">We don’t follow marketing fads; we find what’s right for your business</div>
					</div>

					<div class="col-md-8">
						<div class="text">Besides finding technical issues that are costing you money and prohibiting growth, there’s another way we view problem- solving.<br><br>It’s our primary approach to marketing.<br><br>When agencies follow — or even create — a new marketing fad, they’re saying every problem has the same solution. But fads are reactionary. And what works today might not work tomorrow.</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ask">
			<div class="container">
				<div class="head">Ask Us About</div>
				<div class="row">
					<div class="col">
						<div class="subhead">Value at Exit</div>
						<div class="text">How we made a founder an extra 200 million dollars on exit</div>
					</div>
					<div class="col">
						<div class="subhead">Savings at Scale</div>
						<div class="text">How we saved a VC backed unicorn 26 million dollars in 4 months.</div>
					</div>
					<div class="col">
						<div class="subhead">Zero Margin for Error</div>
						<div class="text">How we saved a company from running out of runway and onto a successful Series B.</div>
					</div>
				</div>
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