<?php get_header();?>

		<div id="content">

			<main id="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?><?php endwhile; ?>
				<article role="article" itemscope itemtype="http://schema.org/BlogPosting">

					<?php get_template_part('module_banner_header'); ?>	

					<?php get_template_part('module_page_content') ?>

					<section class="row center">
						<h4 class="em w70 h4">Related Content</h4>
						<hr/>
							<?php

								$post_object = get_field('related_blog_link');

								if( $post_object ): 
									// override $post
									$post = $post_object;
									setup_postdata( $post ); 
									?>
							

								<a href="<?php the_permalink(); ?>">
									<?php the_field('banner_heading'); ?>
								</a>

							<?php wp_reset_postdata(); //Reset $post?>
							<?php endif; ?>

					</section>

					<section>
						<h2 class="h2">POPULAR DESTINATIONS</h2>
							<hr/>										

						<?php endif; wp_reset_postdata();?>
							<?php // Calling inspirations ?>
							<?php

							$args = array(
								'post_type' => 'region',
								'posts_per_page' => '3',
								'orderby'=> 'rand',
								'order' => 'ASC',
							);
							$query = new WP_Query( $args ) 
							?>
							
							<div class="row center m-b-lg">
							<div class="w90">
							<?php while ($query->have_posts()) : $query->the_post(); ?>	
							
								<?php get_template_part('module_card'); ?>

							<?php endwhile; ?>
							</div>	
							</div>
					
					</section>

				</article>

			</main>

		</div>

<?php get_footer(); ?>
