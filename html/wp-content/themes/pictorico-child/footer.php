<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Pictorico
 */
?>

	</div><!-- #content -->
	<?php if ( is_active_sidebar( 'sidebar-1' ) || is_active_sidebar( 'sidebar-2' ) || is_active_sidebar( 'sidebar-3' ) || is_active_sidebar( 'sidebar-4' ) ) : ?>
		<?php get_sidebar(); ?>
	<?php endif; ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://interactionmedia.org/', 'pictorico' ) ); ?>"><?php printf( __( 'Designed by %s', 'pictorico' ), 'Minji Estelle Kim' ); ?></a>


		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
