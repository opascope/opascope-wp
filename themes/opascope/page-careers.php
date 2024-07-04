<?php get_header(); ?>
<style>
	.careers section {
		padding-top: 63px;
	}
	.benefits,
	.values,
	.ints { 
		display: flex;
		flex-wrap: wrap;
		column-gap: 45px;
	}
	.value {
		width: calc(50% - 30px);
		padding: 25px 0px;
	}
	.benefit {
		width: calc(33.3% - 30px);
		padding: 25px 0px;
	}
	.int {
		width: calc(25% - 40px);
		padding: 25px 0px;
	}
	.valuesSection {
		margin-bottom: 40px;
	}
	.positionsSection {
		background: #11151C;
		padding: 35px;
	}
	.positionsSection * {
		color: #fff !important;
	}
	.benefitsSection,
	.valuesSection,
	.positionsSection,
	.intsSection{
		margin-top: 70px;
	}
	.benefitsSection h1,
	.valuesSection h1,
	.positionsSection h1,
	.intsSection h1{
		font-size: 40px;
		line-height: 52px;
		font-weight: 700;
		margin-bottom: 30px;
		color: #11151C;
	}
	.subSection h2,
	.benefitsSection h2,
	.valuesSection h2,
	.positionsSection h2,
	.intsSection h2{
		font-size: 24px;
		line-height: 32px;
		font-weight: 700;
		margin-bottom: 15px;
		color: #11151C;
	}
	.positionsSection h2 {
		margin-bottom: 0px;
	}
	.subSection p,
	.benefitsSection p,
	.valuesSection p{
		font-size: 16px;
		line-height: 30px;
		font-weight: 400;
		color: #11151C;
		margin-bottom: 0px;
	}
	.positionText a:hover {
		text-decoration: underline;
	}
	.positionText .job_category {
		font-style: italic;
		font-weight: 400;
		font-size: 16px;
		color: #11151C;
	}
	.positionsSection h2 a{
		font-size: 24px;
		line-height: 32px;
		font-weight: 700;
		font-style: normal;
		color: #11151C;
	}
	.positionButton a {
		font-weight: 700;
		font-size: 20px;
		line-height: 48px;
		color: #11151C;
		text-decoration: underline;
	}
	.position {
		display: flex;
		justify-content: space-between;
		flex-wrap: wrap;
		padding: 25px 0px;
	}
	.positionsSection {
		margin-top: 70px;
	}
	.customPostPreview{
		/*     padding-top: 100px; */
	}
	.career_pageTitle {
		margin: 0 0 76px;
		display: -moz-box;
		display: flex;
		-moz-box-orient: horizontal;
		-moz-box-direction: normal;
		flex-direction: row;
		flex-wrap: wrap;
		width: 100%;
		-moz-box-pack: justify;
		justify-content: space-between;
		-moz-box-align: flex-end;
		align-items: center;
		border-bottom: 1px solid #ADADAD;
		padding-bottom: 140px;
	}
	.career_pageTitle h1 {
		margin: 0;
		font-weight: 700;
		font-size: 64px;
		line-height: 130%;
		text-transform: capitalize;
		color: #11151c;
		flex-basis: -webkit-calc(50% - 16px);
		flex-basis: calc(50% - 16px);
	}
	.career_pageTitle p {
		font-size: 22px;
		line-height: 150%;
		letter-spacing: -.01em;
		flex-basis: -webkit-calc(50% - 16px);
		flex-basis: calc(50% - 16px);
		color: #000;
		margin-bottom: 0;
	}
	.customPostPreview .row{
		display: -moz-box;
		display: flex;
		-moz-box-orient: horizontal;
		-moz-box-direction: normal;
		flex-direction: row;
		flex-wrap: wrap;
		width: 100%;
		-moz-box-pack: justify;
		justify-content: space-between;
	}
	.customPostPreview .col-sm-6{
		margin-bottom: 32px;
		margin: 0 0 64px;
		flex-basis: -webkit-calc(50% - 16px);
		flex-basis: calc(50% - 16px);
	}
	
	@media (max-width: 991px){
		.career_pageTitle{
			display: block;
    		padding-bottom: 60px;
		}
		.career_pageTitle h1{
			font-size: 54px;
			margin-bottom: 38px;
		}
	}
	
	@media (max-width: 767px) {
		.career_pageTitle h1 {
			margin-top: 0px;
			font-size: 32px !important;
			margin-bottom: 38px !important;
		}
		.career_pageTitle {
			display: block !important;
			margin-bottom: 50px;
		}
		.career_pageTitle p {
			font-size: 18px;
			line-height: 27px;
		}
		.benefitsSection h1,
		.positionsSection h1,
		.intsSection h1 {
			font-size: 32px;
			margin-bottom: 0px;
		}
		.benefitsSection h2,
		.positionsSection h2,
		.intsSection h2 {
			font-size: 22px;
			line-height: 30px;
		}
		.benefit,
		.int,
		.value  {
			width: 100%;
			padding: 25px 0px;
		}
		.position {
			display: flex;
			padding: 25px 0px;
			flex-direction: column;
		}
		.benefitsSection p,
		.intsSection p{
			line-height: 24px;
		}
	}

