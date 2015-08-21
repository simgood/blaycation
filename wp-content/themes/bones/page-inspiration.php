<?php get_header(); /* Template Name: Inspiration Page */?>

		<div id="content">

			<main id="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?><?php endwhile; ?>
				<article role="article" itemscope itemtype="http://schema.org/BlogPosting">

					<?php get_template_part('banner_header'); ?>	

					<section>
						<h2 class="h2"><?php the_title(); ?></h2>
							<hr/>										

						<?php endif; wp_reset_postdata();?>
							<?php // Calling Destinations ?>
							<?php $Inspiration = new WP_Query(array( 
								'post_type' => 'inspiration',
								'posts_per_page' => '-1',
								'orderby'=> 'title',
								'order' => 'ASC'
							)); ?>
							
							<div class="row center m-b-lg">
							<div class="w90">
							<?php while ($Inspiration->have_posts()) : $Inspiration->the_post(); ?>	
							
							<?php get_template_part('module_card') ?>

							<?php endwhile; ?>	
							</div>
							</div>
					
					</section>

				</article>

			</main>

		</div>

<?php get_footer(); ?>