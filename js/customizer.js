jQuery(window).load(function (){
	( function( $ ) {

		//Scroll to section
		$('body').on('click', '#accordion-panel-v5gcuk_front_page_sections .control-subsection .accordion-section-title', function(event) {
			if ( !$(this).parent('.control-subsection').hasClass('open') ) {
				return false;
			};
			var section_id = $(this).parent('.control-subsection').attr('id');
			scrollToSection( section_id );
			
		});

		function scrollToSection( section_id ){
			var section_class = "welcome-section";
			var $contents = $('#customize-preview iframe').contents();
			switch ( section_id ) {
				case 'accordion-section-welcome':
			        section_class = "welcome-section";
			        break;
				case 'accordion-section-services':
			        section_class = "services-section";
			        break;
			    case 'accordion-section-v5gcuk_quote_section':
			        section_class = "quote-section";
			        break;
			    case 'accordion-section-v5gcuk_video_section':
			        section_class = "video-section";
			        break;
			    case 'accordion-section-v5gcuk_testimonials_section':
			        section_class = "testimonials-section";
			        break;
			    case 'accordion-section-v5gcuk_image_section':
			        section_class = "image-section";
			        break;
			    case 'accordion-section-v5gcuk_team_section':
			        section_class = "team-section";
			        break;
			    case 'accordion-section-v5gcuk_phone_section':
			        section_class = "phone-section";
			        break;
			    case 'accordion-section-v5gcuk_tagline_section':
			        section_class = "tagline-section";
			        break;
			    case 'accordion-section-v5gcuk_clients_section':
			        section_class = "clients-section";
			        break;
			    case 'accordion-section-v5gcuk_map_section':
			        section_class = "map-section";
			        break;
			    case 'accordion-section-v5gcuk_pricing_section':
			        section_class = "pricing-section";
			        break;
			    case 'accordion-section-v5gcuk_portfolio_section':
			        section_class = "portfolio-section";
			        break;
			    case 'accordion-section-v5gcuk_blog_section':
			        section_class = "blog-section";
			        break;
			}
			$contents.find("html, body").animate({
		    	scrollTop: $contents.find( "." + section_class ).offset().top - 30
		    }, 1000);

		}

		//console.log("a");
		//console.log( wp.customize.control( 'v5gcuk_quote' ).section() );
		


		/*
		 * Links to different sections in the Customizer
		 * Just create a link like this: <a href="#" data-section="section-id">link</a>
		 */
		$('body').on('click', 'a[data-section]', function(event) {
			wp.customize.section( $(this).attr( 'data-section' ) ).focus();
		});

	} )( jQuery );
});