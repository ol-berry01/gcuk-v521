<?php

/**
 * Enqueues front-end CSS for color scheme.
 *
 * @see wp_add_inline_style()
 */
function v5gcuk_custom_css() {
	$heroColor = get_theme_mod( 'v5gcuk_hero_color', '#000063' );
	$text_color = get_theme_mod( 'v5gcuk_text_color', '#999999' );
	$link_color = get_theme_mod( 'v5gcuk_link_color', '#000063' );

	$colors = array(
		'heroColor'      => $heroColor,
		'text_color'     => $text_color,
		'link_color'     => $link_color,
	);

	$custom_css = v5gcuk_get_custom_css( $colors );

	wp_add_inline_style( 'v5gcuk-pro-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'v5gcuk_custom_css' );



/**
 * Returns CSS for the color schemes.
 *
 * @param array $colors colors.
 * @return string CSS.
 */
function v5gcuk_get_custom_css( $colors ) {

	//Default colors
	$colors = wp_parse_args( $colors, array(
		'heroColor'            => '',
		'text_color'            => '',
		'link_color'            => '',
	) );

	$css = <<<CSS


CSS;

	return $css;
}