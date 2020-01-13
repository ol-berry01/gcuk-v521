<div class="vehicle-selector">
    <div class="container">
        <div class="selector-header">
            <h2>A <?php echo the_title(); ?> Can Be Fitted To</h2>
            <p class="lead" style="text-transform:lower-case;">The <span style="text-transform:lowercase;"><?php echo the_title(); ?></span> replaces what is on the rear of the following vehicles</p>
        </div>
        <div class="row selections wow fadeIn" style="text-align:center;">
            <?php 
                $relatedVehicles = get_field( 'custom_related' );
                foreach($relatedVehicles as $relatedVehicle):
                    setup_postdata( $relatedVehicle );    
                    $relatedImage = get_field( 'productIntro_image', $relatedVehicle->ID );
            ?>
                <a href="<?php echo get_the_permalink($relatedVehicle->ID);?>" target="_blank">
                    <div class="col-sm-2 col-cs-6 vehicle-select wow fadeIn" style="display:inline-block;float:none;">
                        <img src="<?php echo $relatedImage['url']; ?>" alt="<?php echo $relatedImage['alt']; ?>">
                        <p class="selection-title"><?php echo get_the_title($relatedVehicle->ID); ?></p>
                    </div>
                </a>
            <?php 
                endforeach;
                wp_reset_postdata();    
            ?>
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

