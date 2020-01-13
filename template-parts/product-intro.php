<?php
    $theTitle                       = get_the_title();
    $introTitle                     = get_field( 'productIntro_title' );
    $introSubTitle                  = get_field( 'productIntro_subtitle' );
    $introContent                   = get_field( 'productIntro_content' );
    $introStatic                    = get_field( 'productIntro_image' );
    $rows                           = get_field( 'colour_slide' );
    $downloadBrochure               = get_field( 'download_brochure' );

    $introRand                      = $rows[ array_rand( $rows ) ];
    $introRand_img                  = $introRand[ 'colour_image' ];
    $introRand_description          = $introRand[ 'colour_description' ];

    $introTxt                       = '<h1>%s</h1><p class="lead">%s</p><p>%s</p>';
    $col_sm_6_o                     = '<div class="col-sm-6">';
    $col_sm_6off_o                  = '<div class="col-sm-6 col-sm-offset-3">';
    $div_c                          = '</button></a></div>';
    $btn_o                          = '<button class="btn btn-details gc-shadow">';
    $anchor_dld                     = '<a href="' . $downloadBrochure . '" role="button" download>';
    $anchor_mdl                     = '<a role="button" data-toggle="modal" data-target="#brochureEnquiry">';
    $btn_dld                        = '<i class="fa fa-cloud-download" aria-hidden="true"></i> Brochure';
    $btn_mdl                        = '<i class="fa fa-envelope" aria-hidden="true"></i> Make An Enquiry';
    $img_o                          = '<img src="';
    $img                            = '<img src="%s" alt="%s">';
    $randCite                       = '<p class="welcome-cite">%s in %s</p>';
    $staticCite                     = '<p class="welcome-cite">%s</p>';
?>
<div id="welcome-section" class="welcome-section">
    <!-- Product Intro Description-->
    <div class="welcome-wrap wow fadeInLeft" data-wow-delay="600ms" style="">
        <?php 
            yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
            echo sprintf($introTxt, $introTitle, $introSubTitle, $introContent);
        ?>
        
        <div class="row buttons-cta">
            <div class="row">
                <?php 
                    echo (($downloadBrochure) ? 
                        $col_sm_6_o . $anchor_dld . $btn_o . $btn_dld . $div_c . $col_sm_6_o . $anchor_mdl . $btn_o . $btn_mdl . $div_c : 
                        $col_sm_6off_o . $anchor_mdl . $btn_o . $btn_mdl . $div_c 
                    ); 
                ?>
            </div>
        </div>
    </div>
    <!-- Product Intro Image -->
    <div class="vehicle-wrap wow fadeIn" data-wow-delay="500ms">

        <?php 
            echo (($introRand) ?
                sprintf($img, $introRand_img['url'], $introRand_img['alt']) . sprintf($randCite, $theTitle, $introRand_description ) : 
                sprintf($img, $introStatic['url'], $introStatic['alt']) . sprintf($staticCite, $theTitle)
            );
        ?>

    </div>
    <div class="productIntro-background hidden-sm wow fadeInRight"></div>
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
                    <h3 class="modal-title" id="myModalLabel">Message us about the <?php echo $theTitle; ?></h3>
                </div>
            </div>
            <div class="modal-body">                     
                <?php echo do_shortcode( '[contact-form-7 id="1754" title="Brochure Page - Form"]' ); ?>
            </div>
        </div>
    </div>
</div>
