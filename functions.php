<?php
/**
 * v5gcuk functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package v5gcuk
 */

if ( ! function_exists( 'v5gcuk_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function v5gcuk_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on v5gcuk, use a find and replace
	 * to change 'v5gcuk' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'v5gcuk', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
		//Archive
		add_image_size( 'v5gcuk_all_vehicles', 340, 150, true );
		
		//Sections
		add_image_size( 'v5gcuk_vehicle_select', 203, 173 );

		//Blog
		add_image_size( 'v5gcuk_post', 953, 536, true );
		add_image_size( 'v5gcuk_blog-section', 457, 259, true );
		add_image_size( 'v5gcuk_post_square', 457, 457, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Main Nav', 'v5gcuk' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );


	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'v5gcuk_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Styles for TinyMCE
	$font_url = str_replace( ',', '%2C', '//fonts.googleapis.com/css?family=Lato:300,400,700' );
    add_editor_style( array( 'css/editor-style.css', 'css/bootstrap.css', $font_url )  );
	
}
endif; // v5gcuk_setup
add_action( 'after_setup_theme', 'v5gcuk_setup' );



/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function v5gcuk_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'v5gcuk_content_width', 953 );
}
add_action( 'after_setup_theme', 'v5gcuk_content_width', 0 );



/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function v5gcuk_widgets_init() {

	require get_template_directory() . '/inc/widget-areas/widget-areas.php';

}
add_action( 'widgets_init', 'v5gcuk_widgets_init' );



/**
 * Enqueue scripts and styles.
 */
function v5gcuk_scripts() {

	/**
	 * Enqueue Stylesheets
	 */
	require get_template_directory() . '/inc/scripts/stylesheets.php';

	/**
	 * Enqueue Scripts
	 */
	require get_template_directory() . '/inc/scripts/scripts.php';

}
add_action( 'wp_enqueue_scripts', 'v5gcuk_scripts' );
add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
	function enqueue_load_fa() {
		wp_enqueue_style( 'load-fa', '//use.fontawesome.com/releases/v5.5.0/js/all.js' );
	}



/**
 * Custom CSS generated by the Theme.
 */
require get_template_directory() . '/inc/scripts/styles.php';



/**
 * Admin Styles
 *
 * Enqueue styles to the Admin Panel.
 */
