<?php get_header(); ?>
	<?php if(have_posts()): the_post(); ?>
		<section class="main">
			<div class="container">
				<div class="row align-items-start">
					<div class="col-md-7">
						<h1>We don’t sell a packaged solution — we sell growth.</h1>
						<div class="button">
							<a href="<?php bloginfo('url'); ?>/book-intro-call">Book Intro Call</a>
						</div>
					</div>

					<div class="col-md-5 flex-end">
						<div class="inner">
							<div>“Opascope is different than any other performance agency I’ve ever worked with because they truly embed themselves in your team, and it’s rare if ever, to hear them say, ‘That’s out of scope for us,’ like they will find a way.”</div>
							<div class="auth">Steve, Director of Marketing at a D2C Tech Company</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="services-section">
			<div class="container">
				<div class="head">Services</div>

				<div class="row">
					<div class="col-md-4">
						<div class="inner">
							<div class="subhead">Performance Marketing</div>
							<div class="text">Paid media that’s actually based on performance.</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="inner">
							<div class="subhead">Funnel Optimization</div>
							<div class="text">More than just CRO, we provide everything optimization.</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="inner">
							<div class="subhead">Strategy & Consulting</div>
							<div class="text">We take the uncertainty out of what to do and when.</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="expect">
			<div class="container">
				<div class="head-sm">What You Can Expect</div>
				<div class="head">Your experience with Opascope</div>

				<div class="row">
					<div class="col">
						<div class="num">01.</div>
						<div class="subhead">Paid Advertising That
						Drives Revenue</div>

						<div class="text">Performance marketing needs to be
						profitable, repeatable, and measurable.
						We build programs that scale coupled
						with best-in-class reporting.</div>
					</div>
					<div class="col">
						<div class="num">02.</div>
						<div class="subhead">Technical Issues Stop Holding You Back</div>
						
						<div class="text">Most agencies lean on your dev team.
						You can lean on ours. <a href="<?php bloginfo('url'); ?>/our-approach">Learn more</a>
						about why problem-solving and
						systems thinking are core to our
						approach.</div>
					</div>
					<div class="col">
						<div class="num">03.</div>
						<div class="subhead">Reporting that answers your questions</div>
						
						<div class="text">Tired of big reports that don’t actually
						say anything? We work with you to
						identify the important questions and
						build your reporting around them.</div>
					</div>
				</div>
			</div>
		</section>

		<section class="drive">
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