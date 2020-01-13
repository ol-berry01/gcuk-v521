<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package v5gcuk
 */
?>
<?php if ( get_option( 'show_on_front' ) == 'posts' || !is_front_page() ) : ?>
        <div class="clearfix"></div>
    </div>
</div>
<?php endif; ?>

    <div class="footer">
        <div class="container">
            <div class="row">

                <div class="col-sm-4">
                    <img class="logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png">
                    <p>Golf Car UK Ltd<br>
                    Unit 7, The Boscombe Centre<br>
                    Mills Way, Amesbury<br>
                    Wiltshire, SP4 7SD</p>
                    <p>T: 0345 8055 494</p>
                    <p>F: 01980 677 113</p>
                </div>
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-xs-4">
                            <?php dynamic_sidebar( 'footer-1' ); ?>
                        </div>
                        <div class="col-xs-4">
                            <?php dynamic_sidebar( 'footer-2' ); ?>
                        </div>
                        <div class="col-xs-4">
                            <?php dynamic_sidebar( 'footer-3' ); ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row sub-logos-row">
                <div class="sub-logos">
                    <ul>
                        <li><a href="https://ezgo.com/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-footer-ezgo.png"></a></li>
                        <li><a href="https://www.cushman.com/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-footer-cushman.png"></a></li>
                        <li><a href="https://www.textronoffroad.com/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-footer-offroad.png"></a></li>
                        <li><a href="https://www.textronfleetmgmt.com/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-footer-tfm.png"></a></li>
                    </ul>
                    <p class="sub-footer-authorised">Authorised UK dealers of E-Z-GO<sup>&reg;</sup>, Cushman<sup>&reg;</sup>, Textron Off Road<sup>&reg;</sup> vehicles &amp; Textron Fleet Management<sup>&reg;</sup> GPS systems.</p>
                </div>
            </div>
        </div>
    </div>

	<div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                </div>
                <div class="col-sm-12">
                    <p style="color:#a28f56;">Copyright &copy;<?php echo date("Y") ?> Golf Car UK Ltd, all rights reserved</p>
                    <p style="color:#6f6f6f;">Registered in England under Company No. 04616458 | VAT No: GB126148428 | Registered address - 13 Church Street, Helston, Cornwall, TR13 8TD</p>
                </div>
            </div>
        </div>
    </div>
<?php wp_footer(); ?>

</body>
</html>