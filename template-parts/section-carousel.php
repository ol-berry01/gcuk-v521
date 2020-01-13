<div id="my-slider" class="carousel slide" data-ride="carousel" data-interval="8000">

    <!-- Indicators dot nav -->
    <ol class="carousel-indicators">
        <?php $indicator=0;
            while( have_rows('carousel_slide') ): the_row();
                if ($indicator == 0) {
                    echo '<li data-target="#my-slider" data-slide-to="0" class="active"></li>';
                } else {
                    echo '<li data-target="#my-slider" data-slide-to="'.$indicator.'"></li>';
                }
            $indicator++;
        endwhile; ?>
    </ol>

    <!-- Wrapper for slides -->

    <div class="carousel-inner slider-section" role="listbox">

        <?php $slider = 0;
            if( have_rows('carousel_slide') ): ?>
                <?php 
                    while( have_rows( 'carousel_slide' ) ): the_row(); 
                    $carouselImage = get_sub_field( 'carousel_image' );    
                ?>
                
                <div class="item <?php if ($slider==0) { echo 'active';} ?>">
                    <img src="<?php echo $carouselImage['url']; ?>" alt="<?php echo $carouselImage['alt']; ?>" class="carousel-image">
                    <div class="slider-intro">
                        
                        <h1 class="welcome-line intro-line" style="color:#fff;"><?php the_sub_field( 'carousel_title' ); ?></h1>
                        <p class="lead" style="color:#fff;font-weight:400;"><?php the_sub_field( 'carousel_subtitle' ); ?></p>
                        
                        <?php if( have_rows('carousel_button') ): ?>
                            <?php while( have_rows( 'carousel_button' ) ): the_row(); ?>
                                <a href="<?php the_sub_field( 'button_link' ); ?>" class="btn-ql"><?php the_sub_field( 'button_label' ); ?></a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div><!-- slider-intro -->
                </div>

            <?php $slider++;
            endwhile; wp_reset_postdata(); ?>
        <?php endif; ?>
    
    </div>

    <!-- Slide Navigation -->
    <a class="left carousel-control" href="#my-slider" role="button" data-slide="prev">
        <i class="fa fa-chevron-left" aria-hidden="true"></i>
    </a>
    <a class="right carousel-control" href="#my-slider" button="button" data-slide="next">
        <i class="fa fa-chevron-right" aria-hidden="true"></i>
    </a>

</div>