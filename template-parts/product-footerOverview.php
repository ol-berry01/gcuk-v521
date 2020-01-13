<?php
    $overviewSide   = get_field( 'overview_sideProfile' );
    $overviewFront  = get_field( 'overview_frontProfile' );
?>
<div class="row" style="padding:3em 0;">
    <div class="col-sm-6">
        <div class="row overview-img-wrap" style="text-align:center;">
            <div class="col-sm-6">
                <img src="<?php echo $overviewSide['url']; ?>" alt="<?php echo $overviewSide['alt'] ?>">
            </div>
            <div class="col-sm-6">
                <img src="<?php echo $overviewFront['url']; ?>" alt="<?php echo $overviewFront['alt'] ?>">
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="overview-text-wrap">
            <h4 style="margin-bottom:2.5%;">Standard Features</h4>
            <ul style="list-style:none;padding-left:0;">
                <?php if( have_rows('overview_list') ): ?>
                    <?php while( have_rows('overview_list') ): the_row(); ?>
                        <li><?php the_sub_field('overview_item'); ?></li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>