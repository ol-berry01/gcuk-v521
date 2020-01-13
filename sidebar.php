<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package v5gcuk
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<aside id="sidebar" class="col-md-4 widget-area" role="complementary">
	<div id="main" class="main">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
</aside>
