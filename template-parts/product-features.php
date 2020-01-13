<?php // if(get_field('product_features')) : ?>
    <div id="features-section"class="product-section">
        <div class="container">
            <h2 class="section-title"><?php the_title(); ?> Features</h2>
            
            <div class="your-class">
            
                <?php if( have_rows('product_feature') ): ?>
                    <?php while( have_rows( 'product_feature' ) ): the_row(); ?>
                        <div class="product-feature gc-shadow">
                            <div class="img-wrap" style="background-image:url('<?php the_sub_field( 'feature_image' ); ?>');"></div>
                            <div class="txt-wrap">
                                <h4><?php the_sub_field( 'feature_title' ); ?></h4>
                                <p><?php the_sub_field( 'feature_content' ); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <script>

                jQuery(document).ready(function($){
                    $('.your-class').slick({
                        arrows:true,
                        centerMode: true,
                        centerPadding: '25px',
                        slidesToShow: 3,
                        responsive: [
                            {
                                breakpoint: 768,
                                settings: {
                                    arrows: false,
                                    centerMode: true,
                                    centerPadding: '10px',
                                    slidesToShow: 3
                                }
                            },
                            {
                                breakpoint: 480,
                                settings: {
                                    arrows: false,
                                    centerMode: true,
                                    centerPadding: '25px',
                                    slidesToShow: 1
                                }
                            }
                        ]
                    });
                });
            </script>
        </div><!-- container -->
    </div><!-- services-section -->
<?php // endif; ?>

