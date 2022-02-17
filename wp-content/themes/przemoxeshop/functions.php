<?php
/**
 * przemoxeShop functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package przemoxeShop
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'przemoxeshop_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */

	add_action( 'after_setup_theme', 'my_theme_setup' );
	function my_theme_setup(){
		load_theme_textdomain( 'przemoxeshop', get_template_directory() . '/languages' );
	}

	function przemoxeshop_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on przemoxeShop, use a find and replace
		 * to change 'przemoxeshop' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'przemoxeshop', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'przemoxeshop' ),
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
				'przemoxeshop_custom_background_args',
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
add_action( 'after_setup_theme', 'przemoxeshop_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function przemoxeshop_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'przemoxeshop_content_width', 640 );
}
add_action( 'after_setup_theme', 'przemoxeshop_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function przemoxeshop_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'przemoxeshop' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'przemoxeshop' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'przemoxeshop_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function przemoxeshop_scripts() {
	wp_enqueue_style( 'przemoxeshop-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'przemoxeshop-style', 'rtl', 'replace' );
	wp_enqueue_style('style_main', get_theme_file_uri('/css/style.css'));
	wp_enqueue_style( 'przemoxeShop-BootstrapCSS', get_template_directory_uri() . '/inc/bootstrap-5.1.3/dist/css/bootstrap.min.css' );
	wp_enqueue_style( 'przemoxeShop-BootstrapIcons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css' );
	wp_enqueue_style( 'przemoxeShop-owlCarouselCSS', get_template_directory_uri() . '/inc/OwlCarousel/dist/assets/owl.carousel.min.css' );
	wp_enqueue_style( 'przemoxeShop-owlThemeCSS', get_template_directory_uri() . '/inc/OwlCarousel/dist/assets/owl.theme.default.min.css' );

	wp_enqueue_script( 'przemoxeshop-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script('bootstrapJS', get_theme_file_uri('/inc/bootstrap-5.1.3/dist/js/bootstrap.bundle.min.js'),array('jquery'), 1.0, true);
	wp_enqueue_script('bootstrapPopper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js',array('jquery'), 1.0, true);
	wp_enqueue_script('przemoxeShop-script', get_template_directory_uri() . '/js/script.js',array('jquery'), 1.0, true);
	wp_enqueue_script('przemoxeShop-script-search', get_template_directory_uri() . '/js/header/search.js',array('jquery'), 1.0, true);
	wp_enqueue_script('przemoxeShop-script-menuTransparent', get_template_directory_uri() . '/js/header/menuTransparent.js',array('jquery'), 1.0, true);
	wp_enqueue_script('przemoxeShop-owlCarouselJS', get_template_directory_uri() . '/inc/OwlCarousel/dist/owl.carousel.min.js',array('jquery'), 1.0, true);
	wp_enqueue_script('przemoxeShop-owlCarouselRunJS', get_template_directory_uri() . '/js/front-page/owl-carousel.js',array('jquery'), 1.0, true);
	wp_enqueue_script('przemoxeShop-owlContainer', get_template_directory_uri() . '/js/global/container.js',array('jquery'), 1.0, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'przemoxeshop_scripts' );

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
 * Woocommerce
 */



 add_theme_support('woocommerce');


