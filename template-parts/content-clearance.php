<?php
/**
 * Template part for displaying clearance vehicle posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package v5gcuk
 */
$vehicleType        = get_field( 'vehicle_type' );
$vehicleFeatures    = get_field( 'vehicle_features' );
$vehicleSerial      = get_field( 'vehicle_serial' );
$vehicleYear        = get_field( 'vehicle_year' );
$vehiclePrice       = get_field( 'vehicle_price' );
?>
<style>
    .vehicle-archive {
        width:31.5%;
    }

</style>
<div id="post-<?php the_ID(); ?>" class="vehicle-archive col-md-3 col-sm-6 col-xs-12 gc-shadow <?php echo implode(' ', $vehicleType); ?>">
    <a href="<?php the_permalink(); ?>"><div class="img-wrap" style="background-image:url('<?php the_post_thumbnail_url('v5gcuk_all_vehicles'); ?>');height:200px;"></div></a>
    <div class="txt-wrap">
        <?php the_title( sprintf( '<p class="post-title gc-gold"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></p>' ); ?>
        <p>S/N: <span class="alt"><?php echo $vehicleSerial; ?></span></p>
        <p>Production year: <span class="alt"><?php echo implode($vehicleYear); ?></span> </p>
        <p>Features: <span class="alt"><?php echo implode(', ', $vehicleFeatures); ?></span></p>
        <p><span class="lead">&pound;<?php echo $vehiclePrice; ?></span> ex VAT</p>
        <?php  ?>
        <div >
            <a href="<?php the_permalink(); ?>" class="read-more">Learn More <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
    <?php wp_reset_postdata(); ?>
</div>
