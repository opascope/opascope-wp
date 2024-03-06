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
			</section>
		</div>

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
								We solve problems other agencies don’t know to look for<br>
								We’re technical and we’re not afraid to write some code<br>
								We take extreme ownership of anything you hand us
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
								Customized project management built for your team<br>
You work with experts, not junior account managers<br>
Integrated with your internal and external teams
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
								Opascope will be a profit center, not a cost center<br>
								No long-term contracts; only results drive retention<br>
								We’ll be strategic advisors and subject matter experts
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
				<div class="text"><span>Businesses are complicated.</span><br>
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
							<script src="https://www.google.com/recaptcha/api.js"></script>
							<script>
								function timestamp() { var response = document.getElementById("g-recaptcha-response"); if (response == null || response.value.trim() == "") {var elems = JSON.parse(document.getElementsByName("captcha_settings")[0].value);elems["ts"] = JSON.stringify(new Date().getTime());document.getElementsByName("captcha_settings")[0].value = JSON.stringify(elems); } } setInterval(timestamp, 500); 
							</script>
							<script>
								function validate() {
									document.querySelector('#formBtn').disabled = false;
								}

								function submitForm() {
									var form = document.getElementById("salesforce_form");
									var returl = document.getElementById("returl");
									var email = document.getElementById('email').value;
									returl.value += "?businessEmail=" + email;

									validate();

								  return true;  // return false to not submit the form
								}

								function timestamp() { 
									var response = document.getElementById("g-recaptcha-response");
									if (response == null || response.value.trim() == "") {
										var elems = JSON.parse(document.getElementsByName("captcha_settings")[0].value);elems["ts"] = JSON.stringify(new Date().getTime());
										document.getElementsByName("captcha_settings")[0].value = JSON.stringify(elems);
									}
								} 
								setInterval(timestamp, 500); 

							</script>
							<!--  ----------------------------------------------------------------------  -->
							<!--  NOTE: Please add the following <FORM> element to your page.             -->
							<!--  ----------------------------------------------------------------------  -->

							<form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" id="salesforce_form">
								<input type=hidden name='captcha_settings' value='{"keyname":"opascope","fallback":"true","orgId":"00D5e000002Gmku","ts":""}'>
								<input type="hidden" name="utm_campaign_first__c" value="">
								<input type="hidden" name="utm_source_first__c" value="">
								<input type="hidden" name="utm_medium_first__c" value="">
								<input type="hidden" name="utm_term_first__c" value="">
								<input type="hidden" name="utm_content_first__c" value="">
								<input type="hidden" name="utm_campaign_last__c" value="">
								<input type="hidden" name="utm_source_last__c" value="">
								<input type="hidden" name="utm_medium_last__c" value="">
								<input type="hidden" name="utm_term_last__c" value="">
								<input type="hidden" name="utm_content_last__c" value="">
								<input type="hidden" name="gclid__c" value="">
								<input type="hidden" name="ga_id__c" value="">
								<input type=hidden name="oid" value="00D5e000002Gmku">
								<input type=hidden name="retURL" value="https://opascope.com/thank-you/">

								<!--  ----------------------------------------------------------------------  -->
								<!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
								<!--  these lines if you wish to test in debug mode.                          -->
								<!--  <input type="hidden" name="debug" value=1>                              -->
								<!--  <input type="hidden" name="debugEmail" value="max@opascope.com">        -->
								<!--  ----------------------------------------------------------------------  -->

								<label for="email">Business Email*</label><input id="email" maxlength="80" name="email" size="20" type="email" required><br>

								<label for="00N5e00000dTfFn">How Did You Hear About Us*</label><input  id="00N5e00000dTfFn" class="inputFieldTwo" maxlength="255" name="00N5e00000dTfFn" size="20" type="text" required /><br>

								<label for="00N5e00000dTfFs">Estimated Monthly Media Spend*</label><input  id="00N5e00000dTfFs" class="inputFieldTwo" maxlength="255" name="00N5e00000dTfFs" size="20" type="text" required /><br><br>

								<input  id="00NUU0000004Pav" class="consent" name="00NUU0000004Pav" type="checkbox" value="1"/><label for="00NUU0000004Pav"><span data-nosnippet>I consent to receive marketing communication emails from Opascope using the contact details I have provided.</span></label><br>

								<input type="hidden" id="lead_source" name="lead_source" value="">
								<input type="hidden" id="00N5e00000dU1MC" name="00N5e00000dU1MC" value="">
								<input  id="00N5e00000dU0pl" name="00N5e00000dU0pl" type="hidden" value="" />
								
								<div class="g-recaptcha" data-sitekey="6LdtoxkpAAAAAG9AU4d7EbvpirUwiGPUi9JpRbOx" data-callback="validate"></div>

								<input id="formBtn" type="submit" name="submit" onClick="submitForm()" disabled>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>

<?php get_footer(); ?>