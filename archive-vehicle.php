<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package v5gcuk
 */
get_header(); ?>
	<div class="container">
		<main id="main" class="site-main col-md-12" role="main" style="padding-bottom:5rem;">
			<header class="page-header">
				<h1 class="page-title">All Vehicles</h1>
				<?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
			</header>
			<div class="button-group filters-button-group">
				<button class="button is-checked" data-filter="*">All Vehicles</button>
				<button class="button" data-filter=".golf">Golf Cars</button>
				<button class="button" data-filter=".utility">Utility Vehicles</button>
                <button class="button" data-filter=".hospitality">Hospitality Shuttles</button>
				<button class="button" data-filter=".refresher">Food & Beverage</button>
				<button class="button" data-filter=".custom">Custom Vehicles</button>
				<button class="button" data-filter=".used">Used Vehicles</button>
			</div>
			<div class="vehicle-grid" style="">
				<?php
					$vehiclesArchive = new WP_Query(array(
						'posts_per_page' 	=> -1,
						'post_type' 		=> array(
							'vehicle',
							'custom_vehicle',
							'used_vehicle'
						),
						'orderby'			=> 'category',
						'order'				=> 'ASC'
					));
					while($vehiclesArchive->have_posts()) {
						$vehiclesArchive->the_post();?>
						<?php get_template_part( 'template-parts/content-vehicle', get_post_format() ); ?>
				<?php } ?>
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
			// show if number is greater than 50
			numberGreaterThan50: function( itemElem ) {
				var number = itemElem.querySelector('.number').textContent;
				return parseInt( number, 10 ) > 50;
			},
			// show if name ends with -ium
			ium: function( itemElem ) {
				var name = itemElem.querySelector('.name').textContent;
				return name.match( /ium$/ );
			}
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

			// change is-checked class on buttons
			var buttonGroups = document.querySelectorAll('.button-group');
			for ( var i=0, len = buttonGroups.length; i < len; i++ ) {
			var buttonGroup = buttonGroups[i];
			radioButtonGroup( buttonGroup );
			}

			function radioButtonGroup( buttonGroup ) {
			buttonGroup.addEventListener( 'click', function( event ) {
				// only work with buttons
				if ( !matchesSelector( event.target, 'button' ) ) {
				return;
				}
				buttonGroup.querySelector('.is-checked').classList.remove('is-checked');
				event.target.classList.add('is-checked');
			});
			}

		</script>
	</div>	
	<?php get_template_part( 'template-parts/section-blog' ); ?>
<?php get_footer(); ?>
