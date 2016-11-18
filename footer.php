<?php
/**
 * Footer Template
 *
 */
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="site-info">
		<div class="container">
			<div class="row">

				<div class="xs-col-12">
					<div id="footer_menu_container">
						<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'footer-menu', 'depth' => 1 ) ); ?>
					</div>
				</div>

				<div class="xs-col-12">
					<div id="copyright_text">
						<?php _e('Copyright', 'altitude-child'); ?> &copy; <?php echo date('Y'); ?>
						<span class="sep"> &middot; </span>
						<?php _e('All Rights Reserved', 'altitude-child'); ?>
					</div>
				</div>

			</div>
		</div>
	</div><!-- .site-info -->
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
