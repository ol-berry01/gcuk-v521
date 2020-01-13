<section id="services-section" class="services-section">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2 class=""><?php the_sub_field('service_optitle'); ?></h2>
                <p class="lead"><?php the_sub_field('service_opstitle'); ?></p>
            </div>
            <?php if( have_rows('service_roption') ): ?>
                <?php while( have_rows('service_roption') ): the_row(); ?>
                    <div class="col-md-4 rental-option wow fadeInUp">
                        <div class="option-wrap gc-shadow">
                            <div class="option-img-wrap">
                                <img src="<?php the_sub_field('roption_image'); ?>">
                            </div>
                            <h3><?php the_sub_field('roption_title'); ?></h3>
                            <p class="lead"><?php the_sub_field('roption_stitle'); ?></p>

                            <div class="nav-text-wrapper">
                                <?php if ( get_sub_field('roption_toggle') ): ?>
                                    <h3><small>from</small> £<?php the_sub_field('roption_long'); ?></h3>
                                    <small>per week + vat</small>
                                <?php else: ?>
                                    <?php if( have_rows('roption_short') ): ?>
                                        <?php while( have_rows('roption_short') ): the_row(); ?>
                                            <div class="col-xs-4 roption-price-wrap">
                                                <p class="lead" style="text-align:center"><?php the_sub_field('rshort_length'); ?></p>
                                                <h3 style="text-align:center">£<?php the_sub_field('rshort_price'); ?></h3>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <!-- Long term features -->
                                <div>
                                    <ul style="list-style:none">
                                        <li>– Electric &amp; Petrol Models Available</li>
                                        <li>– Flexible Terms Available</li>
                                        <li>– Tailored Payment Solutions</li>
                                    </ul>
                                </div>
                                <!-- End: Long term features -->
                            </div>

                            <a class="option-link" href="<?php the_sub_field('roption_link'); ?>">
                                <button class="read-more"><?php the_sub_field('roption_label'); ?> <i class="fa fa-angle-right" aria-hidden="true"></i></button> 
                            </a>
                            
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="" style="margin:0.5em 0 1em;text-align:center;">
            <small style="text-align:center;">Prices Shown Are Daily Rates. Excluding, Delivery, Collection &amp; VAT</small>
        </div>
    </div>
</section>