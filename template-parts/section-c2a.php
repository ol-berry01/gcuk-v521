<div id="welcome-section" class="welcome-section">
    <div class="welcome-wrap wow fadeInLeft" data-wow-delay="600ms">
        <h1>title</h1>
        <p class="lead">subtitle></p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias sequi soluta blanditiis mollitia nemo, reiciendis quasi culpa impedit aliquid voluptas facere, magnam pariatur laudantium accusantium? Ad iure asperiores hic? Iste.</p>
        <div style="padding:2em 0;text-align:center;">
            <a class="read-more" data-toggle="modal" data-target="#brochureEnquiry">Read More</a>
        </div>
    </div>
    <div class="vehicle-wrap wow fadeIn" data-wow-delay="500ms">
        <?php
            $vehicleSelect = new WP_Query(array(
                'posts_per_page' 	=> 1,
                'post_type' 		=> 'vehicle',
                'orderby'			=> 'rand'
            ));
            while($vehicleSelect->have_posts()) {
                $vehicleSelect->the_post();?>
                <img class="welcome-vehicle" src="" alt="" />
                <div style="text-align:center;">
                    <p class="welcome-cite">caption</p>
                </div>
        <?php } wp_reset_postdata(); ?>
    </div>
    <div class="welcome-background hidden-xs wow fadeInRight"></div>
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
                    <h3 class="modal-title" id="myModalLabel">Message us about the <?php echo the_title(); ?></h3>
                </div>
            </div>
            <div class="modal-body">                     
                <?php echo do_shortcode( '[contact-form-7 id="1754" title="Brochure Page - Form"]' ); ?>
            </div>
        </div>
    </div>
</div>
<!-- End: Enquiry Modal -->