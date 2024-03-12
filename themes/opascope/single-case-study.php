<?php get_header(); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<style>
	p {
		margin-bottom: 1.6em;
	}
	.single-case-study .container {
		flex-wrap: wrap;
	}	

	ul.breadcrumbs{
		margin-left: 0;
	}
	.breadcrumb-title{
		display: inline-block;
		overflow: hidden;
		white-space: nowrap;
		text-overflow: ellipsis;
		max-width: 60%;
	}
	.banner {
		padding: 14px 0px 78px;
	}

	.text ul li{
		color: #11151C;
		font-size: 20px;
		line-height: 28px;
	}
	
	.text ul em{
		margin-left: 5px;
	}

	.banner h1 {
		font-size: 68px;
		line-height: 74px;
		color: #11151C;
		font-weight: 700;
		margin: 0;
	}

	.banner ul {
		padding: 30px 0px 48px;
		margin-bottom: 0;
	}

	.banner ul li {
		list-style: none;
		font-size: 16px;
		line-height: 18.4px;
		display: flex;
		align-items: center;
	}

	.banner ul li a {
		color: #6E7074;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		line-height: 22.4px;
	}

	.banner ul li span {
		margin: 0px 5px;
		font-weight: 700;
		color: #11151c;
	}
	.banner ul li span.arrow_icon{
		margin: 0 10px 0 13px;
	}

	/* Banner Css Close */

	/* Percentage Section Css Start */

	.innersection {
		border-top: 1px solid #ADADAD;
		display: flex;
		justify-content: space-between;
		flex-wrap: wrap;
		padding: 60px 0px 40px;
	}

	.innersection .leftbox,
	.founderbox .founder {
		width: 32%;
	}

	.innersection .rightbox,
	.solution {
		width: 60%;
	}
	
	.the-result ul{
		/* list-style-type: none;
		margin-left: 0; */
		padding-top: 28px;
		padding-bottom: 28px;
	}
	
	.the-result ul li{
		margin-bottom: 5px;
	}

	.innersection {
		border-top: 1px solid #ADADAD;
		display: flex;
		justify-content: space-between;
		flex-wrap: wrap;
		padding: 60px 0px 40px;
	}

	.innersection .leftbox .box {
		background: #11151C;
		padding: 86px 0px;
		text-align: center;
		margin: 0px 0px 20px;
	}
	
	.innersection .leftbox .box p {
		padding: 0px 50px;
	}

	.single-case-study .innersection .leftbox .box > div {
		color: #fff;
		font-size: 80px;
		margin: 0px 0px 12px;
		line-height: 90px;
		font-weight: 700;
		background-color: transparent !important;
	}


	.single-case-study .innersection .leftbox .box p {
		color: #fff;
		font-size: 32px;
		margin: 0px;
		font-style: italic;
		line-height: 44px;
		background-color: transparent !important;
	}

	.rightbox .text h2 {
		color: #11151C;
		font-size: 48px;
		margin: 0px 0px 32px;
		line-height: 57px;
		font-weight: 700;
	}

	.rightbox .text p {
		color: #11151C;
		font-size: 20px;
		line-height: 28px;
	}

	.rightbox .text {
		margin-bottom: 64px;
	}

	.rightbox .text h4 {
		color: #11151C;
		font-size: 24px;
		line-height: 36px;
		font-weight: 600;
		margin-bottom: 16px;
	}

	.rightbox .text.text-category {
		margin-bottom: 0px !important;
	}

	.text-category p {
		margin-bottom: 20px;
	}

	/* Percentage Section Css Close */

	/* Desktop Percentage Section css */

	.desktopSection .solution {
		width: 100%;
	}
	
	.desktopSection .alignCenter {
		text-align: center;
	}
	.desktopSection .leftBoxContent {
		position: sticky;
		top: 30px;
	}
	.mainsection {
		display: none;
	}
	.founder-section {
		display: none;
	}
	.mainsection.desktopSection {
		display: block;
	}

	/* Desktop Percentage Section css close */

	/* Founder Section Css */

	.founderbox {
		display: flex;
		justify-content: space-between;
		align-items:center;
		flex-wrap: wrap;
		padding: 60px 0px;
	}

	.founder {
		background: #F9F9F9;
		padding: 86px 40px;
		margin-bottom: 20px;
	}

	.founder .f-title {
		color: #11151C;
		font-size: 24px;
		line-height: 36px;
		font-weight: 700;
		margin-bottom: 30px;
	}

	.founder .f-text {
		color: #11151C;
		font-size: 24px;
		line-height: 36px;
		font-weight: 400;
	}

	/* Founder Section Css Close */


	/* Results Section css Start */

	.founder > div {
		font-size: 40px;
		line-height: 48.84px;
		font-weight: 600;
		color: #11151C;
		line-height: 40px;
		margin-bottom: 30px;
	}

	.results .founder {
		text-align: center;
		height: fit-content;
	}
	
	.founder.alignCenter.bookIntro {
		padding-left: 10px; 
		padding-right: 10px;
	}
	
	.founder.alignCenter.bookIntro > div {
		font-size: 36px;
	}

	.founder a {
		background: #11151C;
		color: #fff;
		font-size: 20px;
		line-height: 32px;
		border: 1px solid #11151C;
		padding: 15px 30px;
		text-decoration: none;
		display: inline-block;
		transition: 0.5s;
	}

	.founder a:hover {
		background: transparent;
		color: #11151C;
		transition: 0.5s;
	}

	/* Results Section Css Close */

	.success-stories {
		padding: 160px 0px;
		background: #F9F9F9;
	}
	

	.success-stories h2 {
		font-size: 48px;
		font-weight: 600;
		color: #11151C;
		line-height: 56px;
		margin: 0 0 64px;
	}

	.success-stories .cards {
		display: flex;
		justify-content: space-between;
		flex-wrap: wrap;
	}

	.card {
		padding-top: 30px;
		position: relative;
	}

	.card h2 {
		font-size: 32px;
		font-weight: 600;
		color: #11151C;
		line-height: 44px;
		margin: 0 0 20px;
	}

	.card::before {
		position: absolute;
		content: '';
		background: #11151C;
		width: 80px;
		height: 2px;
		left: 0;
		top: 0;
		z-index: 9;
	}

	.card p {
		font-size: 20px;
		color: #6E7074;
		line-height: 30px;
		margin-bottom: 20px;
	}

	.card a {
		font-size: 16px;
		color: #11151C;
		line-height: 26px;
		text-transform: capitalize;
		text-decoration: underline;
		font-weight: 600;
	}

	.success-stories .owl-dot {
		width: 10px;
		height: 10px;
		background: #11151C !important;
		border: 1px solid #11151C !important;
		margin: 8px;
		border-radius: 50px;
	}

	.success-stories .owl-dot.active {
		background: transparent !important;
	}

	.success-stories .owl-dots {
		text-align: center;
		margin-top: 40px;
	}

	/* Responsive Css Start */

	@media(max-width: 1024px) {
		.innersection .leftbox .box {
			padding: 50px 0px;
		}

		.innersection .leftbox .box h2 {
			font-size: 58px;
			line-height: 80px;
		}

		.innersection .leftbox .box p {
			font-size: 26px;
			line-height: 34px;
		}

		.founderbox .founder {
			padding: 60px 20px;
		}
	}

	@media(max-width: 991px) {
		.banner h1 {
			font-size: 50px;
			line-height: 70px;
			font-weight: 700;
		}

		.banner ul {
			padding: 0px 0px 40px;
		}

		.innersection .leftbox,
		.founderbox .founder {
			width: 100%;
		}

		.innersection .rightbox,
		.solution {
			width: 100%;
			margin-top: 10px;
		}

		.innersection .leftbox .box {
			padding: 50px 0px;
		}

		.innersection .leftbox .box h2 {
			font-size: 58px;
			line-height: 80px;
		}

		.innersection .leftbox .box p {
			font-size: 26px;
			line-height: 34px;
		}

		.rightbox .text h2 {
			font-size: 36px;
			line-height: 42px;
		}

		.rightbox .text p {
			font-size: 16px;
			line-height: 28px;
		}

		.rightbox .text {
			margin-bottom: 40px;
		}

		.rightbox .text h4 {
			font-size: 22px;
			line-height: 32px;
		}

		.founder-section .founderbox {
			padding: 0px 0px 0px;
		}

		.founder-section .founder .f-title,
		.founder-section .founder .f-text {
			font-size: 20px;
			line-height: 28px;
		}

		.founderbox .founder {
			padding: 60px 20px;
		}

		.button {
			width: 30%;
		}
		.mainsection {
			display: block;
		}
		.founder-section {
			display: block;
		}
		.mainsection.desktopSection {
			display: none;
		}
	}

	@media(max-width: 767px) {
		.letstalk_desktop {
			display: none;
		}
		.letstalk_mobile {
			display: block;
		}
		.single-case-study .container{
			padding: 0 16px !important;
		}
		.arrow_icon {
			margin: 0 6px 0 9px !important;
		}
		.text ul li {
            font-size: 16px;
            line-height: 20px;
        }
		
		.banner h1 {
			font-size: 32px;
			line-height: 40px;
			font-weight: 700;
		}

		.banner {
			padding: 12px 0 70px;
		}

		.banner ul {
			padding: 0px 0px 20px;
		}

		.innersection{
			padding: 20px 0px;
		}

		.innersection .leftbox,
		.founderbox .founder {
			width: 100%;
		}

		.innersection .rightbox,
		.solution {
			width: 100%;
			margin-top: 5px;
		}

		.innersection .leftbox .box {
			padding: 32px 0px;
			margin-bottom: 16px;
			display: none;
		}

		.innersection .leftbox .box:first-child {
			display: block;
		}

		.single-case-study .innersection .leftbox .box > div {
			font-size: 42px;
			line-height: 50px;
			margin-bottom: 0;
		}

		.single-case-study .innersection .leftbox .box p {
			font-size: 18px;
			line-height: 24px;
			padding: 0 16px;
		}
		
		.rightbox .text h2 {
			font-size: 28px;
			line-height: 38px;
		}

		.rightbox .text p {
			font-size: 16px;
			line-height: 28px;
		}

		.rightbox .text {
			margin-bottom: 40px;
		}

		.rightbox .text h4 {
			font-size: 20px;
			line-height: 28px;
		}

		.founder-section .founderbox {
			padding: 0px 0px 0px;
		}
		.founder-section .founderbox .b1 {
			display: none;
		}

		.founder-section .founder .f-title,
		.founder-section .founder .f-text {
			font-size: 18px;
			line-height: 28px;
		}

		.founderbox .founder {
			padding: 48px 20px;
		}

		.results .founder h2 {
			font-size: 24px;
			line-height: 30px;
		}

		.results .founder a {
			font-size: 14px;
			line-height: 26px;
			padding: 12px 30px;
		}

		.success-stories .cards .card {
			width: 100%;
			margin-bottom: 30px;
		}

		.button {
			width: 100%;
			margin: 20px 0px 0px;
		}

		.success-stories {
			padding: 48px 0 !important;	
		}

		.success-stories .card h2 {
			font-size: 20px;
			line-height: 36px;
			margin-bottom: 10px;
		}

		.success-stories h2 {
			font-size: 36px;
			line-height: 50px;
			margin: 0 0 30px;
		}

		.card p,
		.card a {
			font-size: 16px;
			line-height: 30px;
		}
		
		.readyForDifferent {
			padding: 48px 32px;
			display: none;
		}
		
		.readyForDifferent h2 {
			margin-bottom: 16px;
		}
	}


	/* Responsive Css Close */

