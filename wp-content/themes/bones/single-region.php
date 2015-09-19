<?php get_header();?>

		<div id="content">

			<main id="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?><?php endwhile; ?>
				<article role="article" itemscope itemtype="http://schema.org/BlogPosting">

					<?php get_template_part('module_banner_header'); ?>	

					<?php get_template_part('module_page_content') ?>
				

							<?php
								$post_object = get_field('related_blog_link');

								if( $post_object && $post_object != "" ) : 
									// override $post
									$post = $post_object;

								$image = get_field('banner_image'); 
								$size = 'thumbnail';
								$imgsrc = wp_get_attachment_image_src( $image, $size );

									setup_postdata( $post ); 
							?>

						<section class="row center">
							<h3 class="h3">RELATED PROPERTIES</h3>
							<hr/>
						
							<?php get_template_part('module_card'); ?>
			
						</section>
							<?php wp_reset_postdata(); //Reset $post?>
							<?php endif; ?>

					<section>
						<h3 class="h3">POPULAR DESTINATIONS</h3>
							<hr/>										

						<?php endif; wp_reset_postdata();?>
							<?php
							$categories = get_the_category();
							$category_id = $categories[0]->cat_ID;

							$args = array(
								'post_type' => 'region',
								'posts_per_page' => '3',
								'orderby'=> 'rand',
								'order' => 'ASC',
								'tax_query' => array(
									array(
										'taxonomy' => 'category',
										'field'    => 'id',
										'terms'    => $category_id
									),
								),
							);
							$query = new WP_Query( $args ) 
							?>
							
							<div class="row center m-b-lg">
							<div class="w90 cf">
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