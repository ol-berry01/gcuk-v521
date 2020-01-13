<?php
/**
 * The template for displaying custom vehicles archive page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package v5gcuk
 */
get_header(); ?>
	
    <div class="container">
		<main id="main" class="site-main col-md-12" role="main" style="padding-bottom:5rem;">
			<header class="page-header">
				<h1 class="page-title">All Clearance Vehicles</h1>
				<?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
			</header>
			<div class="button-group filters-button-group">
				<button class="button is-checked" data-filter="*">All Customisations</button>
				<button class="button" data-filter=".golf">Golf Cars</button>
				<button class="button" data-filter=".utility">Utility Vehicles</button>
                <button class="button" data-filter=".hospitality">Hospitality Shuttles</button>
				<button class="button" data-filter=".refresher">Food & Beverage</button>
			</div>
			<div class="vehicle-grid clearance-grid" style="">
				<?php
					$vehiclesArchive = new WP_Query(array(
						'posts_per_page' 	=> -1,
						'post_type' 		=> 'clearance',
						'orderby'			=> 'category',
						'order'				=> 'ASC'
					));
					while($vehiclesArchive->have_posts()) {
                        $vehiclesArchive->the_post();
                            get_template_part( 'template-parts/content-clearance', get_post_format() );  
                    }; ?>
			</div>
		</main>
	</div>	
	<div class="container">
		
		<script>
			// external js: isotope.pkgd.js

			// init Isotope
			var iso = new Isotope( '.vehicle-grid', {
                itemSelector: '.vehicle-archive',
                layoutMode: 'fitRows'
			});

			// filter functions
			var filterFns = {
                
			};

			// bind filter button click
			var filtersElem = document.querySelector('.filters-button-group');
			filtersElem.addEventListener( 'click', function( event ) {
                // only work with buttons
                if ( !matchesSelector( event.target, 'button' ) ) {
                    return;
			}
			var filterValue = event.target.getAttribute('data-filter');
                // use matching filter function
                filterValue = filterFns[ filterValue ] || filterValue;
                iso.arrange({ filter: filterValue });
			});

		</script>

	</div>	
	<?php get_template_part( 'template-parts/section-blog' ); ?>
<?php get_footer(); ?>
