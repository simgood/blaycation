<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
        <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body itemscope itemtype="http://schema.org/Company">

		<div id="container">

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

					<div class="logo" itemscope="logo"><a href="<?php echo home_url(); ?>">LOGO</a></div>

				<div class="center heading">
					<nav class="nav cf d-ib p-t" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<div class="nav-item fl-l p-h dd">
							<a href="<?php echo home_url(); ?>/destinations">DESTINATIONS</a>
								
								<div class="dd-menu">
									<div class="dd-menu_item">
										<a href="<?php echo home_url(); ?>/destinations">
										Africa
										</a>
									</div>
									
									<div class="dd-menu_item">
										<a href="<?php echo home_url(); ?>/destination/asia">
										Asia
										</a>
									</div>
									
									<div class="dd-menu_item">
										<a href="<?php echo home_url(); ?>/destination/caribbean">
										Caribbean
										</a>
									</div>

									<div class="dd-menu_item">
										<a href="<?php echo home_url(); ?>/destination/central-america">
										Central America
										</a>
									</div>
									
									<div class="dd-menu_item">
										<a href="<?php echo home_url(); ?>/destination/europe">
										Europe
										</a>
									</div>
									
									<div class="dd-menu_item">
										<a href="<?php echo home_url(); ?>/destination/indian-ocean">
										Indian Ocean
										</a>
									</div>
									
									<div class="dd-menu_item">
										<a href="<?php echo home_url(); ?>/destination/north-america">
										North America
										</a>
									</div>
									
									<div class="dd-menu_item">
										<a href="<?php echo home_url(); ?>/destination/south-america">
										South America
										</a>
									</div>
								</div>
						</div>
						<div class="nav-item fl-l p-h">
							<a href="<?php echo home_url(); ?>/inspirations">INSPIRATIONS</a>
						</div>
						<div class="nav-item fl-l p-h">
							<a href="<?php echo home_url(); ?>/blaycation-insider">BLAYCATION INSIDER</a>
						</div>
						<div class="nav-item fl-l p-h">
							<a href="<?php echo home_url(); ?>/about-us">ABOUT US</a>
						</div>
						<div class="nav-item fl-l p-h">
							<a href="<?php echo home_url(); ?>/build-a-blaycation">BUILD A BLAYCATION</a>
						</div>
					</nav>
				</div>


			</header>
