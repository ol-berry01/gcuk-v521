<?php 
    // check if the flexible content field has rows of data
        if( have_rows('builder_sections') ):
        
            // loop through the rows of data
            while ( have_rows('builder_sections') ) : the_row();
            
                // Front Page Spcific Items
                    // Welcome Layout                    
                    if( get_row_layout() == 'welcome_layout' ): ?>
                        <?php get_template_part( 'template-parts/section-welcome', 'builder' )?>
                    
                    <!-- Services Navigation Layout -->
                    <?php elseif( get_row_layout() == 'services_layout'): ?>
                        <?php get_template_part( 'template-parts/section-services', 'builder'); ?>

                    <!-- Image Section Layout -->
                    <?php elseif( get_row_layout() == 'image_layout'): ?>
                        <?php get_template_part( 'template-parts/section-image', 'builder'); ?>

                    <!-- Parallax Page Break Layout -->
                    <?php elseif( get_row_layout() == 'page_break'): ?>
                        <?php get_template_part( 'template-parts/section-parallax', 'builder'); ?>

                    <!-- Static Slider Layout -->
                    <?php elseif( get_row_layout() == 'hero_layout'): ?>
                        <?php get_template_part( 'template-parts/section-hero', 'builder'); ?>

                    <!-- Carousel Layout -->
                    <?php elseif( get_row_layout() == 'carousel_layout'): ?>
                        <?php get_template_part( 'template-parts/section-carousel', 'builder'); ?>

                    <!-- Testimonials Layout -->
                    <?php elseif( get_row_layout() == 'testimonials_layout'): ?>
                        <?php get_template_part( 'template-parts/section-testimonials', 'builder'); ?>

                    <!-- Vehicle Selector Layout -->
                    <?php elseif( get_row_layout() == 'select_layout'): ?>
                        <?php get_template_part( 'template-parts/section-vehicleSelect', 'builder'); ?>

                    <!-- Personnel Carousel Layout -->
                    <?php elseif( get_row_layout() == 'personnel_layout'): ?>
                        <?php get_template_part( 'template-parts/section-personnel', 'builder'); ?>
                
                <!-- Services Brochure Sections -->
                    <!-- Services Intro Layout -->
                    <?php elseif( get_row_layout() == 'services_intro_layout'): ?>
                        <?php get_template_part( 'template-parts/section-servicesIntro', 'builder'); ?>

                    <?php elseif( get_row_layout() == 'services_rentalTable_layout'): ?>
                        <?php get_template_part( 'template-parts/section-services-rentalPackages', 'builder'); ?>

                    <?php elseif( get_row_layout() == 'services_options_layout'): ?>
                        <?php get_template_part( 'template-parts/section-service-rentalOp', 'builder' ); ?>

                    <?php elseif( get_row_layout() == 'cover_options_layout'): ?>
                        <?php get_template_part( 'template-parts/section-service-cover', 'builder' ); ?>

                <!-- Product Brochure Sections -->
                    <!-- Product Intro Layout -->
                    <?php elseif( get_row_layout() == 'productIntro_layout'): ?>
                        <?php get_template_part( 'template-parts/product-intro', 'builder'); ?>
                    
                    <!-- Product Features Layout -->
                    <?php elseif( get_row_layout() == 'productFeatures_layout'): ?>
                        <?php get_template_part( 'template-parts/product-features', 'builder'); ?>

                    <!-- Product Specs Layout -->
                    <?php elseif( get_row_layout() == 'productFooter_layout'): ?>
                        <?php get_template_part( 'template-parts/product-footer', 'builder'); ?>
                    
                <!-- General Sections -->

                    <!-- General Layout -->
                    <?php elseif( get_row_layout() == 'general_layout'): ?>
                        <?php get_template_part( 'template-parts/section-general', 'builder'); ?>

                    <!-- Contact Layout -->
                    <?php elseif( get_row_layout() == 'contact_layout'): ?>
                        <?php get_template_part( 'template-parts/section-contact', 'builder'); ?>

                    <!-- Blog Layout -->
                    <?php elseif( get_row_layout() == 'blog_layout'): ?>
                        <?php get_template_part( 'template-parts/section-blog', 'front-page'); ?>

            <?php endif; ?>
    
        <?php endwhile; ?>
    
<?php endif; ?>