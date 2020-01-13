<div id="services-section"class="services-section">
    <div class="container">
        <div class="row wow fadeIn" data-wow-delay="300ms">
			<div class="service-intro">
				<h2><?php the_sub_field( 'services_header' ); ?></h2>
				<p><?php the_sub_field( 'services_content' ); ?></p>
			</div>

			<?php if( have_rows('services_service') ): ?>
                <?php while( have_rows( 'services_service' ) ): the_row(); ?>

					<div class="col-md-3 col-sm-6 service wow fadeIn" data-wow-delay="1000ms"><!-- service -->
						<div class="service-icon-wrap">
							<img src="<?php the_sub_field( 'service_icon' ); ?>" alt="" class="service-icon"/>
						</div>

						<div class="service-text">
							<h4><?php the_sub_field( 'service_header' ); ?></h4>
							<p><?php the_sub_field( 'service_content' ); ?></p>
							<a href="<?php the_sub_field( 'service_link' ); ?>" class="read-more"><?php the_sub_field( 'service_button' ); ?> <i class="fa fa-angle-right"></i></a>
						</div>
						<div class="clearfix"></div>
					</div><!-- service -->
					
				<?php endwhile; ?>
            <?php endif; ?>

        </div><!-- row -->
    </div><!-- container -->
    
</div><!-- services-section -->