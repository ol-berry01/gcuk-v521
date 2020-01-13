<?php
/**
 * Template part for displaying vehicle posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package v5gcuk
 */
 $vehicleType       = get_field( 'vehicle_type' );
 $vehicleCapacity   = get_field( 'vehicle_capacity' );
 $vehicleFeatures   = get_field( 'vehicle_features' );
?>
<div id="post-<?php the_ID(); ?>" class="vehicle-archive col-md-3 col-sm-6 col-xs-12 gc-shadow <?php echo implode(' ', $vehicleType); ?>" >
    <a href="<?php the_permalink(); ?>"><div class="img-wrap" style="background-image:url('<?php the_post_thumbnail_url('v5gcuk_all_vehicles'); ?>')"></div></a>
    <div class="txt-wrap">
        <?php the_title( sprintf( '<p class="post-title gc-gold"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></p>' ); ?>
        <p>Vehicle Type: <span class="alt"><?php echo implode(', ', $vehicleType); ?></span></p>
        <p>Capacity: <span class="alt"><?php echo implode(', ', $vehicleCapacity); ?></span></p>
        <p>Standard features: <span class="alt"><?php echo implode(', ', $vehicleFeatures); ?></span></p>
        <div >
            <a href="<?php the_permalink(); ?>" class="read-more">Learn More <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
    <?php wp_reset_postdata(); ?>
</div>
