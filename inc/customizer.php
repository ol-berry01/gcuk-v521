<?php
/**
 * v5gcuk Theme Customizer.
 *
 * @package v5gcuk
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function v5gcuk_customize_register( $wp_customize ) {

	/**
	 * Control for the PRO buttons
	 */
	class v5gcuk_Pro_Version extends WP_Customize_Control{
		public function render_content()
		{
			$args = array(
				'a' => array(
					'href' => array(),
					'title' => array()
					),
				'br' => array(),
				'em' => array(),
				'strong' => array(),
				);
			echo wp_kses( $this->label, $args );
		}
	}

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';


	/*
	Logo
	------------------------------ */
	$wp_customize->add_section( 'v5gcuk_logo_section', array(
		'title' => esc_attr__( 'Logo', 'v5gcuk' ),
		'priority' => 80,
	) );
	$wp_customize->add_setting( 'v5gcuk_probtn_logo', array( 'default' => '', 'sanitize_callback' => 'v5gcuk_sanitize_text', ) );
	$wp_customize->add_control( new v5gcuk_Display_Text_Control( $wp_customize, 'v5gcuk_probtn_logo', array(
		'section' => 'v5gcuk_logo_section', // Required, core or custom.
		'label' => sprintf( __( 'Check out the <a href="%s" target="_blank">PRO version</a> to use an image logo.', 'v5gcuk' ), 'https://www.quemalabs.com/theme/v5gcuk-pro/' ),
	) ) );


	/*
    Colors
    ===================================================== */
    	$wp_customize->add_setting( 'v5gcuk_probtn_colors', array( 'default' => '', 'sanitize_callback' => 'v5gcuk_sanitize_text', ) );
		$wp_customize->add_control( new v5gcuk_Display_Text_Control( $wp_customize, 'v5gcuk_probtn_colors', array(
			'section' => 'colors', // Required, core or custom.
			'label' => sprintf( __( 'Check out the <a href="%s" target="_blank">PRO version</a> to change Text, Links and Featured colors.', 'v5gcuk' ), 'https://www.quemalabs.com/theme/v5gcuk-pro/' ),
		) ) );





	/*
    Sections
    ===================================================== */
    $wp_customize->add_panel( 'v5gcuk_front_page_sections', array(
		'title' => esc_attr__( 'Front Page Sections', 'v5gcuk' ),
		'description' => '', // Include html tags such as <p>.
		'priority' => 160,
		'active_callback' => 'is_front_page',
	) );

    	/*
    	Welcome
    	------------------------------ */
    	$wp_customize->add_section( 'v5gcuk_welcome_section', array(
			'title' => esc_attr__( 'Welcome', 'v5gcuk' ),
			'description' => esc_attr__( 'Display a big image and welcome message.', 'v5gcuk' ),
			'panel' => 'v5gcuk_front_page_sections',
			'priority' => 80,
		) );

		$wp_customize->add_setting( 'v5gcuk_welcome_title', array( 'default' => esc_attr__( 'Be the one to stand out in the crowd', 'v5gcuk' ), 'transport' => 'postMessage', 'sanitize_callback' => 'v5gcuk_sanitize_text', ) );
		$wp_customize->add_control( 'v5gcuk_welcome_title', array(
			'type' => 'text',
			'section' => 'v5gcuk_welcome_section', // Required, core or custom.
			'label' => esc_attr__( 'Welcome Message', 'v5gcuk' ),
		) );

		$wp_customize->add_setting( 'v5gcuk_welcome_link_title', array( 'default' => esc_html__( 'Learn More', 'v5gcuk' ), 'transport' => 'postMessage', 'sanitize_callback' => 'v5gcuk_sanitize_text', ) );
		$wp_customize->add_control( 'v5gcuk_welcome_link_title', array(
			'type' => 'text',
			'section' => 'v5gcuk_welcome_section', // Required, core or custom.
			'label' => esc_attr__( "Link Title", 'v5gcuk' ),
		) );

		$wp_customize->add_setting( 'v5gcuk_welcome_link_url', array( 'default' => '', 'transport' => 'postMessage', 'sanitize_callback' => 'v5gcuk_sanitize_url', ) );
		$wp_customize->add_control( 'v5gcuk_welcome_link_url', array(
			'type' => 'url',
			'section' => 'v5gcuk_welcome_section', // Required, core or custom.
			'label' => esc_attr__( "Link URL", 'v5gcuk' ),
		) );

		$wp_customize->add_setting( 'v5gcuk_welcome_image', array( 'default' => '', 'transport' => 'postMessage', 'sanitize_callback' => 'attachment_url_to_postid', ) );
		    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'v5gcuk_welcome_image', array(
		        'label'    => esc_attr__( 'Welcome Image', 'v5gcuk' ),
		        'section'  => 'v5gcuk_welcome_section',
		        'settings' => 'v5gcuk_welcome_image',
		    ) ) );

		$wp_customize->add_setting( 'v5gcuk_welcome_enable', array( 'default' => true, 'transport' => 'postMessage', 'sanitize_callback' => 'v5gcuk_sanitize_bool', ) );
	    $wp_customize->add_control( 'v5gcuk_welcome_enable', array(
			'section' => 'v5gcuk_welcome_section', // Required, core or custom.
			'label' => esc_attr__( "Use this section?", 'v5gcuk' ),
			'type'    => 'checkbox',
		) );

    	/*
    	Services
    	------------------------------ */
    	$wp_customize->add_section( 'v5gcuk_services_section', array(
			'title' => esc_attr__( 'Services', 'v5gcuk' ),
			'description' => esc_attr__( 'Display services with icons.', 'v5gcuk' ),
			'panel' => 'v5gcuk_front_page_sections',
			'priority' => 100,
		) );

		$wp_customize->add_setting( 'v5gcuk_services_text', array( 'default' => '', 'sanitize_callback' => 'v5gcuk_sanitize_text', ) );
		$wp_customize->add_control( new v5gcuk_Display_Text_Control( $wp_customize, 'v5gcuk_services_text', array(
			'section' => 'v5gcuk_services_section', // Required, core or custom.
			'label' => __( 'To add services go to: <br><a href="#" data-section="sidebar-widgets-services-section">Customize -> Widgets -> Front Page - Service Section</a>. <br>Then add the "<strong>v5gcuk - Service widget</strong>"', 'v5gcuk' ),
		) ) );

		$wp_customize->add_setting( 'v5gcuk_services_enable', array( 'default' => true, 'transport' => 'postMessage', 'sanitize_callback' => 'v5gcuk_sanitize_bool', ) );
	    $wp_customize->add_control( 'v5gcuk_services_enable', array(
			'section' => 'v5gcuk_services_section', // Required, core or custom.
			'label' => esc_attr__( "Use this section?", 'v5gcuk' ),
			'type'    => 'checkbox',
		) );

    	/*
    	Quote
    	------------------------------ */
		$wp_customize->add_section( 'v5gcuk_quote_section', array(
			'title' => esc_attr__( 'Quote', 'v5gcuk' ),
			'description' => esc_attr__( 'Display a quote and an image inside a laptop.', 'v5gcuk' ),
			'panel' => 'v5gcuk_front_page_sections',
			'priority' => 120,
		) );

		$wp_customize->add_setting( 'v5gcuk_quote', array( 'default' => esc_html__( '"We are an agency passionate about what we do, providing a great service to small businesses. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus."', 'v5gcuk' ), 'transport' => 'postMessage', 'sanitize_callback' => 'v5gcuk_sanitize_textarea', ) );
		$wp_customize->add_control( 'v5gcuk_quote', array(
			'type' => 'textarea',
			'section' => 'v5gcuk_quote_section', // Required, core or custom.
			'label' => esc_attr__( 'Quote', 'v5gcuk' ),
			//'description' => esc_attr__( '', 'v5gcuk' ),
		) );

		$wp_customize->add_setting( 'v5gcuk_quote_cite', array( 'default' => __( 'John Smith <span>CEO, v5gcuk Inc.</span>', 'v5gcuk' ), 'transport' => 'postMessage', 'sanitize_callback' => 'v5gcuk_sanitize_text_html', ) );
		$wp_customize->add_control( 'v5gcuk_quote_cite', array(
			'type' => 'text',
			'section' => 'v5gcuk_quote_section', // Required, core or custom.
			'label' => esc_attr__( "Quote's Author", 'v5gcuk' ),
			//'description' => esc_attr__( 'Example: John Smith <span>CEO, v5gcuk Inc.</span>', 'v5gcuk' ),
		) );

		$wp_customize->add_setting( 'v5gcuk_quote_image', array( 'default' => '', 'transport' => 'postMessage', 'sanitize_callback' => 'v5gcuk_sanitize_integer', ) );
		$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'v5gcuk_quote_image', array(
		    'section'     => 'v5gcuk_quote_section',
		    'label'       => esc_attr__( 'Image' , 'v5gcuk' ),
		    'description' => esc_attr__( 'Screenshot to be displayed within the laptop.', 'v5gcuk' ),
		    'flex_width'  => false, // Allow any width, making the specified value recommended. False by default.
		    'flex_height' => false, // Require the resulting image to be exactly as tall as the height attribute (default).
		    'width'       => 900,
		    'height'      => 563,
		) ) );

		$wp_customize->add_setting( 'v5gcuk_quote_bck_color', array( 'default' => '#50e3c2', 'transport' => 'postMessage', 'sanitize_callback' => 'sanitize_hex_color', ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'v5gcuk_quote_bck_color', array(
			'label'        => esc_attr__( 'Background Color', 'v5gcuk' ),
			'section'    => 'v5gcuk_quote_section',
		) ) );

		$wp_customize->add_setting( 'v5gcuk_quote_enable', array( 'default' => true, 'transport' => 'postMessage', 'sanitize_callback' => 'v5gcuk_sanitize_bool', ) );
	    $wp_customize->add_control( 'v5gcuk_quote_enable', array(
			'section' => 'v5gcuk_quote_section', // Required, core or custom.
			'label' => esc_attr__( "Use this section?", 'v5gcuk' ),
			'type'    => 'checkbox',
		) );

		/*
    	Video
    	------------------------------ */
		$wp_customize->add_section( 'v5gcuk_video_section', array(
			'title' => esc_attr__( 'Video', 'v5gcuk' ),
			'description' => esc_attr__( 'Display a video from YouTube or Vimeo and text aside.', 'v5gcuk' ),
			'panel' => 'v5gcuk_front_page_sections',
			'priority' => 140,
		) );

		$wp_customize->add_setting( 'v5gcuk_video_url', array( 'default' => 'https://vimeo.com/137643804', 'sanitize_callback' => 'v5gcuk_sanitize_url', ) );
		$wp_customize->add_control( 'v5gcuk_video_url', array(
			'type' => 'url',
			'section' => 'v5gcuk_video_section', // Required, core or custom.
			'label' => esc_attr__( "Video URL", 'v5gcuk' ),
			'description' => esc_attr__( "Must be a YouTube or Vimeo URL", 'v5gcuk' ),
		) );

		/* translators: Lorem ipsum text, It is not strictly necessary to translate. */
		$wp_customize->add_setting( 'v5gcuk_video_title', array( 'default' => esc_html__( 'Praesent commodo cursus magna, vel scelerisque nisl consectetur et', 'v5gcuk' ), 'transport' => 'postMessage', 'sanitize_callback' => 'v5gcuk_sanitize_text', ) );
		$wp_customize->add_control( 'v5gcuk_video_title', array(
			'type' => 'text',
			'section' => 'v5gcuk_video_section', // Required, core or custom.
			'label' => esc_attr__( "Title", 'v5gcuk' ),
		) );

		/* translators: Lorem ipsum text, It is not strictly necessary to translate. */
		$wp_customize->add_setting( 'v5gcuk_video_text', array( 'default' => esc_html__( 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna.', 'v5gcuk' ), 'transport' => 'postMessage', 'sanitize_callback' => 'v5gcuk_sanitize_text_html', ) );
		$wp_customize->add_control( 'v5gcuk_video_text', array(
			'type' => 'textarea',
			'section' => 'v5gcuk_video_section', // Required, core or custom.
			'label' => esc_attr__( 'Text', 'v5gcuk' ),
		) );

		$wp_customize->add_setting( 'v5gcuk_video_link_title', array( 'default' => esc_html__( 'Learn More', 'v5gcuk' ), 'transport' => 'postMessage', 'sanitize_callback' => 'v5gcuk_sanitize_text', ) );
		$wp_customize->add_control( 'v5gcuk_video_link_title', array(
			'type' => 'text',
			'section' => 'v5gcuk_video_section', // Required, core or custom.
			'label' => esc_attr__( "Link Title", 'v5gcuk' ),
		) );

		$wp_customize->add_setting( 'v5gcuk_video_link_url', array( 'default' => '', 'transport' => 'postMessage', 'sanitize_callback' => 'v5gcuk_sanitize_url', ) );
		$wp_customize->add_control( 'v5gcuk_video_link_url', array(
			'type' => 'url',
			'section' => 'v5gcuk_video_section', // Required, core or custom.
			'label' => esc_attr__( "Link URL", 'v5gcuk' ),
		) );

		$wp_customize->add_setting( 'v5gcuk_video_enable', array( 'default' => true, 'transport' => 'postMessage', 'sanitize_callback' => 'v5gcuk_sanitize_bool', ) );
	    $wp_customize->add_control( 'v5gcuk_video_enable', array(
			'section' => 'v5gcuk_video_section', // Required, core or custom.
			'label' => esc_attr__( "Use this section?", 'v5gcuk' ),
			'type'    => 'checkbox',
		) );

		/*
    	Testimonial
    	------------------------------ */
    	if ( class_exists( 'Jetpack' ) ){

			$wp_customize->add_section( 'v5gcuk_testimonials_section', array(
				'title' => esc_attr__( 'Testimonials', 'v5gcuk' ),
				'description' => sprintf( __( 'To create a testimonial go to your <a href="%s">Admin Panel >> Testimonials >> Add New</a>.', 'v5gcuk' ), get_admin_url( null, 'post-new.php?post_type=jetpack-testimonial' ) ),
				'panel' => 'v5gcuk_front_page_sections',
				'priority' => 160,
			) );

			$wp_customize->add_setting( 'v5gcuk_testimonial_image', array( 'default' => '', 'transport' => 'postMessage', 'sanitize_callback' => 'attachment_url_to_postid', ) );
		    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'v5gcuk_testimonial_image', array(
		        'label'    => esc_attr__( 'Background Image', 'v5gcuk' ),
		        'section'  => 'v5gcuk_testimonials_section',
		        'settings' => 'v5gcuk_testimonial_image',
		    ) ) );

		    $wp_customize->add_setting( 'v5gcuk_testimonial_enable', array( 'default' => true, 'transport' => 'postMessage', 'sanitize_callback' => 'v5gcuk_sanitize_bool', ) );
		    $wp_customize->add_control( 'v5gcuk_testimonial_enable', array(
				'section' => 'v5gcuk_testimonials_section', // Required, core or custom.
				'label' => esc_attr__( "Use this section?", 'v5gcuk' ),
				'type'    => 'checkbox',
			) );

		}

		/*
    	Image
    	------------------------------ */
		$wp_customize->add_section( 'v5gcuk_image_section', array(
			'title' => esc_attr__( 'Image', 'v5gcuk' ),
			'description' => esc_attr__( 'Display an image and text aside.', 'v5gcuk' ),
			'panel' => 'v5gcuk_front_page_sections',
			'priority' => 180,
		) );

		$wp_customize->add_setting( 'v5gcuk_image_image', array( 'default' => '', 'transport' => 'postMessage', 'sanitize_callback' => 'attachment_url_to_postid', ) );
	    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'v5gcuk_image_image', array(
	        'label'    => esc_attr__( 'Featured Image', 'v5gcuk' ),
	        'section'  => 'v5gcuk_image_section',
	        'settings' => 'v5gcuk_image_image',
	    ) ) );

	    /* translators: Lorem ipsum text, It is not strictly necessary to translate. */
		$wp_customize->add_setting( 'v5gcuk_image_title', array( 'default' => esc_html__( 'Donec id elit non mi porta gravida at eget metus', 'v5gcuk' ), 'transport' => 'postMessage', 'sanitize_callback' => 'v5gcuk_sanitize_text', ) );
		$wp_customize->add_control( 'v5gcuk_image_title', array(
			'type' => 'text',
			'section' => 'v5gcuk_image_section', // Required, core or custom.
			'label' => esc_attr__( "Title", 'v5gcuk' ),
		) );

		/* translators: Lorem ipsum text, It is not strictly necessary to translate. */
		$wp_customize->add_setting( 'v5gcuk_image_text', array( 'default' => esc_html__( 'Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nulla vitae elit libero, a pharetra augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam porta sem malesuada magna mollis euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'v5gcuk' ), 'transport' => 'postMessage', 'sanitize_callback' => 'v5gcuk_sanitize_text_html', ) );
		$wp_customize->add_control( 'v5gcuk_image_text', array(
			'type' => 'textarea',
			'section' => 'v5gcuk_image_section', // Required, core or custom.
			'label' => esc_attr__( 'Text', 'v5gcuk' ),
		) );

		$wp_customize->add_setting( 'v5gcuk_image_link_title', array( 'default' => esc_html__( 'Learn More', 'v5gcuk' ), 'transport' => 'postMessage', 'sanitize_callback' => 'v5gcuk_sanitize_text', ) );
		$wp_customize->add_control( 'v5gcuk_image_link_title', array(
			'type' => 'text',
			'section' => 'v5gcuk_image_section', // Required, core or custom.
			'label' => esc_attr__( "Link Title", 'v5gcuk' ),
		) );

		$wp_customize->add_setting( 'v5gcuk_image_link_url', array( 'default' => '', 'transport' => 'postMessage', 'sanitize_callback' => 'v5gcuk_sanitize_url', ) );
		$wp_customize->add_control( 'v5gcuk_image_link_url', array(
			'type' => 'url',
			'section' => 'v5gcuk_image_section', // Required, core or custom.
			'label' => esc_attr__( "Link URL", 'v5gcuk' ),
		) );

		$wp_customize->add_setting( 'v5gcuk_image_enable', array( 'default' => true, 'transport' => 'postMessage', 'sanitize_callback' => 'v5gcuk_sanitize_bool', ) );
	    $wp_customize->add_control( 'v5gcuk_image_enable', array(
			'section' => 'v5gcuk_image_section', // Required, core or custom.
			'label' => esc_attr__( "Use this section?", 'v5gcuk' ),
			'type'    => 'checkbox',
		) );

		/*
    	Team
    	------------------------------ */
    	$wp_customize->add_section( 'v5gcuk_team_section', array(
			'title' => esc_attr__( 'Team', 'v5gcuk' ),
			'description' => esc_attr__( 'Display your team members.', 'v5gcuk' ),
			'panel' => 'v5gcuk_front_page_sections',
			'priority' => 200,
		) );

		$wp_customize->add_setting( 'v5gcuk_probtn_team', array( 'default' => '', 'sanitize_callback' => 'v5gcuk_sanitize_text', ) );
		$wp_customize->add_control( new v5gcuk_Display_Text_Control( $wp_customize, 'v5gcuk_probtn_team', array(
			'section' => 'v5gcuk_team_section', // Required, core or custom.
			'label' => sprintf( __( 'Check out the <a href="%s" target="_blank">PRO version</a> to include team members.', 'v5gcuk' ), 'https://www.quemalabs.com/theme/v5gcuk-pro/' ),
		) ) );


		/*
    	Phone
    	------------------------------ */
		$wp_customize->add_section( 'v5gcuk_phone_section', array(
			'title' => esc_attr__( 'Phone', 'v5gcuk' ),
			'description' => esc_attr__( 'Display a phone screenshot and services.', 'v5gcuk' ),
			'panel' => 'v5gcuk_front_page_sections',
			'priority' => 220,
		) );

		$wp_customize->add_setting( 'v5gcuk_phone_image', array( 'default' => '', 'transport' => 'postMessage', 'sanitize_callback' => 'v5gcuk_sanitize_integer', ) );
		$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'v5gcuk_phone_image', array(
		    'section'     => 'v5gcuk_phone_section',
		    'label'       => esc_attr__( 'Phone Screen' , 'v5gcuk' ),
		    'description' => esc_attr__( 'Screenshot to be displayed within the phone.', 'v5gcuk' ),
		    'flex_width'  => false, // Allow any width, making the specified value recommended. False by default.
		    'flex_height' => false, // Require the resulting image to be exactly as tall as the height attribute (default).
		    'width'       => 750,
		    'height'      => 1334,
		) ) );

		$wp_customize->add_setting( 'v5gcuk_phone_text', array( 'default' => '', 'sanitize_callback' => 'v5gcuk_sanitize_text', ) );
		$wp_customize->add_control( new v5gcuk_Display_Text_Control( $wp_customize, 'v5gcuk_phone_text', array(
			'section' => 'v5gcuk_phone_section', // Required, core or custom.
			'label' => __( 'To add services go to: <br><a href="#" data-section="sidebar-widgets-phone-section">Customize -> Widgets -> Front Page - Phone Section</a>. <br>Then add the "<strong>v5gcuk - Service widget</strong>"', 'v5gcuk' ),
		) ) );

		$wp_customize->add_setting( 'v5gcuk_phone_link_title', array( 'default' => esc_html__( 'Learn More', 'v5gcuk' ), 'transport' => 'postMessage', 'sanitize_callback' => 'v5gcuk_sanitize_text', ) );
		$wp_customize->add_control( 'v5gcuk_phone_link_title', array(
			'type' => 'text',
			'section' => 'v5gcuk_phone_section', // Required, core or custom.
			'label' => esc_attr__( "Link Title", 'v5gcuk' ),
		) );

		$wp_customize->add_setting( 'v5gcuk_phone_link_url', array( 'default' => '#', 'transport' => 'postMessage', 'sanitize_callback' => 'v5gcuk_sanitize_url', ) );
		$wp_customize->add_control( 'v5gcuk_phone_link_url', array(
			'type' => 'url',
			'section' => 'v5gcuk_phone_section', // Required, core or custom.
			'label' => esc_attr__( "Link URL", 'v5gcuk' ),
		) );

		$wp_customize->add_setting( 'v5gcuk_phone_bck_color', array( 'default' => '#68beec', 'transport' => 'postMessage', 'sanitize_callback' => 'sanitize_hex_color', ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'v5gcuk_phone_bck_color', array(
			'label'        => esc_attr__( 'Background Color', 'v5gcuk' ),
			'section'    => 'v5gcuk_phone_section',
		) ) );

	    $wp_customize->add_setting( 'v5gcuk_phone_color', array( 'default' => 'black', 'transport' => 'postMessage', 'sanitize_callback' => 'sanitize_key', ) );
	    $wp_customize->add_control( 'v5gcuk_phone_color', array(
			'section' => 'v5gcuk_phone_section', // Required, core or custom.
			'label' => esc_attr__( "Phone Color", 'v5gcuk' ),
			'type'    => 'select',
	        'choices'    => array(
	            'black' => 'Black',
	            'gray' => 'Gray',
	            'gold' => 'Gold',
	        ),
		) );

		$wp_customize->add_setting( 'v5gcuk_phone_enable', array( 'default' => true, 'transport' => 'postMessage', 'sanitize_callback' => 'v5gcuk_sanitize_bool', ) );
	    $wp_customize->add_control( 'v5gcuk_phone_enable', array(
			'section' => 'v5gcuk_phone_section', // Required, core or custom.
			'label' => esc_attr__( "Use this section?", 'v5gcuk' ),
			'type'    => 'checkbox',
		) );

		/*
    	Tagline
    	------------------------------ */
		$wp_customize->add_section( 'v5gcuk_tagline_section', array(
			'title' => esc_attr__( 'Tagline', 'v5gcuk' ),
			'description' => esc_attr__( 'Display and link a tagline.', 'v5gcuk' ),
			'panel' => 'v5gcuk_front_page_sections',
			'priority' => 240,
		) );

		$wp_customize->add_setting( 'v5gcuk_tagline_text', array( 'default' => esc_html__( 'Start captivating the attention of your client', 'v5gcuk' ), 'transport' => 'postMessage', 'sanitize_callback' => 'v5gcuk_sanitize_text', ) );
		$wp_customize->add_control( 'v5gcuk_tagline_text', array(
			'type' => 'text',
			'section' => 'v5gcuk_tagline_section', // Required, core or custom.
			'label' => esc_attr__( "Tagline", 'v5gcuk' ),
		) );

		$wp_customize->add_setting( 'v5gcuk_tagline_sub_text', array( 'default' => esc_html__( 'Cras justo odio, dapibus ac facilisis in, egestas eget quam', 'v5gcuk' ), 'transport' => 'postMessage', 'sanitize_callback' => 'v5gcuk_sanitize_text', ) );
		$wp_customize->add_control( 'v5gcuk_tagline_sub_text', array(
			'type' => 'text',
			'section' => 'v5gcuk_tagline_section', // Required, core or custom.
			'label' => esc_attr__( "Sub-Text", 'v5gcuk' ),
		) );

		$wp_customize->add_setting( 'v5gcuk_tagline_link_url', array( 'default' => '', 'transport' => 'postMessage', 'sanitize_callback' => 'v5gcuk_sanitize_url', ) );
		$wp_customize->add_control( 'v5gcuk_tagline_link_url', array(
			'type' => 'url',
			'section' => 'v5gcuk_tagline_section', // Required, core or custom.
			'label' => esc_attr__( "Tagline Link", 'v5gcuk' ),
		) );

		$wp_customize->add_setting( 'v5gcuk_tagline_bck_color', array( 'default' => '#68d2ae', 'transport' => 'postMessage', 'sanitize_callback' => 'sanitize_hex_color', ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'v5gcuk_tagline_bck_color', array(
			'label'        => esc_attr__( 'Background Color', 'v5gcuk' ),
			'section'    => 'v5gcuk_tagline_section',
		) ) );

		$wp_customize->add_setting( 'v5gcuk_tagline_enable', array( 'default' => true, 'transport' => 'postMessage', 'sanitize_callback' => 'v5gcuk_sanitize_bool', ) );
	    $wp_customize->add_control( 'v5gcuk_tagline_enable', array(
			'section' => 'v5gcuk_tagline_section', // Required, core or custom.
			'label' => esc_attr__( "Use this section?", 'v5gcuk' ),
			'type'    => 'checkbox',
		) );

		/*
    	Clients
    	------------------------------ */
		$wp_customize->add_section( 'v5gcuk_clients_section', array(
			'title' => esc_attr__( 'Clients', 'v5gcuk' ),
			'description' => esc_attr__( "Display client's logos.", 'v5gcuk' ),
			'panel' => 'v5gcuk_front_page_sections',
			'priority' => 260,
		) );

		$wp_customize->add_setting( 'v5gcuk_clients_title', array( 'default' => esc_html__( 'People Who Trust Us', 'v5gcuk' ), 'transport' => 'postMessage', 'sanitize_callback' => 'v5gcuk_sanitize_text', ) );
		$wp_customize->add_control( 'v5gcuk_clients_title', array(
			'type' => 'text',
			'section' => 'v5gcuk_clients_section', // Required, core or custom.
			'label' => esc_attr__( "Section Title", 'v5gcuk' ),
		) );

		$wp_customize->add_setting( 'v5gcuk_clients_text', array( 'default' => '', 'sanitize_callback' => 'v5gcuk_sanitize_text', ) );
		$wp_customize->add_control( new v5gcuk_Display_Text_Control( $wp_customize, 'v5gcuk_clients_text', array(
			'section' => 'v5gcuk_clients_section', // Required, core or custom.
			'label' => __( 'To add services go to: <br><a href="#" data-section="sidebar-widgets-clients-section">Customize -> Widgets -> Front Page - Clients Section</a>. <br>Then add the "<strong>v5gcuk - Client widget</strong>"', 'v5gcuk' ),
		) ) );

		$wp_customize->add_setting( 'v5gcuk_clients_enable', array( 'default' => true, 'transport' => 'postMessage', 'sanitize_callback' => 'v5gcuk_sanitize_bool', ) );
	    $wp_customize->add_control( 'v5gcuk_clients_enable', array(
			'section' => 'v5gcuk_clients_section', // Required, core or custom.
			'label' => esc_attr__( "Use this section?", 'v5gcuk' ),
			'type'    => 'checkbox',
		) );

		/*
    	Map
    	------------------------------ */
		$wp_customize->add_section( 'v5gcuk_map_section', array(
			'title' => esc_attr__( 'Map', 'v5gcuk' ),
			'description' => esc_attr__( "Display a map and your contact information.", 'v5gcuk' ),
			'panel' => 'v5gcuk_front_page_sections',
			'priority' => 280,
		) );

		$wp_customize->add_setting( 'v5gcuk_probtn_map', array( 'default' => '', 'sanitize_callback' => 'v5gcuk_sanitize_text', ) );
		$wp_customize->add_control( new v5gcuk_Display_Text_Control( $wp_customize, 'v5gcuk_probtn_map', array(
			'section' => 'v5gcuk_map_section', // Required, core or custom.
			'label' => sprintf( __( 'Check out the <a href="%s" target="_blank">PRO version</a> to create a map and contact info.', 'v5gcuk' ), 'https://www.quemalabs.com/theme/v5gcuk-pro/' ),
		) ) );


		/*
    	Pricing
    	------------------------------ */
		$wp_customize->add_section( 'v5gcuk_pricing_section', array(
			'title' => esc_attr__( 'Pricing', 'v5gcuk' ),
			'description' => esc_attr__( "Display pricing lists.", 'v5gcuk' ),
			'panel' => 'v5gcuk_front_page_sections',
			'priority' => 300,
		) );

		$wp_customize->add_setting( 'v5gcuk_pricing_title', array( 'default' => esc_html__( 'Pricing', 'v5gcuk' ), 'transport' => 'postMessage', 'sanitize_callback' => 'v5gcuk_sanitize_text', ) );
		$wp_customize->add_control( 'v5gcuk_pricing_title', array(
			'type' => 'text',
			'section' => 'v5gcuk_pricing_section', // Required, core or custom.
			'label' => esc_attr__( "Section Title", 'v5gcuk' ),
		) );

		$wp_customize->add_setting( 'v5gcuk_pricing_text', array( 'default' => '', 'sanitize_callback' => 'v5gcuk_sanitize_text', ) );
		$wp_customize->add_control( new v5gcuk_Display_Text_Control( $wp_customize, 'v5gcuk_pricing_text', array(
			'section' => 'v5gcuk_pricing_section', // Required, core or custom.
			'label' => __( 'To add a list go to: <br><a href="#" data-section="sidebar-widgets-pricing-section">Customize -> Widgets -> Front Page - Pricing Section</a>. <br>Then add the "<strong>v5gcuk - Pricing widget</strong>"', 'v5gcuk' ),
		) ) );

		$wp_customize->add_setting( 'v5gcuk_pricing_enable', array( 'default' => true, 'transport' => 'postMessage', 'sanitize_callback' => 'v5gcuk_sanitize_bool', ) );
	    $wp_customize->add_control( 'v5gcuk_pricing_enable', array(
			'section' => 'v5gcuk_pricing_section', // Required, core or custom.
			'label' => esc_attr__( "Use this section?", 'v5gcuk' ),
			'type'    => 'checkbox',
		) );

		/*
    	Portfolio
    	------------------------------ */
		$wp_customize->add_section( 'v5gcuk_portfolio_section', array(
			'title' => esc_attr__( 'Portfolio', 'v5gcuk' ),
			'description' => esc_attr__( "Display portfolio items.", 'v5gcuk' ),
			'panel' => 'v5gcuk_front_page_sections',
			'priority' => 320,
		) );

		$wp_customize->add_setting( 'v5gcuk_probtn_portfolio', array( 'default' => '', 'sanitize_callback' => 'v5gcuk_sanitize_text', ) );
		$wp_customize->add_control( new v5gcuk_Display_Text_Control( $wp_customize, 'v5gcuk_probtn_portfolio', array(
			'section' => 'v5gcuk_portfolio_section', // Required, core or custom.
			'label' => sprintf( __( 'Check out the <a href="%s" target="_blank">PRO version</a> to create a portfolio.', 'v5gcuk' ), 'https://www.quemalabs.com/theme/v5gcuk-pro/' ),
		) ) );


		/*
    	Blog
    	------------------------------ */
		$wp_customize->add_section( 'v5gcuk_blog_section', array(
			'title' => esc_attr__( 'Blog', 'v5gcuk' ),
			'description' => esc_attr__( "Display blog posts.", 'v5gcuk' ),
			'panel' => 'v5gcuk_front_page_sections',
			'priority' => 340,
		) );

		$wp_customize->add_setting( 'v5gcuk_blog_title', array( 'default' => esc_html__( 'From the blog', 'v5gcuk' ), 'transport' => 'postMessage', 'sanitize_callback' => 'v5gcuk_sanitize_text', ) );
		$wp_customize->add_control( 'v5gcuk_blog_title', array(
			'type' => 'text',
			'section' => 'v5gcuk_blog_section', // Required, core or custom.
			'label' => esc_attr__( "Section Title", 'v5gcuk' ),
		) );

		$wp_customize->add_setting( 'v5gcuk_blog_enable', array( 'default' => true, 'transport' => 'postMessage', 'sanitize_callback' => 'v5gcuk_sanitize_bool', ) );
	    $wp_customize->add_control( 'v5gcuk_blog_enable', array(
			'section' => 'v5gcuk_blog_section', // Required, core or custom.
			'label' => esc_attr__( "Use this section?", 'v5gcuk' ),
			'type'    => 'checkbox',
		) );


		

		






}
add_action( 'customize_register', 'v5gcuk_customize_register' );











