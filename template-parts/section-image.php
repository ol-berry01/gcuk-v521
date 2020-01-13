<div class="img-section wow fadeInUp">
    <?php if( have_rows('image_block') ): ?>
        <?php while( have_rows('image_block') ): the_row(); ?>
            <?php 
                $imageBlock     = get_sub_field( 'image_image' );
                $imageHeader    = get_sub_field( 'image_header' );
                $imageContent   = get_sub_field( 'image_content' );
                $imageLabel     = get_sub_field( 'image_button' );
                $imageLink      = get_sub_field( 'image_link' );
                $imageColour    = get_sub_field( 'image_colour' );
            ?>
            <div class="img-block">
                <div class="img-wrap wow fadeInUp" style="background-image:url(<?php echo $imageBlock; ?>);"></div>
                    <div class="txt-wrap wow fadeInUp" style="<?php if($imageColour) : ?> background-color:<?php echo $imageColour; endif; ?>">
                        <h2 class="image-text-title wow fadeInUp"><?php echo $imageHeader; ?></h2>
                        <p class="wow fadeInUp" data-wow-delay="300ms"><?php echo $imageContent; ?></p>
                        <?php if($imageLink) :?>
                            <a href="<?php echo $imageLink; ?>" class="read-more wow fadeInUp" data-wow-delay="700ms">
                                <?php echo $imageLabel; ?> <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>