<?php 
	$image = get_field('banner_image'); 
	$size = 'large';
	$imgsrc = wp_get_attachment_image_src( $image, $size );
	if ($image):
?>

<header class="center panel-400 d-b relative" style="background:url('<?php echo $imgsrc[0] ?>')no-repeat center center fixed;background-size:cover;">
	<div class="cover bg-tr-dark fill absolute">
		<div class="p-t-xl text-white w80 parallax">
			<h1 class="h1 no-margin"><?php the_field('banner_heading'); ?></h1>
			<div class="em h4"><?php the_field('banner_subheading'); ?></div>
		</div>
	</div>
</header>

<?php endif; ?>

