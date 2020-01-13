<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package v5gcuk
 */

get_header(); ?>

	<div id="my-slider" class="carousel slide">
		<!-- Wrapper for slides -->

		<div class="carousel-inner slider-section" role="listbox">
	
			<div class="item <?php if ($slider==0) { echo 'active';} ?>">
				<img src="<?php bloginfo('template_directory'); ?>/images/grass.jpg " alt="404: Page Not Found">
				<div class="slider-intro">
					<h1 class="welcome-line intro-line" style="color:#fff;">Oops, you've landed in the rough</h1>
					<p class="lead" style="color:#fff;font-weight:400;">This page can't be found, please select a menu option<br>Or call us on 0345 8055 494 if you have a specific enquiry</p>
					<a href="<?php wp_get_referer() ?>" class="btn-ql">Return to Previous Page</a>
				</div><!-- slider-intro -->
			</div>

		</div>
	</div>

	<?php get_template_part( 'template-parts/section-blog', '404' ); ?>

<?php get_footer(); ?>
