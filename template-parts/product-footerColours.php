<div class="row" style="padding:3em 0;">
    <div class="col-sm-8">
        <div id="my-slider" class="carousel slide colour-carousel" data-ride="carousel" data-interval="false">

            <!-- Indicators dot nav -->
            <ol class="carousel-indicators colour-indicators">
                <?php $indicator=0;
                    while( have_rows('colour_slide') ): the_row();
                        $colourIndicator = get_sub_field( 'colour_indicator' );
                        if ($indicator == 0) {
                            echo '<li data-target="#my-slider" data-slide-to="0" class="active" style="background:'.$colourIndicator.'"></li>';
                        } else {
                            echo '<li data-target="#my-slider" data-slide-to="'.$indicator.'" style="background:'.$colourIndicator.'"></li>';
                        }
                    $indicator++;
                endwhile; ?>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner colour-section" role="listbox">

                <?php $slider = 0;
                    if( have_rows('colour_slide') ): 
                        while( have_rows( 'colour_slide' ) ): the_row(); 
                        $colourImage = get_sub_field( 'colour_image' );
                        $colourDescription = get_sub_field( 'colour_description' );
                    ?>
                        
                        <div class="item <?php if ($slider==0) { echo 'active';} ?>">
                            <img src="<?php echo $colourImage['url']; ?>" alt="<?php echo $colourImage['alt']; ?>">
                            <p style="padding-bottom:20px;"><?php echo $colourDescription; ?></p>
                        </div>
                    <?php $slider++;
                    endwhile; wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="txt-wrap colour">
            <h4 class="title">Standard Colours</h4>
            <p class="alt"  data-target="#my-slider" data-slide-to="<?php echo $indicator ?>"><?php the_field( 'colours_standard' ); ?></p>
        </div>
        <?php if(get_field('colours_premium1')): ?>
            <div class="txt-wrap colour">
                <h4 class="title">Premium 1 Colours</h4>
                <p class="alt"  data-target="#my-slider" data-slide-to="<?php echo $indicator ?>"><?php the_field( 'colours_premium1' ); ?></p>
            </div>
        <?php endif; ?>
        <?php if(get_field('colours_premium2')): ?>
            <div class="txt-wrap colour">
                <h4 class="title">Premium 2 Colours</h4>
                <p class="alt" data-slide-to="<?php echo $indicator ?>">
                    <?php the_field( 'colours_premium2' ); ?>
                </p>
            </div>
        <?php endif; ?>
        <?php if(get_field('colours_other')): ?>
            <div class="txt-wrap colour">
                <h4 class="title">Other Colours</h4>
                <p class="alt" data-slide-to="<?php echo $indicator ?>">
                    <?php the_field( 'colours_other' ); ?>
                </p>
            </div>
        <?php endif; ?>
    </div>
</div>