<?php get_header(); /* Template Name: Home Template */?>

			<div id="content">

			<main id="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?><?php endwhile; ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
					
					<?php get_template_part('module_banner_header-slider'); ?>	

					<section>
						<?php
							the_content();
						?>
					</section>

					<section>
						<h2 class="h2">DESTINATIONS</h2>
							<hr/>										
						<?php endif; wp_reset_postdata();?>
							<?php // Calling inspirations ?>
							<?php $Destination = new WP_Query(array( 
								'post_type' => 'destination',
								'posts_per_page' => '-1',
								'orderby'=> 'title',
								'order' => 'ASC'
							)); ?>
							<div class="row center m-b">
							<div class="w90 cf">
							<?php while ($Destination->have_posts()) : $Destination->the_post(); ?>	
							
								<div class="card w25 m-v-sm">
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

							<?php endwhile; ?>	
							</div>
							</div>
					
					</section>
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?><?php endwhile; // Restart the loop ?>
					<section class="panel bg-gray-light p-v-md">
						
						<h2 class="h2">WHY BLAYCATION</h2>
						
							<div class="tabset relative cf panel-300 w80">
								
								<div class="tab w25 center">
									<input type="radio" class="tab-toggle" name="tab-toggle" id="tab1" checked/>						
									<label class="tab-label" for="tab1" class="center"><?php the_field("tab_one_title"); ?></label>
													
									<div class="tab-content w100 p-sm">
										<div class="w90 left text_sm">
											<?php the_field("tab_one_content"); ?>
										</div>
									</div>
								</div>

								<div class="tab w25 center">
									<input type="radio" class="tab-toggle" name="tab-toggle" id="tab2"/>
									<label class="tab-label" for="tab2" class="center"><?php the_field('tab_two_title'); ?></label>
									<div class="tab-content w100 p-sm">
										<div class="w90 left text_sm">
											<?php the_field('tab_two_content'); ?>
										</div>
									</div>
								</div>

								<div class="tab w25 center">
									<input type="radio" class="tab-toggle" name="tab-toggle" id="tab3"/>
									<label class="tab-label" for="tab3" class="center"><?php the_field('tab_three_title'); ?></label>
									<div class="tab-content w100 p-sm">
										<div class="w90 left text_sm">
											<?php the_field('tab_three_content'); ?>
										</div>
									</div>
								</div>

								<div class="tab w25 center">
									<input type="radio" class="tab-toggle" name="tab-toggle" id="tab4"/>
									<label class="tab-label" for="tab4" class="center"><?php the_field('tab_four_title'); ?></label>
									<div class="tab-content w100 p-sm">
										<div class="w90 left text_sm">
											<?php the_field('tab_four_content'); ?>
										</div>
									</div>
								</div>

							</div>

					</section>

					<section class="panel-300 bg-purple">
						<h2 class="h2">WHAT OUR CLIENTS SAY</h2>
							<div class="w60 slider">
								<ul class="cf">
									<li>
										<p class="em">
											<?php the_field('client_quote_one') ?>
										</p>
										<p>-<?php the_field('client_name_one') ?></p>
									</li>
									<li>
										<p class="em">
											<?php the_field('client_quote_two') ?>
										</p>
										<p>-<?php the_field('client_name_two') ?></p>
									</li>
										<li>
										<p class="em">
											<?php the_field('client_quote_three') ?>
										</p>
										<p>-<?php the_field('client_name_three') ?></p>
									</li>
										<li>
										<p class="em">
											<?php the_field('client_quote_four') ?>
										</p>
										<p>-<?php the_field('client_name_four') ?></p>
									</li>
										<li>
										<p class="em">
											<?php the_field('client_quote_five') ?>
										</p>
										<p>-<?php the_field('client_name_five') ?></p>
									</li>
								</ul>
							</div>
					</section>

			<?php endif;wp_reset_postdata();?>
					<section>
						<h2 class="h2">INSPIRATIONS</h2>
						<hr/>
							<?php // Calling inspirations ?>
							<?php $Inspiration = new WP_Query(array( 
								'post_type' => 'inspiration',
								'posts_per_page' => '12',
								'orderby'=> 'rand',
								'order' => 'ASC'
							)); ?>
							<div class="row center m-b">
							<div class="w90 cf">
							<?php while ($Inspiration->have_posts()) : $Inspiration->the_post(); ?>	
							
								<div class="card w25 m-v-sm">
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

							<?php endwhile; ?>	
							</div>
							</div>
					
					</section>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?><?php endwhile; // Restart the loop ?>
					<section class="panel bg-gray-light p-v-md cf">
						<?php if (get_field('partner_1') && get_field('partner_1') != "") { ?>
						<h2 class="h2">OUR PARTNERS</h2>
							<div class="w60 center cf">
								<div class="w25 d-ib p-v-sm">
									<img src="<?php the_field('partner_1') ?>" alt="">
								</div>
								<div class="w25 d-ib p-v-sm">
									<img src="<?php the_field('partner_2') ?>" alt="">
								</div>
								<div class="w25 d-ib p-v-sm">
									<img src="<?php the_field('partner_3') ?>" alt="">
								</div>
								<div class="w25 d-ib p-v-sm">
									<img src="<?php the_field('partner_4') ?>" alt="">
								</div>
							</div>
						<?php } ?>		
					</section>
				<?php endif; ?>	


				</article>

		</main>

		</div>

<?php get_footer(); ?>

