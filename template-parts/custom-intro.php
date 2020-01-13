<?php
    $downloadBrochure  = get_field( 'download_brochure' );
?>
<div id="welcome-section" class="welcome-section">
    <div class="welcome-wrap wow fadeInLeft" data-wow-delay="600ms" style="width:100%;padding:3% 15% 5%;">
        <?php yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); ?>
        <div>
            <h1><?php the_field( 'productIntro_title' ); ?></h1>
            <p class="lead"><?php the_field( 'productIntro_subtitle' ); ?></p>
        </div>
        <p><?php the_field( 'productIntro_content' ); ?></p>

        <!-- Start: CTA -->
        <div class="row buttons-cta">

            <?php if(!$downloadBrochure) : ?>
                <div class="col-sm-4 col-sm-offset-4 col-xs-12 button-cta">
                    <a role="button" data-toggle="modal" data-target="#brochureEnquiry">
                        <button class="btn btn-details gc-shadow">
                            <i class="fa fa-envelope" aria-hidden="true"></i> Make An Enquiry
                        </button>
                    </a>
                </div>
            <?php else : ?>
            <!-- Start: Brochure Download -->
            <div class="col-sm-3 col-sm-offset-3 col-xs-12 button-cta">
                <a href="<?php echo $downloadBrochure; ?>" role="button" download>
                    <button class="btn btn-details gc-shadow">
                        <i class="fa fa-cloud-download" aria-hidden="true"></i> Brochure 
                    </button>
                </a>
            </div>
            <!-- Start: Enquiry Button -->
            <div class="col-sm-3 col-xs-12 button-cta">
                <a role="button" data-toggle="modal" data-target="#brochureEnquiry">
                    <button class="btn btn-details gc-shadow">
                        <i class="fa fa-envelope" aria-hidden="true"></i> Make An Enquiry
                    </button>
                </a>
            </div>
            <?php endif; ?>
        </div>
</div>
<!-- Enquiry Modal -->
<div id="brochureEnquiry" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span class="" aria-hidden="true" style="color:#fff;">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <div>
                    <h3 class="modal-title" id="myModalLabel">Message us about the <?php echo the_title(); ?></h3>
                </div>
            </div>
            <div class="modal-body">                     
                <?php echo do_shortcode( '[contact-form-7 id="1754" title="Brochure Page - Form"]' ); ?>
            </div>
        </div>
    </div>
</div>
