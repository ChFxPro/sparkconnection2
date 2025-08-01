<?php
/**
 * Helene-Clean functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Helene-Clean
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function helene_clean_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Helene-Clean, use a find and replace
		* to change 'helene-clean' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'helene-clean', get_template_directory() . '/languages' );

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
                       'menu-1' => __( 'Primary Menu', 'helene-clean' ),
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
			'helene_clean_custom_background_args',
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
add_action( 'after_setup_theme', 'helene_clean_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function helene_clean_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'helene_clean_content_width', 640 );
}
add_action( 'after_setup_theme', 'helene_clean_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function helene_clean_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'helene-clean' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'helene-clean' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'helene_clean_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function helene_clean_scripts() {
	wp_enqueue_style( 'helene-clean-style', get_stylesheet_uri(), array(), _S_VERSION );
	// Load helene-landing.css only on the Helene landing page template
        if ( is_page_template( 'page-helene.php' ) ) {
            wp_enqueue_style( 'helene-landing', get_template_directory_uri() . '/helene-landing.css', array(), _S_VERSION );

            // Load Chart.js from CDN with a local fallback
            wp_enqueue_script( 'chartjs', 'https://cdn.jsdelivr.net/npm/chart.js', array(), null, true );
            wp_add_inline_script(
                'chartjs',
                "window.Chart || document.write('<script src=\"" . esc_url( get_template_directory_uri() . '/js/chart.min.js' ) . "\"><\\/script>');"
            );

            // Custom interactions and chart setup
            wp_enqueue_script( 'helene-charts', get_template_directory_uri() . '/js/helene-charts.js', array( 'chartjs' ), _S_VERSION, true );
        }
	wp_style_add_data( 'helene-clean-style', 'rtl', 'replace' );

        wp_enqueue_script( 'helene-clean-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
        wp_enqueue_script(
            'helene-nav-toggle',
            get_template_directory_uri() . '/js/nav-toggle.js',
            array(),
            filemtime( get_stylesheet_directory() . '/js/nav-toggle.js' ),
            true
        );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'helene_clean_scripts' );

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


// Handle Helene landing page form submissions
add_action( 'admin_post_helene_submit', 'helene_handle_submission' );
add_action( 'admin_post_nopriv_helene_submit', 'helene_handle_submission' );
function helene_handle_submission() {
    // Verify nonce for security
    if ( ! isset( $_POST['helene_nonce'] ) ||
         ! wp_verify_nonce( sanitize_text_field( $_POST['helene_nonce'] ), 'helene_submit' ) ) {
        wp_die( 'Security check failed', 'Submission Error', [ 'response' => 403 ] );
    }

    // Sanitize form fields
    $name    = isset( $_POST['name'] ) ? sanitize_text_field( wp_unslash( $_POST['name'] ) ) : '';
    $email   = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
    $message = isset( $_POST['message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';

    // Send email
    $to      = get_option( 'admin_email' );
    $subject = __( 'New Submission from Helene Page', 'helene-clean' );
    $body    = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    wp_mail( $to, $subject, $body );

    // Redirect back with success flag
    $redirect_url = add_query_arg( 'submitted', 'true', wp_get_referer() );
    wp_safe_redirect( $redirect_url );
    exit;
}

?>
