<?php get_header(); ?>
<style>
	.job_description {
		font-size: 22px;
	}
	h3.wp-block-heading {
	    padding-bottom: 25px;
	    margin: 0;
	}
	.job_title{
		display: flex;
		justify-content: space-between;
		align-items: center;
		column-gap: 20px;
		margin-bottom: 80px;
		margin-top: 63px;
	}
	.job_title .title{
		font-size: 64px;
		line-height: 75.6px;
		color: #000;
		font-weight: 700;
	}
	.job_description p {
		font-size: 22px;
		line-height: 37px;
		color: #000;
		margin-bottom: 38px;
	}
	.job_description ul {
		line-height: 42px;
		margin-bottom: 33px;
		margin-top: 0;
		padding-left: 22px;
	}
	.applyButton a {
		font-weight: 700;
		font-size: 18px;
		line-height: 18px;
		background: #000;
		color: #fff;
		padding: 14px 16px;
		border-radius: 0px;
		border: 1px solid #000;
		text-decoration: none;
	}
	.applyButton a:hover{
		background: #fff;
		color: #000;
	}

	.careers-form {
		padding: 80px 0 62px;
	}
	.wpcf7 {
		max-width: 600px;
		margin: 0 auto;
	}
	.wpcf7 label {
		font-weight: 700;
	}
	.wpcf7-submit {
		background: #000 !important;
		border-radius: 0 !important;
		border: 1px solid #000 !important;
		font-size: 16px !important;
		font-weight: 700;
		display: block;
		width: 100%;
		height: 44px;
		color: #fff;
		transition: 0.5s;
	}
	.wpcf7-submit:hover {
		background: #fff !important;
		color: #000 !important;
	}
	.careers-form input[type="text"],
	.careers-form input[type="email"],
	.careers-form input[type="url"],
	.careers-form input[type="file"]{
		border: 1px solid #41454a;
		background: #fff;
		border-radius: 0;
		height: 44px;
		width: 100%;
		padding-left: 12px;
	}
	.careers-form label {
		font-size: 15px;
	}
	.form-head {
		font-size: 36px;
		margin: 0 0 24px;
		font-weight: 700;
		text-align: center;
		color: #000;
	}
	.wpcf7 form.sent .wpcf7-response-output {
		border-color: black !important;
	}
	.wpcf7 form .wpcf7-response-output {
		border: none !important;
		text-align: center;
	}
	.wpcf7-not-valid-tip {
		font-size: 11px;
	}
	@media (max-width: 767px) {
		.applyButton{
			text-align: center;
		}

		.job_title{
			display: block;
			margin-bottom: 38px;
		}
		.job_title .title{
			margin-top: 0px;
			font-size: 32px;
			margin-bottom: 30px;
			line-height: 40px;
		}
		.job_description p {
			font-size: 18px;
			line-height: 27px;
		}
		.job_description ul {
			font-size: 18px;
			line-height: 35px;
		}
	}

</style>
<div class="container">
	<div class="job_title">
		<div class="title">
			<?php the_title(); ?>
		</div>
		<?php if ( $apply_link = get_field( 'apply_link' ) ) : ?>
			<div class="applyButton">
				<a href="#cf">Apply</a>
			</div>
		<?php endif; ?>
	</div>
	<div class="job_description">
		<?php the_content(); ?>
	</div>
	
	<?php if ( $apply_link = get_field( 'apply_link' ) ) : ?>
		<div class="applyButton">
			<a href="#cf">Apply</a>
		</div>
	
	<?php endif; ?>


	<section class="careers-form" id="cf">
		<div class="form-head">Apply for a Job at Opascope</div>
		<?php echo do_shortcode('[contact-form-7 id="f98dd88" title="Careers"]'); ?>
	</section>
</div>
<?php get_footer(); ?>