</style>
<div class="single-case-study">
	<div class="container">
	    <div class="banner">
	        <ul class="breadcrumbs">
	            <li>
					<a href="/case-studies/">Case Studies</a>
					<span class='arrow_icon'>
						<svg width="4" height="8" viewBox="0 0 4 8" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M0.5 1L3.5 4L0.5 7" stroke="#6E7074" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</span>
					<span class='breadcrumb-title'><?php the_title(); ?></span>
				</li>
	        </ul>
	        <h1><?php the_title(); ?></h1>
	    </div>
			
		<div class="mainsection desktopSection">
			<div class="innersection">
				<div class="leftbox">
					<div class="leftBoxContent">
						<?php if ( have_rows( 'statistics' ) ) : ?>
							<?php while ( have_rows( 'statistics' ) ) :
								the_row(); ?>
								<?php if ( get_sub_field( 'title_first_stat' ) || get_sub_field( 'content_first_stat' ) ) : ?>
									<div class="box">								
										<div><?php echo esc_html( get_sub_field( 'title_first_stat' ) ); ?></div>
										<p><?php echo esc_html( get_sub_field( 'content_first_stat' ) ); ?></p>								
									</div>
								<?php endif; ?>
								<?php if ( get_sub_field( 'title_second_stat' ) || get_sub_field( 'content_second_stat' ) ) : ?>
									<div class="box">
										<div><?php echo esc_html( get_sub_field( 'title_second_stat' ) ); ?></div>
										<p><?php echo esc_html( get_sub_field( 'content_second_stat' ) ); ?></p>
									</div>
								<?php endif; ?>
								<?php if ( get_sub_field( 'title_third_stat' ) || get_sub_field( 'content_third_stat' ) ) : ?>
									<div class="box">
										<div><?php echo esc_html( get_sub_field( 'title_third_stat' ) ); ?></div>
										<p><?php echo esc_html( get_sub_field( 'content_third_stat' ) ); ?></p>
									</div>
								<?php endif; ?>
							<?php endwhile; ?>
						<?php endif; ?>

						
						<?php if ( have_rows( 'block_section' ) ) : ?>
							<?php while ( have_rows( 'block_section' ) ) :
								the_row(); ?>
								<?php if ( get_sub_field( 'block_title' ) || get_sub_field( 'block_text' )  ) : ?>
									<div class="founder">	
										<?php if ( $block_title = get_sub_field( 'block_title' ) ) : ?>
											<div class="f-title"><?php echo esc_html( $block_title ); ?></div>
										<?php endif; ?>
										<?php if ( $block_text = get_sub_field( 'block_text' ) ) : ?>
											<div class="f-text"><?php echo esc_html( $block_text ); ?></div>
										<?php endif; ?>	
									</div>
								<?php endif; ?>
							<?php endwhile; ?>	
						<?php endif; ?>


						<?php if ( have_rows( 'quote_section' ) ) : ?>
							<?php while ( have_rows( 'quote_section' ) ) :
								the_row(); ?>
								<?php if ( get_sub_field( 'quote' ) || get_sub_field( 'author' )  ) : ?>
									<div class="founder">	
										<?php if ( $quote = get_sub_field( 'quote' ) ) : ?>
											<div class="f-title">"<?php echo esc_html( $quote ); ?>"</div>
										<?php endif; ?>
										<?php if ( $author = get_sub_field( 'author' ) ) : ?>
											<div class="f-text">- <?php echo esc_html( $author ); ?></div>
										<?php endif; ?>	
									</div>
								<?php endif; ?>
							<?php endwhile; ?>	
						<?php endif; ?>
						
						<div class="founder alignCenter bookIntro">
							<div>Ready for Different?</div>
							<a href="/book-intro-call" id="sidebar-cta">Book an Intro Call</a>
						</div>
					</div>
				</div>

				<div class="rightbox">
					<?php if ( have_rows( 'summary' ) ) : ?>
						<?php while ( have_rows( 'summary' ) ) :
							the_row(); ?>
							<div class="text">
								<?php if ( $title = get_sub_field( 'title' ) ) : ?>
									<h2><?php echo esc_html( $title ); ?></h2>
								<?php endif; ?>
								<?php if ( $description = get_sub_field( 'description' ) ) : ?>
									<p><?php echo $description; ?></p>
								<?php endif; ?>
							</div>

						<?php endwhile; ?>
					<?php endif; ?>
					<?php if ( have_rows( 'the_problem' ) ) : ?>
						<?php while ( have_rows( 'the_problem' ) ) :
							the_row(); ?>	
							<div class="text">
								<?php if ( $title = get_sub_field( 'title' ) ) : ?>
									<h2><?php echo esc_html( $title ); ?></h2>
								<?php endif; ?>
								<?php if ( $description = get_sub_field( 'description' ) ) : ?>
									<p><?php echo $description; ?></p>
								<?php endif; ?>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>

					<div class="Solution">
						<?php if ( have_rows( 'the_solution' ) ) : ?>
							<?php while ( have_rows( 'the_solution' ) ) :
								the_row(); ?>
								<div class="text">
									<?php if ( $title = get_sub_field( 'title' ) ) : ?>
										<h2><?php echo esc_html( $title ); ?></h2>
									<?php endif; ?>
									<?php if ( $description = get_sub_field( 'description' ) ) : ?>
										<p><?php echo $description; ?></p>
									<?php endif; ?>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>


					<div class="Solution the-result">
						<?php if ( have_rows( 'the_results' ) ) : ?>
							<?php while ( have_rows( 'the_results' ) ) :
								the_row(); ?>
								<div class="text text-category">
									<?php if ( $title = get_sub_field( 'title' ) ) : ?>
										<h2><?php echo esc_html( $title ); ?></h2>
									<?php endif; ?>
									<?php if ( $description = get_sub_field( 'description' ) ) : ?>
										<p><?php echo $description; ?></p>
									<?php endif; ?>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>

				</div>
			</div>
		</div>
	</div>
		
	<div class="container">
	    <div class="mainsection">
	        <div class="innersection">
	            <div class="leftbox">
					<?php if ( have_rows( 'statistics' ) ) : ?>
						<?php while ( have_rows( 'statistics' ) ) :
							the_row(); ?>
							<?php if ( get_sub_field( 'title_first_stat' ) || get_sub_field( 'content_first_stat' ) ) : ?>
								<div class="box">								
									<div><?php echo esc_html( get_sub_field( 'title_first_stat' ) ); ?></div>
									<p><?php echo esc_html( get_sub_field( 'content_first_stat' ) ); ?></p>								
								</div>
							<?php endif; ?>
							<?php if ( get_sub_field( 'title_second_stat' ) || get_sub_field( 'content_second_stat' ) ) : ?>
								<div class="box">
									<div><?php echo esc_html( get_sub_field( 'title_second_stat' ) ); ?></div>
									<p><?php echo esc_html( get_sub_field( 'content_second_stat' ) ); ?></p>
								</div>
							<?php endif; ?>
							<?php if ( get_sub_field( 'title_third_stat' ) || get_sub_field( 'content_third_stat' ) ) : ?>
								<div class="box">
									<div><?php echo esc_html( get_sub_field( 'title_third_stat' ) ); ?></div>
									<p><?php echo esc_html( get_sub_field( 'content_third_stat' ) ); ?></p>
								</div>
							<?php endif; ?>
						<?php endwhile; ?>
					<?php endif; ?>
	            </div>
	            <div class="founder-section">
	    			<div class="container-">
		                <div class="founderbox">
		                	<?php if ( have_rows( 'block_section' ) ) : ?>
								<?php while ( have_rows( 'block_section' ) ) :
									the_row(); ?>
									<?php if ( get_sub_field( 'block_title' ) || get_sub_field( 'block_text' )  ) : ?>
										<div class="founder b1">	
											<?php if ( $block_title = get_sub_field( 'block_title' ) ) : ?>
												<div class="f-title"><?php echo esc_html( $block_title ); ?></div>
											<?php endif; ?>
											<?php if ( $block_text = get_sub_field( 'block_text' ) ) : ?>
												<div class="f-text"><?php echo esc_html( $block_text ); ?></div>
											<?php endif; ?>	
										</div>
									<?php endif; ?>
								<?php endwhile; ?>	
							<?php endif; ?>
			                <?php if ( have_rows( 'quote_section' ) ) : ?>
								<?php while ( have_rows( 'quote_section' ) ) :
									the_row(); ?>
									<?php if ( get_sub_field( 'quote' ) || get_sub_field( 'author' )  ) : ?>
										<div class="founder b2">
											<?php if ( $quote = get_sub_field( 'quote' ) ) : ?>
												<div class="f-title">"<?php echo esc_html( $quote ); ?>"</div>
											<?php endif; ?>
											<?php if ( $author = get_sub_field( 'author' ) ) : ?>
												<div class="f-text">- <?php echo esc_html( $author ); ?></div>
											<?php endif; ?>	
										</div>			                    
									<?php endif; ?>
								<?php endwhile; ?>	
							<?php endif; ?>
						</div>
						 <div class="founder-section Results">
					        <div class="container-">
					            <div class="founderbox">
					                <div class="founder readyForDifferent">
					                    <h2>Ready<br>for Different?</h2>
					                    <a href="/book-intro-call">Book an Intro Call</a>
					                </div>
					            </div>
					        </div>
					    </div>
					</div>
				</div>

				<div class="rightbox">
					<?php if ( have_rows( 'summary' ) ) : ?>
						<?php while ( have_rows( 'summary' ) ) :
							the_row(); ?>
							<div class="text">
								<?php if ( $title = get_sub_field( 'title' ) ) : ?>
									<h2><?php echo esc_html( $title ); ?></h2>
								<?php endif; ?>
								<?php if ( $description = get_sub_field( 'description' ) ) : ?>
									<p><?php echo $description; ?></p>
								<?php endif; ?>
							</div>
					
						<?php endwhile; ?>
					<?php endif; ?>
					<?php if ( have_rows( 'the_problem' ) ) : ?>
						<?php while ( have_rows( 'the_problem' ) ) :
							the_row(); ?>	
							<div class="text text-category">
								<?php if ( $title = get_sub_field( 'title' ) ) : ?>
									<h2><?php echo esc_html( $title ); ?></h2>
								<?php endif; ?>
								<?php if ( $description = get_sub_field( 'description' ) ) : ?>
									<p><?php echo $description; ?></p>
								<?php endif; ?>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
	        </div>
	    </div>


	    <div class="founder-section">
            <div class="founderbox">	
				
                <div class="rightbox Solution">
					<?php if ( have_rows( 'the_solution' ) ) : ?>
						<?php while ( have_rows( 'the_solution' ) ) :
							the_row(); ?>
							<div class="text text-category">
								<?php if ( $title = get_sub_field( 'title' ) ) : ?>
									<h2><?php echo esc_html( $title ); ?></h2>
								<?php endif; ?>
								<?php if ( $description = get_sub_field( 'description' ) ) : ?>
									<p><?php echo $description; ?></p>
								<?php endif; ?>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
                </div>
            </div>
	    </div>

	    <div class="founder-section Results">
	        <div class="container-">
	            <div class="founderbox">
	                <div class="rightbox Solution">
						<?php if ( have_rows( 'the_results' ) ) : ?>
							<?php while ( have_rows( 'the_results' ) ) :
								the_row(); ?>
								<div class="text text-category">
									<?php if ( $title = get_sub_field( 'title' ) ) : ?>
										<h2><?php echo esc_html( $title ); ?></h2>
									<?php endif; ?>
									<?php if ( $description = get_sub_field( 'description' ) ) : ?>
										<p><?php echo $description; ?></p>
									<?php endif; ?>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

    <div class="success-stories">
		<div class="container">
			<h2>More Success Stories</h2>
			<div class="owl-carousel">
				<?php
				// Query custom posts of type 'case-study'
				$args = array(
					'post_type' => 'case-study',
					'posts_per_page' => 3 // Change the number of posts to display
				);
				$query = new WP_Query($args);

				if ($query->have_posts()) {
					while ($query->have_posts()) {
						$query->the_post();
						?>
						<div class="item">
							<div class="card">
								<h2><?php the_title(); ?></h2>
								<p><?php the_excerpt(); ?></p>
								<a href="<?php the_permalink(); ?>">Read Now</a>
							</div>
						</div>
						<?php
					}
				}

				wp_reset_postdata();
				?>
			</div>
		</div>
	</div>

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
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            items: 3, // Number of items to display
            margin: 40,
            loop: true, // Enable infinite loop
            autoplay: false, // Enable autoplay
            nav: false, // Enable navigation arrows
            dots: true,
            // Add more options as needed
            responsive: {
                // breakpoint for Phone
                0: {
                    items: 1
                },
                // breakpoint for Ipad
                767: {
                    items: 2
                },
                // breakpoint for Ipad Pro
                1024: {
                    items: 2
                },
                // breakpoint for Ipad Pro
                1600: {
                    items: 3
                },
            }
        });
    });
</script>

<?php get_footer(); ?>