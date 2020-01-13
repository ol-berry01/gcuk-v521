
<div class="vehicle-selector">
    <div class="container">
        <div class="selector-header">
            <h2><?php the_sub_field( 'selector_title' ); ?></h2>
            <p class="lead"><?php the_sub_field( 'selector_content' ); ?></p>
        </div>
        <div class="selections wow fadeIn" style="height:auto;">
            <?php
                $vehicleSelect = new WP_Query(array(
                    'posts_per_page' 	=> 6,
                    'post_type' 		=> 'vehicle',
                    'orderby'			=> 'rand'
                ));
                while($vehicleSelect->have_posts()) {
                    $vehicleSelect->the_post();
                    $vehicle = get_field( 'productIntro_image' ); ?>
                    <a href="<?php the_permalink(); ?>">
                        <div class="col-sm-2 col-xs-6 vehicle-select wow fadeIn" style="text-align:center;">
                            <img src="<?php echo $vehicle['sizes']['v5gcuk_vehicle_select'] ?>" alt="<?php echo $vehicle['alt'] ?>">
                            <p class="selection-title"><?php the_title(); ?></p>
                        </div>
                    </a>
            <?php } wp_reset_postdata(); ?>     
        </div>
        <div class="selector-cta">
            <?php if( have_rows('selector_buttons') ): ?>
                <?php while( have_rows('selector_buttons') ): the_row(); ?>
                    <a href="<?php the_sub_field('selector_buttonLink') ?>" class="read-more gc-shadow"><?php the_sub_field('selector_buttonLabel'); ?> <i class="fa fa-angle-right"></i></a>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        
    </div>
</div>