/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function v5gcuk_customize_preview_js() {
	
	wp_register_script( 'v5gcuk_customizer_preview', get_template_directory_uri() . '/js/customizer-preview.js', array( 'customize-preview' ), '20151024', true );
	wp_localize_script( 'v5gcuk_customizer_preview', 'wp_customizer', array(
		'ajax_url' => admin_url( 'admin-ajax.php' ),
		'theme_url' => get_template_directory_uri(),
		'site_name' => get_bloginfo( 'name' )
	));
	wp_enqueue_script( 'v5gcuk_customizer_preview' );

}
add_action( 'customize_preview_init', 'v5gcuk_customize_preview_js' );


/**
 * Load scripts on the Customizer not the Previewer (iframe)
 */
function v5gcuk_customize_js() {

	wp_enqueue_script( 'v5gcuk_customizer_top_buttons', get_template_directory_uri() . '/js/theme-customizer-top-buttons.js', array( 'jquery' ), true  );
	wp_localize_script( 'v5gcuk_customizer_top_buttons', 'topbtns', array(
			'pro' => esc_html__( 'View PRO version', 'v5gcuk' ),
            'documentation' => esc_html__( 'Documentation', 'v5gcuk' )
	) );
	
	wp_enqueue_script( 'v5gcuk_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-controls' ), '20151024', true );

}
add_action( 'customize_controls_enqueue_scripts', 'v5gcuk_customize_js' );










