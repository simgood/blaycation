<?php get_header(); /* Template Name: Destination Page */?>

		<div id="content">

			<main id="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?><?php endwhile; ?>
				<article role="article" itemscope itemtype="http://schema.org/BlogPosting">

					<?php get_template_part('banner_header'); ?>	

					<section>
						<h2 class="h2"><?php the_title(); ?></h2>
						<hr/>
						
						<div class="row">
							<div class="m-v-lg">
								<div class="text w70">
									<?php the_field('content_body'); ?>	
								</div>	
							</div>
						</div>									

						<?php endif; wp_reset_postdata();?>
							<?php // Calling Destinations ?>
							<?php $Destination = new WP_Query(array( 
								'post_type' => 'destination',
								'posts_per_page' => '-1',
								'orderby'=> 'title',
								'order' => 'ASC'
							)); ?>
							
							<div class="row center m-b-lg">
							<div class="w90">
							<?php while ($Destination->have_posts()) : $Destination->the_post(); ?>	
							
								<?php get_template_part('module_card') ?>

							<?php endwhile; ?>	
							</div>
							</div>
					
					</section>

				</article>

			</main>

		</div>

<?php get_footer(); ?>