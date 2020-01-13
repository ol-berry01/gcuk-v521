<section id="service-packages" style="background:url('<?php the_sub_field('service_rbackground') ?>') 50% no-repeat fixed;background-size:cover;padding-top:10%;padding-bottom:10%;">
    <div class="container">
        <div class="row para-box wow fadeIn gc-shadow" style="background:white;padding:2.5em;border-radius:3px;">
            <div>
                <h2 class=""><?php the_sub_field('service_rtitle'); ?></h2>
                <p class="lead"><?php the_sub_field('service_rsubtitle'); ?></p>
            </div>
            <div class="comparison-wrapper" style="">
                <div class="features-list" style="">
                    <ul>
                        <li class="header"><h4 class="rental-table list-hidden">Rental</h4></li>
                        <li>Rental<small> ex VAT</small></li>
                        <li>Payments per Annum</li>
                        <li>Vehicle</li>
                        <li>Battery Type</li>
                        <li>Condition</li>
                        <li>Contract Term</li>
                        <li>Battery Filling System</li>
                        <li>On-Board Charger</li>
                        <li>Delivery</li>
                        <li>Key Fobs</li>
                        <li>Club Logos <small>Front Panel</small></li>
                        <li>Numbers <small>Front &amp; Rear</small></li>
                        <li>Disclaimer Pads</li>
                        <li>Wheel Covers</li>
                        <li>BAGMA Training</li>
                        <li>Cabana<sup>&#42;</sup></li>
                        <li>Cool Box<sup>&#42;</sup> <small>(6 Bottle Capacity)</small></li>
                        <li>Ball &amp; Club Washer<sup>&#42;</sup></li>
                        <li>Message Holder<sup>&#42;</sup></li>
                        <li>Sand Bottle<sup>&#42;</sup></li>
                    </ul>
                    
                </div>
                <div class="product-wrapper">
                    <?php if( have_rows('service_rtable') ): ?>
                        <?php while( have_rows('service_rtable') ): the_row(); 
                        // Declare variables
                        $true = '<i class="fa fa-check" aria-hidden="true" style="color:#41d102;"></i>';
                        $false = '<i class="fa fa-minus" aria-hidden="true"></i>';
                        ?>
                            <div class="rental-list">
                                <ul>
                                    <li class="header">
                                        <h4 class="rental-table"><?php the_sub_field('rtable_header'); ?></h4>
                                    </li>
                                    <li>
                                        &#163;<?php the_sub_field('rtable_price'); ?>
                                    </li>
                                    <li>12</li>
                                    <li>
                                        <?php the_sub_field('rtable_vehicle'); ?>
                                    </li>
                                    <li>
                                        <?php the_sub_field('rtable_battery'); ?>
                                    </li>
                                    <li>
                                        <?php the_sub_field('rtable_condition'); ?>
                                    </li>
                                    <li>
                                        <?php the_sub_field('rtable_term'); ?>
                                    </li>
                                    <li>
                                        <?php if ( get_sub_field( 'rtable_bfs' ) ): ?>
                                            <?php echo $true; ?>
                                        <?php else: ?>
                                            <?php echo $false; ?>
                                        <?php endif; ?>
                                    </li>
                                    <li>
                                        <?php if ( get_sub_field( 'rtable_obc' ) ): ?>
                                            <?php echo $true; ?>
                                        <?php else: ?>
                                            <?php echo $false; ?>
                                        <?php endif; ?>
                                    </li>
                                    <li>
                                        <?php if ( get_sub_field( 'rtable_delivery' ) ): ?>
                                            <?php echo $true; ?>
                                        <?php else: ?>
                                            <?php echo $false; ?>
                                        <?php endif; ?>
                                    </li>
                                    <li>
                                        <?php if ( get_sub_field( 'rtable_fobs' ) ): ?>
                                            <?php echo $true; ?>
                                        <?php else: ?>
                                            <?php echo $false; ?>
                                        <?php endif; ?>
                                    </li>
                                    <li>
                                        <?php if ( get_sub_field( 'rtable_logos' ) ): ?>
                                            <?php echo $true; ?>
                                        <?php else: ?>
                                            <?php echo $false; ?>
                                        <?php endif; ?>
                                    </li>
                                    <li>
                                        <?php if ( get_sub_field( 'rtable_numbers' ) ): ?>
                                            <?php echo $true; ?>
                                        <?php else: ?>
                                            <?php echo $false; ?>
                                        <?php endif; ?>
                                    </li>
                                    <li>
                                        <?php if ( get_sub_field( 'rtable_disc' ) ): ?>
                                            <?php echo $true; ?>
                                        <?php else: ?>
                                            <?php echo $false; ?>
                                        <?php endif; ?>
                                    </li>
                                    <li>
                                        <?php if ( get_sub_field( 'rtable_covers' ) ): ?>
                                            <?php echo $true ?>
                                        <?php else: ?>
                                            <?php echo $false; ?>
                                        <?php endif; ?>
                                    </li>
                                    <li>
                                        <?php if ( get_sub_field( 'rtable_bagma' ) ): ?>
                                            <?php echo $true; ?>
                                        <?php else: ?>
                                            <?php echo $false; ?>
                                        <?php endif; ?>
                                    </li>
                                    <li><?php the_sub_field('rtable_cabana'); ?></li>
                                    <li><?php the_sub_field('rtable_coolbox'); ?></li>
                                    <li><?php the_sub_field('rtable_washer'); ?></li>
                                    <li><?php the_sub_field('rtable_message'); ?></li>
                                    <li><?php the_sub_field('rtable_sand'); ?></li>
                                </ul>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="rental-table-footer">
                <p><?php the_sub_field('rtable_footer'); ?></p>
            </div>
        </div>
    </div>
</section>
