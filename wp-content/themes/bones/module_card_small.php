<div class="card w25 m-b">
	<div class="card-img relative">
		<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'the_title' ) ) ); ?>" class="anchor">
			<img src="<?php the_field('banner_image') ?>" alt="<?php the_title(); ?>">
			<h4 class="h4 card-title no-margin center p-t-md absolute pos-tl text-white fill bg-tr-purple">
				<?php the_title(); ?>
			</h4>
		</a>
	</div>
</div>