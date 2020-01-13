<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package v5gcuk
 */
get_header(); ?>
	<div class="slider-section" style="margin-top:45px;">
		<img class="parallax full-width wow fadeIn" src="<?php bloginfo('stylesheet_directory'); ?>/images/grass.jpg" alt="">
	</div>
	<div class="container">
		<main id="main" class="site-main col-md-8" role="main">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php
						/*
						* Include the Post-Format-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Format name) and that will be used instead.
						*/
						get_template_part( 'template-parts/content', get_post_format() );
					?>
				<?php endwhile; ?>
				<?php get_template_part( 'template-parts/pagination', 'index' ); ?>
			<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>
			<?php endif; ?>
		</main><!-- #main -->
		<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>
