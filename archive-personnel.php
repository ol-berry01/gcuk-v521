<?php
/**
 * The template for displaying personnel archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package v5gcuk
 */

get_header(); ?>

	<main id="main" class="site-main col-md-12" role="main">
        <div class="container">
            <?php if ( have_posts() ) : ?>

                <header class="page-header">
                    <h1 class="page-title">Golf Car UK Personnel</h1>
                </header>
                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'template-parts/content-personnel', get_post_format() ); ?>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
	</main><!-- #main -->
<?php get_footer(); ?>
