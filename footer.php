<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php dynamic_sidebar('footer-sidebar'); ?>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'begonia' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'begonia' ), __('Begonia', 'begonia' ) ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s %3$s %4$s.', 'begonia' ), __('Begonia', 'begonia'), __('<a href="', 'begonia'), esc_url('https://pixelgrade.com/', 'begonia'), __('" rel="designer">Pixelgrade</a>', 'begonia') ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
