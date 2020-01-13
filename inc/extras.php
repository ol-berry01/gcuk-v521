<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package v5gcuk
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function v5gcuk_body_classes( $classes ) {

    $v5gcuk_theme_data = wp_get_theme();

    $classes[] = sanitize_title( $v5gcuk_theme_data['Name'] );
    $classes[] = 'v' . $v5gcuk_theme_data['Version'];

	return $classes;
}
add_filter( 'body_class', 'v5gcuk_body_classes' );




/**
 * Extract YouTube ID from several URL structures
 * https://gist.github.com/simplethemes/7591414
 */
if ( ! function_exists( 'v5gcuk_extract_youtube_id' ) ){
	function v5gcuk_extract_youtube_id( $video_url ) {
		if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', (string)$video_url, $match)) {
            $video_id = $match[1];
            return $video_id;
        }else{
        	return 'error';
        }
    }
}// end function_exists

/**
 * Extract Vimeo ID from several URL structures
 * http://stackoverflow.com/questions/10488943/easy-way-to-get-vimeo-id-from-a-vimeo-url
 */
if ( ! function_exists( 'v5gcuk_extract_vimeo_id' ) ){
	function v5gcuk_extract_vimeo_id( $video_url ) {
		if (preg_match('#(?:https?://)?(?:www.)?(?:player.)?vimeo.com/(?:[a-z]*/)*([0-9]{6,11})[?]?.*#', (string)$video_url, $match)) {
            $video_id = $match[1];
            return $video_id;
        }else{
        	return 'error';
        }
    }
}// end function_exists

/**
 * Get all portfolio categories
 */
if ( ! function_exists( 'v5gcuk_get_portfolio_categories' ) ){
    function v5gcuk_get_portfolio_categories() {

        if ( taxonomy_exists( 'jetpack-portfolio-type' ) ){
            
            $categories = get_terms( 'jetpack-portfolio-type' );
            $cat_ar = array();
            if ( $categories ) {
                foreach ( $categories as $key ) {
                    $cat_ar[$key->slug] = $key->name;
                }
            }
            return $cat_ar;
        }else{ 
            return false;
        }
        
    }
}// end function_exists


if ( ! function_exists( 'v5gcuk_new_content_more' ) ){
    function v5gcuk_new_content_more($more) {
           global $post;
           return ' <br><a href="' . esc_url( get_permalink() ) . '" class="more-link read-more">' . esc_html__( 'Read more', 'v5gcuk' ) . ' <i class="fa fa-angle-right"></i></a>';
    }   
}// end function_exists
    add_filter( 'the_content_more_link', 'v5gcuk_new_content_more' );

