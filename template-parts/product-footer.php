<div>
	<div id="tabs-section" class="specs-section">
		<div id="tabs" class="container product-specifications-container">
			<div class="row" style="min-height:500px;">

				<?php 
					$ul_tabs 				= '<ul class="nav nav-tabs" role="tablist">';
					$ul_c					= '</ul>';
					$li_tab					= '<li role="presentation" class="%s">';
					$li_c					= '</li>';
					$tab					= '<a href="#%s" aria-controls="%s" role="tab" data-toggle="tab">%s</a>';
					
					$content_specs			= get_field( 'specs_table' );
					$content_colours		= get_field( 'colour_slide' );
					$content_accessories	= get_field( 'accessories_list' );
					$content_brochures		= get_field( 'download_brochure' );
					$content_downloads		= get_field( 'download_docs');
					$content_img			= get_field( 'specs_finalImage' );
					$template				= get_template_part( 'template-parts/product-%s' );
					$reset					= wp_reset_postdata(); 

					$tab_overview			= sprintf($li_tab, 'active') . sprintf($tab, 'overview', 'overview', 'Overview') . $li_c;
					$tab_specs 				= (($content_specs) ? sprintf($li_tab, '') . sprintf($tab, 'specs', 'specs', 'Specs') . $li_c : '');
					$tab_colours 			= (($content_colours) ? sprintf($li_tab, '') . sprintf($tab, 'colours', 'colours', 'Colours') . $li_c : '');
					$tab_accessories 		= (($content_accessories) ? sprintf($li_tab, '') . sprintf($tab, 'accessories', 'accessories', 'Accessories') . $li_c : '');
					$tab_download 			= (($content_brochures || $content_downloads) ? sprintf($li_tab, '') . sprintf($tab, 'downloads', 'downloads', 'Downloads') . $li_c : '');

					echo $ul_tabs . $tab_overview . $tab_specs . $tab_colours .	$tab_accessories . $tab_download . $ul_c;
				?>

					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="overview">
							<?php
								get_template_part( 'template-parts/product-footerOverview' );
								echo $reset;
							?>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="specs">
							<?php
								get_template_part( 'template-parts/product-footerSpecs' );
								echo $reset;
							?>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="colours">
							<?php 
								get_template_part( 'template-parts/product-footerColours' );
								echo $reset;
							?>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="accessories">
							<?php 
								get_template_part( 'template-parts/product-footerAccessories' );
								echo $reset;
							?>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="downloads">
							<?php
								get_template_part( 'template-parts/product-footerDownloads' );
								echo $reset;
							?>
						</div>
					</div>

			</div><!-- End: Row -->
		</div><!-- End: Container -->
	</div>

	<div>

	<?php echo (($content_img) ? '<div class="specs-final-image"><img src="' . $content_img['url'] . '" alt="' . $content_img['alt'] . '"/></div>' : '' ); ?>
	
</div>