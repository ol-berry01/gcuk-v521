<?php

	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( '//code.jquery.com/jquery-1.11.0.min.js', '1.11.0', false);

	//jQuery Migrate ==============================================
	wp_enqueue_script( 'jquery-migrate', '//code.jquery.com/jquery-migrate-1.2.1.min.js', array(), '1.2.1', false );
	//=================================================================
	
	//Flickity ========================================================
	wp_enqueue_script( 'flickity', get_template_directory_uri() . '/js/flickity.pkgd.js', array(), '1.1.1', false );
	//=================================================================

	//Wow ========================================================
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.js', array(), '1.1.2', true );
	//=================================================================
	
	//Pace ============================================================
	wp_enqueue_script( 'pace', get_template_directory_uri() . '/js/pace.js', array(), '0.2.0', true);
	//=================================================================

	//Filter Grid Test ================================================
	wp_enqueue_script( 'kilo-js', get_template_directory_uri() . '/js/kilo.js', array( 'jquery' ), null, true );
	//=================================================================
	
	//Bootstrap JS ========================================
	wp_enqueue_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), true);
	//=================================================================

	//Slick JS ========================================================
	wp_enqueue_script( 'slick-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), true );
	//=================================================================

	//Isotope JS
	wp_enqueue_script( 'isotope-js', '//unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.min.js', array(), true );
	
	//Comment Reply ===================================================
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	//=================================================================
	
	//Customs Scripts =================================================
	wp_enqueue_script( 'v5gcuk_theme-custom', get_template_directory_uri() . '/js/script.js', array( 'jquery', 'bootstrap' ), '1.0', false );
	//=================================================================

?>