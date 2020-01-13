<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package v5gcuk
 */

get_header(); ?>

	<div id="main" class="main" style="margin-bottom:55px;">
		<?php if (has_post_thumbnail()) { ?>
			<div class="slider-section">
				<img class="parallax full-width-blog wow fadeIn" src="<?php the_post_thumbnail_url(); ?>" alt="">
			</div>
		<?php } ?>

		<div class="container">
		
			<main id="main" class="site-main col-md-8" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'single' ); ?>

					<?php the_post_navigation(); ?>

				<?php endwhile; // End of the loop. ?>
					<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="read-more">All Articles <i class="fa fa-angle-right"></i></a>
				</main><!-- #main -->
			<?php get_sidebar(); ?>
		</div>
	</div>

<?php get_footer(); ?>
