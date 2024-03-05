<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">

	<title><?php bloginfo('name'); ?></title>

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap-grid.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Nunito:wght@400;500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<script src="<?php bloginfo('template_url'); ?>/js/modernizr.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>


	<?php wp_head(); ?>

</head>
	<body class="<?php echo the_slug(); ?>">
		<!--[if lt IE 8]><p>You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p><![endif]-->

		<header>
			<div class="container">
				<div class="row">
					<div class="col-4">
						<a class="logo" href="<?php echo get_site_url()?>"><img alt="Logo" src="<?php bloginfo('template_url'); ?>/img/div.site-logo.svg" /></a>
					</div>
					<div class="col-8">
						<a href="#" class="visible-mobile toggle-menu">
							<div class="nav-icon">
							  <span></span>
							  <span></span>
							  <span></span>
							</div>
						</a>

						<div class="menu hidden-mobile">
							<?php wp_nav_menu( array( 'theme_location' => 'header-menu') ); ?>
						</div>
					</div>
				</div>

				<div class="mobile-menu">
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu') ); ?>
				</div>
			</div>
		</header>

		<script type="text/javascript">
			$(function() {
				$('.toggle-menu').click(function(e) {
					e.preventDefault();
					$('.mobile-menu').slideToggle();

					$('.nav-icon').toggleClass('open');

				})
			});
		</script>

		<div class="container">
			<div class="content">