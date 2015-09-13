<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

					<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
					<section class="panel-400 p-t-lg">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?><?php endwhile; ?>

							<?php endif; wp_reset_postdata();?>
							<?php // Calling inspirations ?>
							<?php $Destination = new WP_Query(array( 
								'post_type' => 'destination',
								'posts_per_page' => '1',
								'orderby'=> 'rand',
								'order' => 'ASC'
							)); ?>
							<div class="row center m-b">
							<div class="w90 cf">
							<?php while ($Destination->have_posts()) : $Destination->the_post(); ?>	
							<h2 class="h2">404 - Page not found</h2>
							<h4 class="h4">Not all who wander are lost...</h4>
							<h4>But if you are, I've picked this destination just for you...</h4>
								<div class="card w30 m-v-sm">
									<div class="card-img relative img-wide">
										<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'the_title' ) ) ); ?>" class="anchor">
											<?php 
												$image = get_field('banner_image'); 
												$size = 'thumbnail';
												if ($image) {
													echo wp_get_attachment_image( $image, $size );
												}
											?>	
											<h3 class="h3 card-title no-margin center p-t-md absolute pos-tl text-white fill bg-tr-purple">
												<?php the_title(); ?>
											</h3>
										</a>
									</div>	
								</div>

							<?php endwhile; ?>	
							</div>
							</div>
					</section>
					</main>

				</div>

			</div>

<?php get_footer(); ?>
