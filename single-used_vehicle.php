<?php
/**
 * The template for displaying all single used vehicle posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package v5gcuk
 */

get_header(); ?>
	
    <div id="main" class="site-main">
        <?php while ( have_posts() ) : the_post();
            
            get_template_part( 'template-parts/section-hero' );
            
            get_template_part( 'template-parts/custom-intro');

            get_template_part( 'template-parts/section-image' );

            get_template_part( 'template-parts/product-image1' );
            
            get_template_part( 'template-parts/product-features' );

            get_template_part( 'template-parts/product-image2' );
            
            get_template_part( 'template-parts/product-footer' );

        endwhile;?>
    </div>

<?php get_footer(); ?>
