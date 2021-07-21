<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package scoutflowertheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'scoutflowertheme' ); ?></a>
	<header id="masthead" class="site-header">
        <div class="header">
            <div class="container pt-3 pb-3">
                <div class="row d-flex align-items-center justify-content-start">
                    <div class="col">
                        <a class="" href="#"><h2>Xflor</h2></a>
                    </div>
                    <div class="col-md-7 col-sm-12">
                        <?php if ( function_exists( 'aws_get_search_form' ) ) { aws_get_search_form(); } ?>
                    </div>
                    <div class="d-flex align-items-center col d-flex justify-content-end">
                        <i class="fas fa-shopping-cart mr-1">:</i>
                        <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
                        <?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> – 
                        <?php echo WC()->cart->get_cart_total(); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <nav id="site-navigation" class="main-navigation">
        <div class="d-flex justify-content-center">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
                <div class="col-12 d-flex justify-content-center text-center">
                    <?php 
                        wp_nav_menu( array(
                            'theme_location'    => 'menu-1',
                            'menu_id'           => 'primary-menu',
                        ) );
                    ?>
                </div>
            </div>
        </div>
    </nav>