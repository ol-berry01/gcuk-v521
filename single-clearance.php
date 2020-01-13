<?php get_header(); ?>

    <style>
        .clearance-info-wrap {
            padding:0 5rem 0 7em;
            text-align:left;
        }
        .clearance-info-wrap ul {
            padding-left:0;
            list-style:none;
            font-weight:bold;
            text-transform:capitalize;
        }
        .clearance-info-wrap ul li {
            margin-top:5px;
            padding-top:5px;
            border-top:1px solid #c4c4c4;
        }
        .clearance-info-wrap ul li:first-child {
            border-top:none;
        }
        .clearance-info-wrap ul li:last-child {
            margin-top:20px;
            border-top:none;
            text-align:center;
        }
        .clearance-info-wrap .alt {
            font-weight:400;
            opacity:0.7;
            float:right;
        }
    </style>

    <main id="main" class="main">
        <?php while 
            ( have_posts() ) : 
            the_post();
            
            get_template_part( 'template-parts/section-hero' );
            
            // Intro Section
            $vehicleTitle                   = get_the_title();
            $vehicleSN                      = get_field( 'vehicle_serial');
            $vehicleYear                    = get_field( 'vehicle_year' );
            $vehiclePower                   = get_field( 'vehicle_power' );
            $vehicleColour                  = get_field( 'colours_standard' );
            $vehicleNotes                   = get_field( 'vehicle_notes' );
            $vehiclePrice                   = get_field( 'vehicle_price' );

            $col_sm_6_o                     = '<div class="col-sm-6">';
            $col_sm_6off_o                  = '<div class="col-sm-6 col-sm-offset-3">';
            $div_c                          = '</button></a></div>';
            $btn_o                          = '<button class="btn btn-details gc-shadow">';
            $anchor_mdl                     = '<a role="button" data-toggle="modal" data-target="#brochureEnquiry">';
            $btn_mdl                        = '<i class="fa fa-envelope" aria-hidden="true"></i> Make An Enquiry';
            $li_o                           = '<li>';
            $span                           = '<span class="%s">&pound;%s</span>'; 
            $span_alt                       = '<span class="alt">';
            $li_c                           = '</span></li>';

        ?>
        <div id="welcome-section" class="welcome-section">
            <!-- Clearance Intro Description-->
            <div class="welcome-wrap wow fadeInLeft" data-wow-delay="600ms" style="">
                <?php yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); ?>
                <div>
                    <h1><?php the_field( 'productIntro_title' ); ?></h1>
                    <p class="lead"><?php the_field( 'productIntro_subtitle' ); ?></p>
                </div>
                <p><?php the_field( 'productIntro_content' ); ?></p>
                <div class="row buttons-cta">
                    <div class="row">
                        <?php 
                            echo $col_sm_6off_o . $anchor_mdl . $btn_o . $btn_mdl . $div_c;
                        ?>
                    </div>
                </div>
            </div>
            <!-- Clearance Intro  -->
            <div class="vehicle-wrap wow fadeIn" data-wow-delay="500ms">
                <h3>Vehicle Information</h3>
                <div class="clearance-info-wrap">
                    <ul>
                        <?php 
                            echo 
                                $li_o . 'Make / Model: ' . $span_alt . $vehicleTitle . $li_c .
                                $li_o . 'Serial Number: ' . $span_alt . $vehicleSN . $li_c .
                                $li_o . 'Power: ' . $span_alt . implode($vehiclePower) . $li_c .
                                $li_o . 'Year: ' . $span_alt . implode($vehicleYear) . $li_c .
                                $li_o . 'Colour: ' . $span_alt . implode($vehicleColour) . $li_c . 
                                (($vehicleNotes) ? $li_o . 'Notes: ' .  $span_alt . $vehicleNotes . $li_c : "") .
                                $li_o . sprintf($span, 'lead', $vehiclePrice) . ' ex VAT' . $li_c
                            ;
                        ?>
                    </ul>
                </div>
                
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
                            <h3 class="modal-title" id="myModalLabel">Message us about the Clearance <?php echo $vehicleTitle . ' - ' . $vehicleSN; ?></h3>
                        </div>
                    </div>
                    <div class="modal-body">                     
                        <?php echo do_shortcode( '[contact-form-7 id="1754" title="Brochure Page - Form"]' ); ?>
                    </div>
                </div>
            </div>
        </div>


        
        <?php if( have_rows('clearance_gallery') ): ?>
            <div id="features-section"class="product-section">
                <div class="container">
                    <h2 class="section-title">Clearance <?php the_title(); ?> Gallery</h2>
                    <div class="your-class">
                        <?php while( have_rows( 'clearance_gallery' ) ): the_row(); ?>
                            <div class="product-feature gc-shadow">
                                <div class="img-wrap" style="background-image:url('<?php the_sub_field( 'clearance_image' ); ?>');"></div>
                                <div class="txt-wrap">
                                    <p><?php the_sub_field( 'clearance_description' ); ?></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div><!-- container -->
            </div><!-- services-section -->
        <?php 
            endif; 
            get_template_part( 'template-parts/product-footer' );
            endwhile;
        ?>
    </main>

<?php get_footer(); ?>
<script>
    jQuery(document).ready(function($){
        $('.your-class').slick({
            arrows:true,
            centerMode: true,
            centerPadding: '25px',
            slidesToShow: 3,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '10px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '25px',
                        slidesToShow: 1
                    }
                }
            ]
        });
    });
</script>