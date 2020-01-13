<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package v5gcuk
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php the_title( '<h1 class="post-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

    <div class="post-content">

    	<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'v5gcuk' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<div class="clearfix"></div>

		<?php if ( 'post' === get_post_type() ) : ?>
		<footer class="entry-footer">
			<div class="metadata">
	            <?php v5gcuk_metadata(); ?>
	            <div class="clearfix"></div>
	        </div><!-- /metadata -->
	    </footer><!-- .entry-footer -->
	    <?php endif; ?>
	    
	</div><!-- /post_content -->

</article><!-- #post-## -->

