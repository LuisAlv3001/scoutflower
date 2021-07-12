<?php


function load_assets() {
    
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/lux/bootstrap.min.css');
    
    //load stlye.css
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    
    
    //load JS
    wp_enqueue_script( 'font_awesome', 'https://kit.fontawesome.com/2211b4be0e.js');
    
    if (is_front_page()){
        wp_enqueue_script( 'front_page_script', '/wp-content/themes/FlowerTheme/js/script.js', array('jquery'), '', false);
    }
}

add_action('wp_enqueue_scripts', 'load_assets');

//Register Custom Navigation Walker
function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

//Register Menus
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'FlowerTheme' ),
) );

function add_header_security() {
    header( 'X-Content-Type-Options: nosniff' );
    header( 'X-Frame-Options: SAMEORIGIN' );
    header( 'X-XSS-Protection: 1;mode=block' );
}
add_action( 'send_headers', 'add_header_security' );

/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<a class="cart-customlocation" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> – <?php echo $woocommerce->cart->get_cart_total(); ?></a>
	<?php
	$fragments['a.cart-customlocation'] = ob_get_clean();
	return $fragments;
}