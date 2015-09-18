			<div class="center panel-300 relative" style="background:url('<?php echo get_template_directory_uri(); ?>/library/images/peru.jpg')no-repeat center center;background-size:cover;">
				<div class="bg-tr-light absolute panel p-t-md">
					<div class="text-dark em h3">
						Let us create your ideal travel experience.
						</div>
					<a href="<?php echo home_url(); ?>/build-a-blaycation" class="btn-blue m">BUILD WITH BLAYCATION</a>
				</div>
			</div>

			<footer class="footer cf p-v p-h" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
				
				<div class="fl-l text-purple em">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> Ltd</div>
				<div class="fl-r text-purple heading">
					<div class="fl-l">
					<a href="<?php echo home_url(); ?>/poker">Blaycation Poker</a>
					&nbsp;|&nbsp;
					<a href="<?php echo home_url(); ?>/blaycation-corporate-getaways">Corporate Getaways</a>
					&nbsp;|&nbsp;
					<a href="<?php echo home_url(); ?>/terms-conditions">Terms &amp; Conditions</a>
					</div>
				</div>

			</footer>

			<?php get_template_part('module_callback_request_modal') ?>
			<?php get_template_part('module_newsletter_signup_modal') ?>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html>
