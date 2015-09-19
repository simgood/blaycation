<div class="card w30 m-b">
	<div class="card-img relative img-wide">
		<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'the_title' ) ) ); ?>" class="anchor">
				<?php 
					$image = get_field('banner_image'); 
					$size = 'thumbnail';
					if ($image) {
						echo wp_get_attachment_image( $image, $size );
					}
				?>	
			<h4 class="h4 card-title no-margin center p-t-md absolute pos-tl text-white fill bg-tr-purple">
				<?php the_title(); ?>
			</h4>
		</a>
	</div>
</div>