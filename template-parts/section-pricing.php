<?php
$v5gcuk_enable_section = get_theme_mod( 'v5gcuk_pricing_enable', true );
if ( $v5gcuk_enable_section || is_customize_preview() ) :
?>
<div id="pricing-section" class="pricing-section" <?php if( false == $v5gcuk_enable_section ): echo 'style="display: none;"'; endif ?>>
    <h2 class="section-title wow fadeIn"><?php echo esc_html( get_theme_mod( 'v5gcuk_pricing_title', __( 'Pricing', 'v5gcuk' ) ) ); ?></h2>

    <div class="cd-pricing-container cd-has-margins">

        <ul class="cd-pricing-list">

            <?php
            if ( is_active_sidebar( 'pricing-section' ) ){

                dynamic_sidebar( 'pricing-section' );

            }else{
                $widget_instance = array(
                    'title' => esc_html__( 'Basic', 'v5gcuk' ),
                    'currency' => esc_html__( '$', 'v5gcuk' ), 
                    'price' => esc_html__( '15', 'v5gcuk' ),
                    'duration' => esc_html_x( 'mo', 'Month abbreviation', 'v5gcuk' ),
                    'features' => sprintf( __( '<em>256MB</em> Memory%s<em>1</em> User%s<em>1</em> Website%s<em>1</em> Domain%s<em>Unlimited</em> Bandwidth%s<em>24/7</em> Support', 'v5gcuk' ), PHP_EOL, PHP_EOL, PHP_EOL, PHP_EOL, PHP_EOL ),
                    'link_title' => 'Select',
                    'link' => '#',
                    'featured' => 'false'
                    );
                the_widget( 'v5gcuk_Pricing', $widget_instance, array( 'before_widget' => '', 'after_widget' => '' ) );

                $widget_instance = array(
                    'title' => esc_html__( 'Popular', 'v5gcuk' ),
                    'currency' => esc_html__( '$', 'v5gcuk' ), 
                    'price' => esc_html__( '25', 'v5gcuk' ),
                    'duration' => esc_html_x( 'mo', 'Month abbreviation', 'v5gcuk' ),
                    'features' => sprintf( __( '<em>512MB</em> Memory%s<em>3</em> User%s<em>5</em> Website%s<em>7</em> Domain%s<em>Unlimited</em> Bandwidth%s<em>24/7</em> Support', 'v5gcuk' ), PHP_EOL, PHP_EOL, PHP_EOL, PHP_EOL, PHP_EOL ),
                    'link_title' => 'Select',
                    'link' => '#',
                    'featured' => 'true'
                    );
                the_widget( 'v5gcuk_Pricing', $widget_instance, array( 'before_widget' => '', 'after_widget' => '' ) );

                $widget_instance = array(
                    'title' => esc_html__( 'Premier', 'v5gcuk' ),
                    'currency' => esc_html__( '$', 'v5gcuk' ), 
                    'price' => esc_html__( '35', 'v5gcuk' ),
                    'duration' => esc_html_x( 'mo', 'Month abbreviation', 'v5gcuk' ),
                    'features' => sprintf( __( '<em>1024MB</em> Memory%s<em>5</em> User%s<em>10</em> Website%s<em>10</em> Domain%s<em>Unlimited</em> Bandwidth%s<em>24/7</em> Support', 'v5gcuk' ), PHP_EOL, PHP_EOL, PHP_EOL, PHP_EOL, PHP_EOL ),
                    'link_title' => 'Select',
                    'link' => '#',
                    'featured' => 'false'
                    );
                the_widget( 'v5gcuk_Pricing', $widget_instance, array( 'before_widget' => '', 'after_widget' => '' ) );
            }
            ?>
            
        </ul> <!-- .cd-pricing-list -->
    </div> <!-- .cd-pricing-container -->

</div><!-- pricing-section -->
<?php endif ?>