/*
Sanitize Callbacks
*/

/**
 * Sanitize for post's categories
 */
function v5gcuk_sanitize_categories( $value ) {
    if ( ! array_key_exists( $value, v5gcuk_categories_ar() ) )
        $value = '';
    return $value;
}

/**
 * Sanitize return an non-negative Integer
 */
function v5gcuk_sanitize_integer( $value ) {
    return absint( $value );
}


/**
 * Sanitize return pro version text
 */
function v5gcuk_pro_version( $input ) {
    return $input;
}

/**
 * Sanitize Any
 */
function v5gcuk_sanitize_any( $input ) {
    return $input;
}

/**
 * Sanitize Text
 */
function v5gcuk_sanitize_text( $str ) {
	return sanitize_text_field( $str );
} 

/**
 * Sanitize Textarea
 */
function v5gcuk_sanitize_textarea( $text ) {
	return esc_textarea( $text );
}

/**
 * Sanitize URL
 */
function v5gcuk_sanitize_url( $url ) {
	return esc_url( $url );
}

/**
 * Sanitize Boolean
 */
function v5gcuk_sanitize_bool( $string ) {
	return (bool)$string;
} 

/**
 * Sanitize Text with html
 */
function v5gcuk_sanitize_text_html( $str ) {
	$args = array(
			    'a' => array(
			        'href' => array(),
			        'title' => array()
			    ),
			    'br' => array(),
			    'em' => array(),
			    'strong' => array(),
			    'span' => array(),
			);
	return wp_kses( $str, $args );
}

