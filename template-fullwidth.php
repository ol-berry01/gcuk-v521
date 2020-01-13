<?php
/*
Template Name: Full Width
*/
?>
<?php
/**
 * The template for displaying a full width page (no sidebar).
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package v5gcuk
 */

get_header(); ?>


	<main id="main" class="site-main col-md-12" role="main" style="padding-left:0;padding-right:0;">

		<?php 
			if (has_post_thumbnail()) { ?>
				<div class="slider-section">
					<img class="parallax full-width wow fadeIn" src="<?php the_post_thumbnail_url(); ?>" alt="">
				</div>
		<?php }
		while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/section-page', 'page' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->

<?php get_footer(); ?>