</style>
<section>
	<div class="container">
		<div class="career_pageTitle">
			<h1><?php echo get_the_title(); ?></h1>
			<?php if ( $content = get_field( 'content' ) ) : ?>
				<p><?php echo $content; ?></p>
			<?php endif; ?>
		</div>
		
		<?php if ( have_rows( 'sub_section' ) ) : ?>
			<div class="subSection">
				<?php while ( have_rows( 'sub_section' ) ) :
					the_row(); ?>
					<?php if ( $sub_heading = get_sub_field( 'sub_heading' ) ) : ?>
						<h2><?php echo esc_html( $sub_heading ); ?></h2>
					<?php endif; ?>
					<?php if ( $body_text = get_sub_field( 'body_text' ) ) : ?>
						<p>	<?php echo esc_html( $body_text ); ?></p>
					<?php endif; ?>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
		<?php if ( have_rows( 'benefits_section' ) ) : ?>
			<div class="benefitsSection">
				<?php while ( have_rows( 'benefits_section' ) ) :
					the_row(); ?>
					<?php if ( $main_heading = get_sub_field( 'main_heading' ) ) : ?>
						<h1><?php echo esc_html( $main_heading ); ?></h1>
					<?php endif; ?>
					<?php if ( $main_desc = get_sub_field( 'main_description' ) ) : ?>
						<div class="desc"><?php echo $main_desc; ?></div>
					<?php endif; ?>
					<div class="benefits">
						<?php if ( $heading_benefit_1 = get_sub_field( 'heading_benefit_1' ) || $description_benefit_1 = get_sub_field( 'description_benefit_1' )) : ?>
						<div class="benefit">
							<?php if ( $heading_benefit_1 = get_sub_field( 'heading_benefit_1' ) ) : ?>
							<h2><?php echo esc_html( $heading_benefit_1 ); ?></h2>
							<?php endif; ?>
							<?php if ( $description_benefit_1 = get_sub_field( 'description_benefit_1' ) ) : ?>
							<p><?php echo esc_html( $description_benefit_1 ); ?></p>
							<?php endif; ?>
						</div>
						<?php endif; ?>
						<?php if ( $heading_benefit_2 = get_sub_field( 'heading_benefit_2' ) || $description_benefit_2 = get_sub_field( 'description_benefit_2' )) : ?>
						<div class="benefit">
							<?php if ( $heading_benefit_2 = get_sub_field( 'heading_benefit_2' ) ) : ?>
							<h2><?php echo esc_html( $heading_benefit_2 ); ?></h2>
							<?php endif; ?>
							<?php if ( $description_benefit_2 = get_sub_field( 'description_benefit_2' ) ) : ?>
							<p><?php echo esc_html( $description_benefit_2 ); ?></p>
							<?php endif; ?>
						</div>
						<?php endif; ?>
						<?php if ( $heading_benefit_3 = get_sub_field( 'heading_benefit_3' ) || $description_benefit_3 = get_sub_field( 'description_benefit_3' )) : ?>
						<div class="benefit">
							<?php if ( $heading_benefit_3 = get_sub_field( 'heading_benefit_3' ) ) : ?>
							<h2><?php echo esc_html( $heading_benefit_3 ); ?></h2>
							<?php endif; ?>
							<?php if ( $description_benefit_3 = get_sub_field( 'description_benefit_3' ) ) : ?>
							<p><?php echo esc_html( $description_benefit_3 ); ?></p>
							<?php endif; ?>
						</div>
						<?php endif; ?>
						<?php if ( $heading_benefit_4 = get_sub_field( 'heading_benefit_4' ) || $description_benefit_4 = get_sub_field( 'description_benefit_4' )) : ?>
						<div class="benefit">
							<?php if ( $heading_benefit_4 = get_sub_field( 'heading_benefit_4' ) ) : ?>
							<h2><?php echo esc_html( $heading_benefit_4 ); ?></h2>
							<?php endif; ?>
							<?php if ( $description_benefit_4 = get_sub_field( 'description_benefit_4' ) ) : ?>
							<p><?php echo esc_html( $description_benefit_4 ); ?></p>
							<?php endif; ?>
						</div>
						<?php endif; ?>
						<?php if ( $heading_benefit_5 = get_sub_field( 'heading_benefit_5' ) || $description_benefit_5 = get_sub_field( 'description_benefit_5' )) : ?>
						<div class="benefit">
							<?php if ( $heading_benefit_5 = get_sub_field( 'heading_benefit_5' ) ) : ?>
							<h2><?php echo esc_html( $heading_benefit_5 ); ?></h2>
							<?php endif; ?>
							<?php if ( $description_benefit_5 = get_sub_field( 'description_benefit_5' ) ) : ?>
							<p><?php echo esc_html( $description_benefit_5 ); ?></p>
							<?php endif; ?>
						</div>
						<?php endif; ?>
						<?php if ( $heading_benefit_6 = get_sub_field( 'heading_benefit_6' ) || $description_benefit_6 = get_sub_field( 'description_benefit_6' )) : ?>
						<div class="benefit">
							<?php if ( $heading_benefit_6 = get_sub_field( 'heading_benefit_6' ) ) : ?>
							<h2><?php echo esc_html( $heading_benefit_6 ); ?></h2>
							<?php endif; ?>
							<?php if ( $description_benefit_6 = get_sub_field( 'description_benefit_6' ) ) : ?>
							<p><?php echo esc_html( $description_benefit_6 ); ?></p>
							<?php endif; ?>
						</div>
						<?php endif; ?>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
		<?php if ( have_rows( 'int_section' ) ) : ?>
			<div class="intsSection">
				<?php while ( have_rows( 'int_section' ) ) :
					the_row(); ?>
					<?php if ( $main_heading = get_sub_field( 'main_heading' ) ) : ?>
						<h1><?php echo esc_html( $main_heading ); ?></h1>
					<?php endif; ?>
					<?php if ( $main_desc = get_sub_field( 'main_description' ) ) : ?>
						<div class="desc"><?php echo $main_desc; ?></div>
					<?php endif; ?>
					<div class="ints">
						<?php if ( $heading_int_1 = get_sub_field( 'heading_int_1' ) || $description_int_1 = get_sub_field( 'description_int_1' )) : ?>
						<div class="int">
							<?php if ( $heading_int_1 = get_sub_field( 'heading_int_1' ) ) : ?>
							<h2><?php echo esc_html( $heading_int_1 ); ?></h2>
							<?php endif; ?>
							<?php if ( $description_int_1 = get_sub_field( 'description_int_1' ) ) : ?>
							<p><?php echo esc_html( $description_int_1 ); ?></p>
							<?php endif; ?>
						</div>
						<?php endif; ?>
						<?php if ( $heading_int_2 = get_sub_field( 'heading_int_2' ) || $description_int_2 = get_sub_field( 'description_int_2' )) : ?>
						<div class="int">
							<?php if ( $heading_int_2 = get_sub_field( 'heading_int_2' ) ) : ?>
							<h2><?php echo esc_html( $heading_int_2 ); ?></h2>
							<?php endif; ?>
							<?php if ( $description_int_2 = get_sub_field( 'description_int_2' ) ) : ?>
							<p><?php echo esc_html( $description_int_2 ); ?></p>
							<?php endif; ?>
						</div>
						<?php endif; ?>
						<?php if ( $heading_int_3 = get_sub_field( 'heading_int_3' ) || $description_int_3 = get_sub_field( 'description_int_3' )) : ?>
						<div class="int">
							<?php if ( $heading_int_3 = get_sub_field( 'heading_int_3' ) ) : ?>
							<h2><?php echo esc_html( $heading_int_3 ); ?></h2>
							<?php endif; ?>
							<?php if ( $description_int_3 = get_sub_field( 'description_int_3' ) ) : ?>
							<p><?php echo esc_html( $description_int_3 ); ?></p>
							<?php endif; ?>
						</div>
						<?php endif; ?>
						<?php if ( $heading_int_4 = get_sub_field( 'heading_int_4' ) || $description_int_4 = get_sub_field( 'description_int_4' )) : ?>
						<div class="int">
							<?php if ( $heading_int_4 = get_sub_field( 'heading_int_4' ) ) : ?>
							<h2><?php echo esc_html( $heading_int_4 ); ?></h2>
							<?php endif; ?>
							<?php if ( $description_int_4 = get_sub_field( 'description_int_4' ) ) : ?>
							<p><?php echo esc_html( $description_int_4 ); ?></p>
							<?php endif; ?>
						</div>
						<?php endif; ?>
						<?php if ( $heading_int_5 = get_sub_field( 'heading_int_5' ) || $description_int_5 = get_sub_field( 'description_int_5' )) : ?>
						<div class="int">
							<?php if ( $heading_int_5 = get_sub_field( 'heading_int_5' ) ) : ?>
							<h2><?php echo esc_html( $heading_int_5 ); ?></h2>
							<?php endif; ?>
							<?php if ( $description_int_5 = get_sub_field( 'description_int_5' ) ) : ?>
							<p><?php echo esc_html( $description_int_5 ); ?></p>
							<?php endif; ?>
						</div>
						<?php endif; ?>
						<?php if ( $heading_int_6 = get_sub_field( 'heading_int_6' ) || $description_int_6 = get_sub_field( 'description_int_6' )) : ?>
						<div class="int">
							<?php if ( $heading_int_6 = get_sub_field( 'heading_int_6' ) ) : ?>
							<h2><?php echo esc_html( $heading_int_6 ); ?></h2>
							<?php endif; ?>
							<?php if ( $description_int_6 = get_sub_field( 'description_int_6' ) ) : ?>
							<p><?php echo esc_html( $description_int_6 ); ?></p>
							<?php endif; ?>
						</div>
						<?php endif; ?>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>

		<?php 
			// the query
			$wpb_all_query = new WP_Query(
				array(
					'post_type'=>'job',
					'post_status'=>'publish',
					'order' => 'ASC',
					'posts_per_page' => -1
				)
			);
		?>

		<?php if ( $wpb_all_query->have_posts() ) : ?>
			<div class="positionsSection">
				<h1>Open Positions</h1>

				<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
				<div class="position">
					<div class="positionText">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					</div>
					<div class="positionButton">
						<a href="<?php the_permalink(); ?>">Apply</a>
					</div>
				</div>
				<?php endwhile; ?>
				<!-- end of the loop -->
			</div>

			<?php wp_reset_postdata(); ?>

			<?php else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
		
		<?php if ( have_rows( 'values_section' ) ) : ?>
			<div class="valuesSection">
				<?php while ( have_rows( 'values_section' ) ) :
					the_row(); ?>

					<?php if ( $main_heading = get_sub_field( 'main_heading' ) ) : ?>
						<h1><?php echo esc_html( $main_heading ); ?></h1>
					<?php endif; ?>
					<div class="values">
						<?php if ( $heading_value_1 = get_sub_field( 'heading_value_1' ) || $description_value_1 = get_sub_field( 'description_value_1' )) : ?>
						<div class="value">
							<?php if ( $heading_value_1 = get_sub_field( 'heading_value_1' ) ) : ?>
							<h2><?php echo esc_html( $heading_value_1 ); ?></h2>
							<?php endif; ?>
							<?php if ( $description_value_1 = get_sub_field( 'description_value_1' ) ) : ?>
							<p><?php echo esc_html( $description_value_1 ); ?></p>
							<?php endif; ?>
						</div>
						<?php endif; ?>
						<?php if ( $heading_value_2 = get_sub_field( 'heading_value_2' ) || $description_value_2 = get_sub_field( 'description_value_2' )) : ?>
						<div class="value">
							<?php if ( $heading_value_2 = get_sub_field( 'heading_value_2' ) ) : ?>
							<h2><?php echo esc_html( $heading_value_2 ); ?></h2>
							<?php endif; ?>
							<?php if ( $description_value_2 = get_sub_field( 'description_value_2' ) ) : ?>
							<p><?php echo esc_html( $description_value_2 ); ?></p>
							<?php endif; ?>
						</div>
						<?php endif; ?>
						<?php if ( $heading_value_3 = get_sub_field( 'heading_value_3' ) || $description_value_3 = get_sub_field( 'description_value_3' )) : ?>
						<div class="value">
							<?php if ( $heading_value_3 = get_sub_field( 'heading_value_3' ) ) : ?>
							<h2><?php echo esc_html( $heading_value_3 ); ?></h2>
							<?php endif; ?>
							<?php if ( $description_value_3 = get_sub_field( 'description_value_3' ) ) : ?>
							<p><?php echo esc_html( $description_value_3 ); ?></p>
							<?php endif; ?>
						</div>
						<?php endif; ?>
						<?php if ( $heading_value_4 = get_sub_field( 'heading_value_4' ) || $description_value_4 = get_sub_field( 'description_value_4' )) : ?>
						<div class="value">
							<?php if ( $heading_value_4 = get_sub_field( 'heading_value_4' ) ) : ?>
							<h2><?php echo esc_html( $heading_value_4 ); ?></h2>
							<?php endif; ?>
							<?php if ( $description_value_4 = get_sub_field( 'description_value_4' ) ) : ?>
							<p><?php echo esc_html( $description_value_4 ); ?></p>
							<?php endif; ?>
						</div>
						<?php endif; ?>
						<?php if ( $heading_value_5 = get_sub_field( 'heading_value_5' ) || $description_value_5 = get_sub_field( 'description_value_5' )) : ?>
						<div class="value">
							<?php if ( $heading_value_5 = get_sub_field( 'heading_value_5' ) ) : ?>
							<h2><?php echo esc_html( $heading_value_5 ); ?></h2>
							<?php endif; ?>
							<?php if ( $description_value_5 = get_sub_field( 'description_value_5' ) ) : ?>
							<p><?php echo esc_html( $description_value_5 ); ?></p>
							<?php endif; ?>
						</div>
						<?php endif; ?>
						<?php if ( $heading_value_6 = get_sub_field( 'heading_value_6' ) || $description_value_6 = get_sub_field( 'description_value_6' )) : ?>
						<div class="value">
							<?php if ( $heading_value_6 = get_sub_field( 'heading_value_6' ) ) : ?>
							<h2><?php echo esc_html( $heading_value_6 ); ?></h2>
							<?php endif; ?>
							<?php if ( $description_value_6 = get_sub_field( 'description_value_6' ) ) : ?>
							<p><?php echo esc_html( $description_value_6 ); ?></p>
							<?php endif; ?>
						</div>
						<?php endif; ?>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
		</div>
		</section>
	<?php get_footer(); ?>
