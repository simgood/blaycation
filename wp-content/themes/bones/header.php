<!DOCTYPE html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js" prefix="og: http://ogp.me/ns/company#"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // open graph ?>
		<meta property="og:site_name" content="Blaycation"/>
	    <meta property="og:type" content="travel website"/>
	    <meta property="og:title" content="Blaycation.com"/>
	    <meta property="og:image" content="
			<?php 
				$image = get_field('banner_image'); 
				$size = 'large';
				$imgsrc = wp_get_attachment_image_src( $image, $size );
				echo $imgsrc[0]
			?>
	    "/>
	    <meta property="og:image:secure_url" content="
			<?php 
				$image = get_field('banner_image'); 
				$size = 'large';
				$imgsrc = wp_get_attachment_image_src( $image, $size );
				echo $imgsrc[0]
			?>
	    "/>
	    <meta property="og:image:type" content="jpg"/>
	    <meta property="og:image:width" content="400"/>
	    <meta property="og:url" content="https://blaycation.com"/>
	    <meta name="og:description" content="A custom, curated, carefully personalized bucket-list-worthy vacation experience you will remember for the rest of your life" />

		<?php // mobile meta (hooray!) ?>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/library/images/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/library/images/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/library/images/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/library/images/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">
		<meta name="msapplication-TileColor" content="#3ebfed">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/ms-icon-144x144.png">
		<meta name="theme-color" content="#3ebfed">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->

		<?php wp_head(); ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body itemscope itemtype="http://schema.org/Company">

		<div id="container">

			<?php get_template_part('module_header_nav') ?>
