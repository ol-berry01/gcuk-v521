<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package v5gcuk
 */

get_header(); ?>
	
    <div id="main" class="site-main">
        <?php while ( have_posts() ) : the_post();
            $personPic      = get_field('personnel_photo');
            $personBio      = get_field('personnel_bio');
            $personRole     = get_field('personnel_role');
            $personFacebook = get_field('personnel_facebook_link');
            $personTwitter  = get_field('personnel_twitter_link');
            $personLinkedin = get_field('personnel_linkedin_link');
            $personEmail    = get_field('personnel_email_link');
        ?>

        <div class="img-section wow fadeInUp">
                <?php //while( have_rows('image_block') ): the_row(); ?>
                    <div class="img-block" style="height:600px;">
                        <div class="img-wrap wow fadeInUp" style="background-image:url(<?php echo $personPic['url']; ?>);height:600px;"></div>
                            <div class="txt-wrap wow fadeInUp" style="<?php if($imageColour) : ?> background-color:<?php echo $imageColour; endif; ?>">
                                <h1 class="image-text-title wow fadeInUp"><?php echo the_title(); ?></h1>
                                <p class="lead"><?php echo $personRole; ?></p>
                                <p class="wow fadeInUp" data-wow-delay="300ms"><?php echo $personBio; ?></p>
                                <div class="row" style="padding:5% 0;text-align:center;">
                                    <div class="col-sm-3">
                                        <a href="<?php echo $personFacebook; ?>">
                                            <h2 class="gc-alt-blue"><i class="fa fa-facebook-official"></i></h2>
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="<?php echo $personTwitter; ?>">
                                            <h2 class="gc-alt-blue"><i class="fa fa-twitter-square"></i></h2>
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="<?php echo $personLinkedin; ?>">
                                            <h2 class="gc-alt-blue"><i class="fa fa-linkedin-square"></i></h2>
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="<?php echo $personEmail; ?>">
                                            <h2 class="gc-alt-blue"><i class="fa fa-envelope"></i></h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php //endwhile; ?>
            <?php //endif; ?>
        </div>
            <?php

        endwhile;?>
    </div>

<?php get_footer(); ?>