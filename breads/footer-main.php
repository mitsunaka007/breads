<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package breads
 */

?>

	<footer id="colophon" class="site-footer">
		<img src="http://breads.local/wp-content/uploads/2022/06/breads-footer2.jpg" alt="Breads">
		<div class="site-info">
			<p>Bread</p>
			<p>〒000-0000</p>
			<p>福井県福井市○○町</p>
			<p>TEL:0776-00-0000</p>
			<!-- <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'breads' ) ); ?>"> -->
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				// printf( esc_html__( 'Proudly powered by %s', 'breads' ), 'WordPress' );
				?>
			<!-- </a> -->
			<!-- <span class="sep"> | </span> -->
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				// printf( esc_html__( 'Theme: %1$s by %2$s.', 'breads' ), 'breads', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
