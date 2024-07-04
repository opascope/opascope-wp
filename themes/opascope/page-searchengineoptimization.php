<?php get_header(); ?>
	<?php if(have_posts()): the_post(); ?>
		<section class="main">
			<div class="container">
				<div class="row align-items-start">
					<div class="col-md-7 pd-1">
						<h1>There’s never been a better time to SEO your website.</h1>
						<div class="button">
							<a href="<?php bloginfo('url'); ?>/book-intro-call">Book Intro Call</a>
						</div>
					</div>

					<div class="col-md-5 flex-end">
						<div class="inner">
							<div>“The best time to plant a tree was 20 years ago. The second best time is today”</div>
							<div class="auth">— Chinese Proverb</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="services-section">
			<div class="container">
				<div class="head">WHAT WE DELIVER FOR FIRST PAGE RESULTS</div>

				<div class="row">
					<div class="col-md-4">
						<div class="inner">
							<div class="subhead">Quality Content First</div>
							<div class="text">Content that is valuable to humans, is valuable for search engines.</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="inner">
							<div class="subhead">Technical Expertise</div>
							<div class="text">Websites that are fast and easy rank are the ones that rank on the first page.</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="inner">
							<div class="subhead">Authority and Clout</div>
							<div class="text">If the backlinks don’t bring human traffic, they don’t work anymore.</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="expect">
			<div class="container">
				<div class="head-sm">WHAT YOU CAN EXPECT</div>
				<!--div class="head">Your experience with Opascope</div-->

				<div class="row">
					<div class="col">
						<div class="num">01.</div>
						<div class="subhead">A Full Audit That Drives The Strategy</div>

						<div class="text">The first thing we do is audit the entire website and your competitors’ websites.  This drives our keyword targeting strategy so we know what we are fighting for and who we are fighting against.</div>
					</div>
					<div class="col">
						<div class="num">02.</div>
						<div class="subhead">A Dedicated Team To Fix And Create</div>
						
						<div class="text">With the strategy in place, now is the time to get to work. We start with low hanging fruit first and second page rankings to get early wins. This is followed by steady optimizations that builds momentum of organic rankings and traffic</div>
					</div>
					<div class="col">
						<div class="num">03.</div>
						<div class="subhead">Measure What Matters</div>
						
						<div class="text">Rankings mean nothing if it doesn’t bring business.  We aren’t trying to rank for fluff long tail terms and we measure against business goals. Using the latest technologies for reporting, your team will have accurate reports at your fingertips.</div>
					</div>
				</div>
			</div>
		</section>

		<!--section class="drive">
			<div class="container">
				<div class="head-sm">HOW WE DRIVE GROWTH</div>

				<div class="row">
					<div class="col-md-5">
						<div class="head">Custom strategies based on impact deployed holistically and measured against revenue.</div>
					</div>
					<div class="col-md-7">
						<div class="text">The traditional agency approach is to fit every client into their process. That’s not us. We become a seamless extension of your revenue team.<br><br>

						We work to integrate our services into what your company is already doing, instead of running parallel. We also never silo our services: one team works together to produce and deploy a cohesive marketing strategy.<br><br>

						We don’t base success on fluff metrics. We care about impacting your bottom line. Period.</div>
					</div>
				</div>
			</div>
		</section>

		<section class="quote">
			<div class="container">
				<div class="text">“I’ve talked to a lot of marketing agencies and sales consultants and to be honest, a lot of them are full of it. Being marketers, they’re all marketing themselves. It can be hard to tell how much of what they’re saying is just marketing speak, and how much of it is the truth. One of the things I like most about Opascope is that their team calls it like it is.”</div>
				<div class="auth">Jen, Senior Manager at a Publicly Traded SaaS Company</div>
			</div>
		</section-->

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