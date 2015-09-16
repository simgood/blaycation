<?php get_header();?>

		<div id="content">

			<main id="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?><?php endwhile; ?>
				<article role="article" itemscope itemtype="http://schema.org/BlogPosting">

					<?php get_template_part('module_banner_header'); ?>	

					<?php get_template_part('module_page_content') ?>
				
					<section>										

						<?php endif; wp_reset_postdata();?>
							<?php // Calling inspirations ?>
							<?php
							$categories = get_the_category();
							$category_id = $categories[0]->cat_ID;

							$args = array(
								'post_type' => 'property',
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
							<?php if ($query->have_posts()) : $query->the_post(); ?>	
							<h3 class="h3">RELATED PROPERTIES</h3>
							<hr/>
								<?php get_template_part('module_card'); ?>
							<?php endif; ?>
							</div>	
							</div>
					
					</section>

					<section>
						<h3 class="h3">POPULAR DESTINATIONS</h3>
							<hr/>										

							<?php // Calling inspirations ?>
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
