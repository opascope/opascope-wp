<?php get_header(); ?>
	<?php if(have_posts()): the_post(); ?>
		<section class="main">
			<div class="container">
				<div class="row align-items-start">
					<div class="col-md-7 pd-1">
						<h1>Effortless thought leadership content</h1>
						<div class="button">
							<a href="<?php bloginfo('url'); ?>/book-intro-call">Book Intro Call</a>
						</div>
					</div>

					<div class="col-md-5 flex-end">
						<div class="inner">
							<div>“The tipping point is that magic moment when an idea, trend, or social behavior crosses a threshold, tips, and spreads like wildfire.”</div>
							<div class="auth">— Malcolm Gladwell</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="services-section">
			<div class="container">
				<div class="head">WHAT YOU GET</div>

				<div class="row">
					<div class="col-md-4">
						<div class="inner">
							<div class="subhead">Short-Form Social</div>
							<div class="text">Video, image, and text content that introduces your brand for platforms like Meta, LinkedIn, YouTube Shorts, and more.</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="inner">
							<div class="subhead">Long-Form Social</div>
							<div class="text">Podcasts and long-form video that builds a relationship with your customer on channels like YouTube and Spotify.</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="inner">
							<div class="subhead">Website & Blog</div>
							<div class="text">Curated content that drives themes for blogs, white papers and articles that is engaging for visitors and search engines.  </div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="expect">
			<div class="container">
				<div class="head-sm">OUR PROCESS</div>
				<div class="head">Creating Thought Leadership Content Is As Easy As Joining A Zoom Meeting</div>

				<div class="row">
					<div class="col">
						<div class="num">01.</div>
						<div class="subhead">We Video A Conversation With You</div>

						<div class="text">We send you the camera – Our team will ship you the camera and other items to start filming immediately and will be there to support the setup.</div>
					</div>
					<div class="col">
						<div class="num">02.</div>
						<div class="subhead">We Find The Best Snippets</div>
						
						<div class="text">It’s as easy as a Zoom – Once we start filming, our content managers make it easy, comfortable and natural.  Even if it is your first time.</div>
					</div>
					<div class="col">
						<div class="num">03.</div>
						<div class="subhead">We Make You Look Your Best</div>
						
						<div class="text">We do the rest – Our production teams then use software and magic of editing to create compelling long form and short form video for easy distribution.</div>
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