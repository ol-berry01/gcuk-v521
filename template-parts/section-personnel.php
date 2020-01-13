<div id="personnel-section"class="personnel-section">
    <div class="container">
        <h2>Key Members of Staff</h2>
        <div class="personnel-wrap">
            <?php
                $vehiclesArchive = new WP_Query(array(
                    'posts_per_page' 	=> -1,
                    'post_type' 		=> 'personnel',
                    'orderby'			=> 'publish_date',
                    'order'				=> 'ASC'
                ));
                while($vehiclesArchive->have_posts()) {
                    $vehiclesArchive->the_post();
                    $personPic      = get_field('personnel_photo');
                    $personBio      = get_field('personnel_bio');
                    $personRole     = get_field('personnel_role');
                    $personFacebook = get_field('personnel_facebook_link');
                    $personTwitter  = get_field('personnel_twitter_link');
                    $personLinkedin = get_field('personnel_linkedin_link');
                    $personEmail    = get_field('personnel_email_link');    
                ?>
                        <div class="person-wrap">
                            <div class="person-txt">
                                <?php if($personPic) { ?>
                                    <img src="<?php echo $personPic['url']; ?>" alt="" class="person-img gc-shadow">
                                <?php }; ?>
                                <h2><?php echo the_title(); ?></h2>
                                <p class="lead"><?php echo $personRole; ?></p>
                                <div class="row" style="margin:0;">
                                    <h3>
                                        <?php if($personFacebook) { ?>
                                            <a href="<?php echo $personFacebook; ?>" target="_blank" class="gc-alt-blue"><i class="fa fa-facebook-official"></i></a>
                                        <?php }; if($personTwitter) { ?>
                                            <a href="<?php echo $personTwitter; ?>" target="_blank" class="gc-alt-blue"><i class="fa fa-twitter-square"></i></a>
                                        <?php }; if($personLinkedin) { ?>
                                            <a href="<?php echo $personLinkedin; ?>" target="_blank" class="gc-alt-blue"><i class="fa fa-linkedin-square"></i></a>
                                        <?php }; ?>
                                        <a href="mailto:<?php echo $personEmail; ?>" class="gc-alt-blue"><i class="fa fa-envelope"></i></a>
                                    </h3>
                            </div>
                        </div>
                        <div class="person-bio">
                            <p><?php echo $personBio; ?></p>
                        </div>
                    </div>      
                <?php } wp_reset_postdata();?>
        </div>
        <script>

            jQuery(document).ready(function($){
                $('.personnel-wrap').slick({
                    arrows:true,
                    centerMode: true,
                    centerPadding: '10px',
                    slidesToShow: 2.7,
                    responsive: [
                        {
                            breakpoint: 768,
                            settings: {
                                arrows: false,
                                centerMode: true,
                                centerPadding: '10px',
                                slidesToShow: 1
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                arrows: true,
                                centerMode: true,
                                centerPadding: '20px',
                                slidesToShow: 1
                            }
                        }
                    ]
                });
            });
        </script>
    </div><!-- container -->
</div><!-- services-section -->


