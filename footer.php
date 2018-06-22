<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blogship
 */

?>
    </div>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
<p class="footer-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'blogship' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'blogship' ), 'WordPress' );
				?>

			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: BlogShip by %2$s.', 'blogship' ), 'blogship', '<a href="http://thenuovo.com/">Naveen Kharwar</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</div>
</body>
</html>
