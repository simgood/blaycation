<?php get_header();?>

		<div id="content">

			<main id="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?><?php endwhile; ?>
				<article role="article" itemscope itemtype="http://schema.org/BlogPosting">

					<?php get_template_part('banner_header'); ?>	

					<section class="row">
						
						<h2 class="h2"><?php the_title(); ?></h2>
							<hr/>
						<div class="text w70">
							<?php
								the_content();
							?>
						</div>
					</section>

					<section>
						<h2 class="h2">TRAVEL ARCHIVE</h2>
							<hr/>										

						<?php endif; wp_reset_postdata();?>
							<?php // Calling inspirations ?>
							<?php $Blog = new WP_Query(array( 
								'post_type' => 'blog',
								'posts_per_page' => '3'
							)); ?>
							
							<div class="row center m-b-lg">
							<div class="w90">
							<?php while ($Blog->have_posts()) : $Blog->the_post(); ?>	
							
								<div class="card w30">
										<div class="card-img">
											<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'the_title' ) ) ); ?>" class="anchor">
												<img src="<?php the_field('banner_image') ?>" alt="<?php the_title(); ?>">
											</a>
										</div>	
										<div class="card-text p-h">
											<h4 class="h4 no-margin center p-t p-b-sm">
												<?php the_title(); ?>
											</h4>
											<div class="text relative">
												<p>
													Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni beatae, nemo suscipit amet laudantium libero, ullam animi maxime ut hic, sed expedita debitis corrupti! Odio enim nisi placeat accusamus ipsa dolores officia velit vel porro facere doloremque minima officiis deserunt nobis error nostrum excepturi quisquam dignissimos accusantium, ullam laudantium eligendi.
												</p>
												<div class="fade-out"></div>
											</div>
										
										<div class="center p-v">
											<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'the_title' ) ) ); ?>" class="btn-purple">
												Read More...
											</a>
										</div>	

										</div>
									</div>

							<?php endwhile; ?>	
							</div>
							</div>
					
					</section>

				</article>

			</main>

		</div>

<?php get_footer(); ?>