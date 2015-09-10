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
	    <meta property="og:type" content="website"/>
	    <meta property="og:title" content="blaycation.com"/>
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

		<?php wp_head(); ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body itemscope itemtype="http://schema.org/Company">

		<div id="container">

			<?php get_template_part('module_header_nav') ?>
