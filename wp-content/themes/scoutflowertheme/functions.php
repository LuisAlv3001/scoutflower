<?php
/**
 * scoutflowertheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package scoutflowertheme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'scoutflowertheme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function scoutflowertheme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on scoutflowertheme, use a find and replace
		 * to change 'scoutflowertheme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'scoutflowertheme', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'scoutflowertheme' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'scoutflowertheme_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'scoutflowertheme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function scoutflowertheme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'scoutflowertheme_content_width', 640 );
}
add_action( 'after_setup_theme', 'scoutflowertheme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function scoutflowertheme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'scoutflowertheme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'scoutflowertheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'scoutflowertheme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function scoutflowertheme_scripts() {
	wp_enqueue_style( 'scoutflowertheme-style', get_stylesheet_uri(), array(), _S_VERSION );
	
	wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/lux/bootstrap.min.css');
	
	wp_enqueue_style( 'scoutflowertheme-main', get_template_directory_uri() . '/css/main.css' );
	
	wp_style_add_data( 'scoutflowertheme-style', 'rtl', 'replace' );

	wp_enqueue_script( 'scoutflowertheme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'font_awesome', 'https://kit.fontawesome.com/2211b4be0e.js');

    if (is_front_page()){
        wp_enqueue_script( 'front_page_script', get_template_directory_uri(). '/js/front_page_timer.js', array('jquery'), '', false);
    }

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'scoutflowertheme_scripts' );

//Register Custom Navigation Walker
function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

/**
 * Implement header security.
 */
function add_header_security() {
    header( 'X-Content-Type-Options: nosniff' );
    header( 'X-Frame-Options: SAMEORIGIN' );
    header( 'X-XSS-Protection: 1;mode=block' );
}
add_action( 'send_headers', 'add_header_security' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

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

/**
 * WooCommerce 
 */
add_theme_support('woocommerce');

// Remove WooCommerce Styles
function remove_woocommerce_styles($enqueue_styles){
	unset( $enqueue_styles['woocommerce-general'] ); //remove the gloss
	//unset( $enqueue_styles['woocommerce-layout'] ); //remove the layout
	//unset( $enqueue_styles['woocommerce-smallscreen'] ); //remove the smallscreen optimization

	return $enqueue_styles;
}
add_filter( 'woocommerce_enqueue_styles', 'remove_woocommerce_styles' );

/**
 * Enqueue your own stylesheet
*/
function wp_enqueue_woocommerce_style(){
	wp_register_style ('mytheme-woocommerce', get_template_directory_uri() . '/css/woocommerce/woocommerce.css');

	if ( class_exists( 'woocommerce' ) ) {
		wp_enqueue_style( 'mytheme-woocommerce' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_enqueue_woocommerce_style' );

