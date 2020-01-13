<div id="welcome-section" class="welcome-section">
    <div class="welcome-wrap wow fadeInLeft" data-wow-delay="600ms">
        <h1><?php the_sub_field('welcome_title'); ?></h1>
        <p class="lead"><?php the_sub_field('welcome_subtitle'); ?></p>
        <p><?php the_sub_field('welcome_content'); ?></p>
        <div class="row brands">
            <?php if( have_rows('welcome_brands') ): ?>
                <?php 
                    while( have_rows( 'welcome_brands' ) ): the_row(); 
                    $brandLogo = get_sub_field( 'brand_logo' );
                ?>
                    <div class="col-sm-3 col-xs-6">
                        <a href="<?php the_sub_field('brand_link'); ?>" target="_blank">
                            <img src="<?php echo $brandLogo['url']; ?>" alt="<?php echo $brandLogo['alt']; ?>">
                            <p class="welcome-cite"><?php echo $brandLogo['cap'] ?></p>
                        </a>
                    </div>
                <?php
                    wp_reset_postdata();
                    endwhile; 
                ?>
            <?php endif; ?>
        </div>
        <div class="welcome-cite-wrap">
            <p class="welcome-cite"><?php the_sub_field('welcome_cite'); ?></p>
        </div>
    </div>
    <div class="vehicle-wrap wow fadeIn" data-wow-delay="100ms">
        <?php
            $vehicleSelect = new WP_Query(array(
                'posts_per_page' 	=> 1,
                'post_type' 		=> 'vehicle',
                'orderby'			=> 'rand'
            ));
            while($vehicleSelect->have_posts()) {
                $vehicleSelect->the_post();
                $vehicleImage = get_field( 'productIntro_image' ); 
            ?>
                <img class="welcome-vehicle wow fadeIn" src="<?php echo $vehicleImage['url'] ?>" alt="<?php echo $vehicleImage['alt'] ?>" />
                <div style="text-align:center;">
                    <p class="welcome-cite"><?php echo $vehicleImage['caption'] ?></p>
                </div>
        <?php } wp_reset_postdata(); ?>
        
    </div>
    <div class="welcome-background hidden-sm wow fadeInRight"></div>
</div><!-- welcome-section -->