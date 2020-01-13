<?php
    $testimonial_image  = get_template_directory_uri() . '/images/grass.jpg';
?>
<div id="testimonials-section" class="testimonials-section" style="background-image: url(<?php echo $testimonial_image; ?>);">
    <div class="testimonials-wrap js-flickity wow fadeIn" data-flickity-options='{ "cellAlign": "center", "contain": true, "prevNextButtons": false, "pageDots": true, "autoPlay": 7500 }'>
    	<?php
        $args = array(
            'posts_per_page'    => -1,
            'post_type'         => 'testimonials'
        );
        $testimonials = new WP_Query( $args );
        if ( $testimonials->have_posts() ) {
            while ( $testimonials->have_posts() ) {
                $testimonials->the_post(); 
            ?>
                <div class="testimonial">
                    <blockquote cite="">
                        <div class="row">
                            <div class="col-sm-3 testimonial-logo">
                                <img src="<?php the_field('testimonial_logo'); ?>">
                            </div>
                            <div class="col-sm-9 testimonial-content">
                                <?php the_field('testimonial_content');?>
                            </div>
                        </div>
                        </blockquote>
                    <p class="testimonial-cite"> <?php the_field('testimonial_customer');?><br>
                    <small><?php the_title();?></small></p>
                </div>
            <?php }
        } 
        wp_reset_postdata();
        ?>
    </div>
</div>