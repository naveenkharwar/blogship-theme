<?php
/**
 * Template Name: Dynamic Home
 * Template part for displaying front-page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blogship
 */
get_header();
?>  
    <div class="row">
    <div class="col-sm-12">
    	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php
		if( have_posts() ):
		while (have_posts() ): the_post(); ?>
		<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blogship' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
<?php endwhile;
				endif;
		?>
		</main><!-- #main -->
	</div><!-- #primary -->
    </div>
	
</div>
<?php get_footer();