<div class="" style="padding:3em 0;">
    <div class="container">
        <div class="selector-header">
            <h4><?php echo the_title(); ?> Accessories List</h4>
        </div>
        <div class="row selections wow fadeIn" style="text-align:center;">
            <?php 
                $allAccessories = get_field( 'accessories_list' );
                foreach($allAccessories as $accessory):
                    setup_postdata( $accessory );    
                    $accessoryImg = get_the_post_thumbnail( $accessory->ID );
            ?>
            <div class="col-md-2 col-sm-4 vehicle-select" style="padding:1em 0;">
                <?php echo $accessoryImg ?>
                <p class="lead selection-title"><?php echo get_the_title($accessory->ID, 'v5gcuk_all_vehicles'); ?></p>
            </div>
            <?php 
                endforeach;
                wp_reset_postdata();    
            ?>
        </div>
        <div class="row">
            <div class="col-sm-12" style="text-align:center;">
                <p><small>Vehicle accessories may vary in style and colour from the images shown.</small></p>
            </div>
        </div>
    </div>
</div>