function v5gcuk_wp_admin_style() {
        wp_register_style( 'v5gcuk_custom_wp_admin_css', get_template_directory_uri() . '/css/admin-styles.css', false, '1.0.0' );
        wp_enqueue_style( 'v5gcuk_custom_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'v5gcuk_wp_admin_style' );



/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';



/**
 * Custom functions
 */
require get_template_directory() . '/inc/extras.php';



/**
 * Customizer
 */
require get_template_directory() . '/inc/customizer.php';



/**
 * Add Theme Functions
 */

	// Bootstrap Walker
	require get_template_directory() . '/inc/theme-functions/wp_bootstrap_navwalker.php';

	// Custom Header
	require get_template_directory() . '/inc/theme-functions/custom-header.php';

	// TGM Plugin Activation
	require get_template_directory() . '/inc/theme-functions/ql_tgm_plugin_activation.php';

/**
 * Clean Up WordPress Header
 */

 	// Disable XML-RPC RSD link
	remove_action ('wp_head', 'rsd_link');

	// Remove WordPress version number
	function golfcaruk_remove_version() {
		return '';
	}
	add_filter('the_generator', 'golfcaruk_remove_version');

	// Remove wlwmanifest link
	remove_action( 'wp_head', 'wlwmanifest_link');

	// Remove Shortlink
	remove_action( 'wp_head', 'wp_shortlink_wp_head');

	// Remove api.w.org relation link
	remove_action('wp_head', 'rest_output_link_wp_head', 10);
	remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
	remove_action('template_redirect', 'rest_output_link_header', 11, 0);

/**
 * Custom Post Type
 *
 * Add Testimonial Post Types
 */
	add_action('init', 'vehicles_post_types');
	function vehicles_post_types() {
		// Vehicles Post Type
		register_post_type('vehicle', array(
			'supports' 			=> array('title', 'editor', 'excerpt', 'thumbnail'),
			'rewrite' 			=> array('slug' => 'vehicles' ),
			'has_archive' 		=> true,
			'public' 			=> true,
			'labels' 			=> array(
				'name' 			=> 'Vehicles',
				'add_new_item' 	=> 'Add New Vehicle',
				'edit_item' 	=> 'Edit Vehicle',
				'all_items' 	=> 'All Vehicles',
				'singular_name' => 'Vehicle'
			),
			'menu_icon' 		=> 'dashicons-performance',
			'menu_position' 	=> 40,
		));
	}
	add_action('init', 'custom_vehicles_post_types');
	function custom_vehicles_post_types() {
		// Custom Vehicles Post Type
		register_post_type('custom_vehicle', array(
			'supports' 			=> array('title', 'editor', 'excerpt', 'thumbnail'),
			'rewrite' 			=> array('slug' => 'custom-vehicles' ),
			'has_archive' 		=> true,
			'public' 			=> true,
			'labels' 			=> array(
					'name' 			=> 'Custom Vehicles',
					'add_new_item' 	=> 'Add Custom Vehicle',
					'edit_item' 	=> 'Edit Custom Vehicle',
					'all_items' 	=> 'All Custom Vehicles',
					'singular_name' => 'Custom Vehicle'
				),
			'menu_icon' 		=> 'dashicons-hammer',
			'menu_position' 	=> 41,
		));
	}
	add_action('init', 'used_vehicles_post_types');
	function used_vehicles_post_types() {
		// Used Vehicles Post Type
		register_post_type('used_vehicle', array(
			'supports' 			=> array( 'title', 'editor', 'excerpt', 'thumbnail' ),
			'description'       => ( 'Description.' ),
			'rewrite' 			=> array('slug' => 'used-vehicles' ),
			'has_archive' 		=> true,
			'public' 			=> true,
			'labels' 			=> array(
					'name' 			=> 'Used Vehicles',
					'add_new_item' 	=> 'Add Used Vehicle',
					'edit_item' 	=> 'Edit Used Vehicle',
					'all_items' 	=> 'All Used Vehicles',
					'singular_name' => 'Used Vehicle'
				),
			'menu_icon' 		=> 'dashicons-clipboard',
			'menu_position' 	=> 42,
		));
	}
	add_action('init', 'clearance_post_types');
	function clearance_post_types() {
		// Used Vehicles Post Type
		register_post_type('clearance', array(
			'supports' 			=> array('title', 'editor', 'excerpt', 'thumbnail'),
			'rewrite' 			=> array('slug' => 'clearance' ),
			'has_archive' 		=> true,
			'public' 			=> true,
			'labels' 			=> array(
					'name' 			=> 'Clearance',
					'add_new_item' 	=> 'Add Clearance Vehicle',
					'edit_item' 	=> 'Edit Clearance Vehicle',
					'all_items' 	=> 'All Clearance Vehicles',
					'singular_name' => 'Clearance Vehicle'
				),
			'menu_icon' 		=> 'dashicons-excerpt-view',
			'menu_position' 	=> 42,
		));
	}
	add_action('init', 'accessories_post_types');
	function accessories_post_types() {
		// Accessory Post Type
		register_post_type('accessories', array(
			'supports' 			=> array('title', 'editor', 'excerpt', 'thumbnail'),
			'rewrite' 			=> array('slug' => 'accessories' ),
			'has_archive' 		=> true,
			'public' 			=> true,
			'labels' 			=> array(
					'name' 			=> 'Accessories',
					'add_new_item' 	=> 'Add Accessory',
					'edit_item' 	=> 'Edit Accessory',
					'all_items' 	=> 'All Accessories',
					'singular_name' => 'Accessory'
				),
			'menu_icon' 		=> 'dashicons-portfolio',
			'menu_position' 	=> 43,
		));
	}
	add_action('init', 'personnel_post_types');
	function personnel_post_types() {
		// Personnel Post Type
		register_post_type('personnel', array(
			'supports' 			=> array('title', 'editor', 'excerpt', 'thumbnail'),
			'rewrite' 			=> array('slug' => 'personnel' ),
			'has_archive' 		=> true,
			'public' 			=> true,
			'labels' 			=> array(
					'name' 			=> 'Personnel',
					'add_new_item' 	=> 'Add Staff Member',
					'edit_item' 	=> 'Edit Staff Member',
					'all_items' 	=> 'All Personnel',
					'singular_name' => 'Member Of Staff'
				),
			'menu_icon' 		=> 'dashicons-id-alt',
			'menu_position' 	=> 44,
		));
	}
	add_action( 'init', 'testimonials_post_type' );
	function testimonials_post_type() {
		$labels = array(
			'name' 					=> 'Testimonials',
			'singular_name' 		=> 'Testimonial',
			'add_new' 				=> 'Add New',
			'add_new_item' 			=> 'Add New Testimonial',
			'edit_item' 			=> 'Edit Testimonial',
			'new_item' 				=> 'New Testimonial',
			'view_item' 			=> 'View Testimonial',
			'search_items' 			=> 'Search Testimonials',
			'not_found' 			=> 'No Testimonials found',
			'not_found_in_trash' 	=> 'No Testimonials in the trash',
			'parent_item_colon' 	=> '',
		);
	
		register_post_type( 'testimonials', array(
			'labels' 				=> $labels,
			'public' 				=> true,
			'publicly_queryable' 	=> true,
			'show_ui' 				=> true,
			'exclude_from_search' 	=> true,
			'query_var' 			=> true,
			'rewrite' 				=> true,
			'capability_type' 		=> 'post',
			'has_archive' 			=> false,
			'hierarchical' 			=> false,
			'menu_icon'				=> 'dashicons-testimonial',
			'menu_position' 		=> 44,
			'supports' 				=> array( 'title', 'editor' ),
			// 'register_meta_box_cb' => 'testimonials_meta_boxes', Callback function for custom metaboxes
		) );
	}
	add_action( 'wp_ajax_nopriv_kilo_posts_filter', 'kilo_posts_filter' );
	add_action( 'wp_ajax_kilo_posts_filter', 'kilo_posts_filter' );

	function kilo_posts_filter() {
		global $post;
		ob_start();
		$popular_posts = get_posts( array(
			'post_type' => array( 'post' ),
			'posts_per_page' => 4,
			'category' => json_encode( $_POST['id'] ),
			'orderby' => 'date'
		) );

		// Start the loop
		foreach( $popular_posts as $post ) : setup_postdata( $post ); ?>
			<article class="grid-item">
				<span><?php echo get_the_title(); ?></span>
			</article>
		<?php endforeach; wp_reset_postdata();
		$output = ob_get_contents();
		ob_end_clean();
		echo json_encode( $output );
		die();

	}