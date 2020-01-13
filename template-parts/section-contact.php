<div id="contact-section" class="services-section">
    <div class="container">
        <div class="row">
            <div class="wow fadeInUp" data-wow-delay="300ms">
                <h1><?php the_sub_field( 'contact_title' ); ?></h1>
                <p class="lead"><?php the_sub_field( 'contact_subtitle' ); ?></p>
            </div>
        </div>
        <div class="row wow fadeIn" data-wow-delay="300ms">
			<div class="col-md-7 service-intro" style="">
                <?php 
                    $form = get_sub_field( 'contact_formSeven' );
                    echo do_shortcode( $form );
                ?>
            </div>
            <div class="col-md-5">
                <?php the_sub_field( 'contact_formSidebar' ); ?>
            </div>
        </div><!-- row -->
    </div><!-- container -->
</div><!-- services-section -->