/**
 * Sanitize GPS Latitude and Longitud
 * http://stackoverflow.com/a/22007205
 */
function v5gcuk_sanitize_lat_long( $coords ) {
	if ( preg_match( '/^[-]?(([0-8]?[0-9])\.(\d+))|(90(\.0+)?),[-]?((((1[0-7][0-9])|([0-9]?[0-9]))\.(\d+))|180(\.0+)?)$/', $coords ) ) {
	    return $coords;
	} else {
	    return 'error';
	}
} 



/**
 * Create the "PRO version" buttons
 */
if ( ! function_exists( 'v5gcuk_pro_btns' ) ){
	function v5gcuk_pro_btns( $args ){

		$wp_customize = $args['wp_customize'];
		$title = $args['title'];
		$label = $args['label'];
		if ( isset( $args['priority'] ) || array_key_exists( 'priority', $args ) ) {
			$priority = $args['priority'];
		}else{
			$priority = 120;
		}
		if ( isset( $args['panel'] ) || array_key_exists( 'panel', $args ) ) {
			$panel = $args['panel'];
		}else{
			$panel = '';
		}

		$section_id = sanitize_title( $title );

		$wp_customize->add_section( $section_id , array(
			'title'       => $title,
			'priority'    => $priority,
			'panel' => $panel,
		) );
		$wp_customize->add_setting( $section_id, array(
			'sanitize_callback' => 'v5gcuk_pro_version'
		) );
		$wp_customize->add_control( new v5gcuk_Pro_Version( $wp_customize, $section_id, array(
	        'section' => $section_id,
	        'label' => $label
		   )
		) );
	}
}//end if function_exists

/**
 * Display Text Control
 * Custom Control to display text
 */
if ( class_exists( 'WP_Customize_Control' ) ) {
	class v5gcuk_Display_Text_Control extends WP_Customize_Control {
		/**
		* Render the control's content.
		*/
		public function render_content() {

	        $wp_kses_args = array(
			    'a' => array(
			        'href' => array(),
			        'title' => array(),
			        'data-section' => array(),
			    ),
			    'br' => array(),
			    'em' => array(),
			    'strong' => array(),
			    'span' => array(),
			);
			$label = wp_kses( $this->label, $wp_kses_args );
	        ?>
			<p><?php echo $label; ?></p>		
		<?php
		}
	}
}



/*
* AJAX call to retreive an image URI by its ID
*/
add_action( 'wp_ajax_nopriv_v5gcuk_get_image_src', 'v5gcuk_get_image_src' );
add_action( 'wp_ajax_v5gcuk_get_image_src', 'v5gcuk_get_image_src' );

function v5gcuk_get_image_src() {
	$image_id = $_POST['image_id'];
	$image = wp_get_attachment_image_src( absint( $image_id ), 'full' );
	$image = $image[0];
	echo $image;
	die();
}
