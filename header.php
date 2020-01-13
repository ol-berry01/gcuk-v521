<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package v5gcuk
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>images/favicon.ico" />
<!-- WP_Head -->
<?php wp_head(); ?>
<!-- End WP_Head -->
</head>

<body <?php body_class(); ?>>
	<header id="header" class="site-header" role="banner">
		<div class="container">
        	<div class="row">

        		<div class="logo_container col-md-2">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <img id="logo" class="logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png">
                    </a>
                </div><!-- /logo_container -->

                <button id="ql_nav_btn" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ql_nav_collapse" aria-expanded="false">
                    <i class="fa fa-navicon"></i>
                </button>


                <div class="col-md-10">
                	<div class="collapse navbar-collapse" id="ql_nav_collapse">
                        <nav id="jqueryslidemenu" class="jqueryslidemenu navbar " role="navigation">
                            <?php
                                $menu_id = 'primary';
                            wp_nav_menu( array(                     
                                'theme_location'    => $menu_id,
                                'menu_id'           => 'primary-menu',
                                'depth'             => 3,
                                'menu_class'        => 'nav',
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'walker'            => new wp_bootstrap_navwalker()
                            ));
                            ?>
                        </nav>
                    </div><!-- /ql_nav_collapse -->
                </div><!-- /col-md-7 -->

                <div class="clearfix"></div>

        	</div><!-- row-->
        </div><!-- /container -->
	</header>
	<div class="clearfix"></div>
