<?php  
	$intro_title 	= get_sub_field( 'services_introTitle' );
	$intro_subTitle = get_sub_field( 'services_introSubtitle' );
	$intro_heading	= get_sub_field( 'services_introHeading' );	

	$intro_col		= get_sub_field( 'services_introColumn' );
	$col_print		= '<h4>%s</h4><p>%s</p>';
?>

<div id="services-section"class="services-section">
    <div class="container">
        <div class="row">
			<div class="wow fadeInUp" data-wow-delay="300ms" style="padding:0 0 2em 0;">
				<?php 
					echo "<" . $intro_heading . ' class="section-title">' . $intro_title . '</' . $intro_heading . '>' . 
					'<p class="lead">' . $intro_subTitle . '</p>';
				?>
			</div>
			<?php if( have_rows('services_introColumn') ):
				 while( have_rows( 'services_introColumn' ) ): the_row(); ?>
					<div class="col-sm-4 service service-intro wow fadeIn" data-wow-delay="100ms">
						<div class="service-text">
							<?php 
								$col_header 	= get_sub_field( 'services_columnHeader' );
								$col_content	= get_sub_field( 'services_columnContent' );

								echo sprintf($col_print, $col_header, $col_content);
							?>
						</div>
						<div class="clearfix"></div>
					</div>
				<?php 
					endwhile;
				endif; 
			?>
        </div><!-- row -->
    </div><!-- container -->
</div><!-- services-section -->