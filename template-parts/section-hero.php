<div id="slider-section" class="slider-section">
    <img src="<?php 
        if (has_post_thumbnail()) {
            the_post_thumbnail_url(); }
        else {
            the_sub_field( 'hero_image' );
        };
    ?>" alt="">
    <div class="slider-intro">
        <?php 
            if (has_post_thumbnail()) { ?>
                <h1 class="welcome-line intro-line" style="color:#fff;"><?php echo the_title(); ?></h1>
                <p class="lead" style="color:#fff;font-weight:400;"><?php the_field( 'heroImage_subtitle' ); ?></p>
        <?php } else { ?>
            <h1 class="welcome-line intro-line" style="color:#fff;"><?php the_sub_field( 'hero_headline' ); ?></h1>
            <p class="lead" style="color:#fff;font-weight:400;"><?php the_sub_field( 'hero_content' ); ?></p>
            <?php if( have_rows('slider_button') ): ?>
                <?php while( have_rows( 'hero_button' ) ): the_row(); ?>
                    <a href="<?php the_sub_field( 'herorButton_link' ); ?>" class="btn-ql"><?php the_sub_field( 'heroButton_label' ); ?></a>
				<?php endwhile; ?>
            <?php endif; ?>
        <?php } ?>      
    </div><!-- slider-intro -->
</div><!-- slider-section -->

