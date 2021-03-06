<?php
/**
 * julialandauer functions and definitions
 *
 * @package julialandauer
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'julialandauer_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function julialandauer_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on julialandauer, use a find and replace
	 * to change 'julialandauer' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'julialandauer', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'julialandauer' ),
        'pr_menu' => __( 'PR Menu', 'julialandauer' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'julialandauer_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // julialandauer_setup
add_action( 'after_setup_theme', 'julialandauer_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function julialandauer_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'julialandauer' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'julialandauer_widgets_init' );

/**
 * Register custom post type(s).
 */
function create_posttype() {
    register_post_type( 'schedule',
        array(
            'labels' 				=> array(
                'name' 				=> __( 'Schedule' )
            ),
            'public' 				=> true,
            'has_archive' 			=> false,
            'exclude_from_search' 	=> true,
            'menu_icon' 			=> get_template_directory_uri() . '"/images/custom-post-schedule-icon.png"',
            'description'			=> "Use this post to update the upcoming schedule calendar.",
        )
    );
}
/**
* Hooking up our function to theme setup
*/
add_action( 'init', 'create_posttype' );

/** 
* Register featured images
*/
add_theme_support( 'post-thumbnails' );

/**
 * Enqueue scripts and styles.
 */
function julialandauer_scripts() {
	wp_enqueue_style( 'julialandauer-style', get_stylesheet_uri() );

	wp_enqueue_script( 'julialandauer-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'julialandauer-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script('picturefill', get_template_directory_uri() . '/js/picturefill.min.js', array(), '2.0.0', true );

	// Custom scripts
	wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true );

    wp_enqueue_script('timeline', get_template_directory_uri() . '/js/timeline.js', array(), '1.0.0', true );

    wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr.js', array(), '2.7.1', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'julialandauer_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

// Cutomize the login logo
function my_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo/logo-400.svg);
            padding-bottom: 30px;
			background-size: 100%; 
			background-position: center center;
			width: 100%;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

// Get rid of brackets in the excerpt
function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

add_filter('excerpt_length', 'my_excerpt_length');
function my_excerpt_length($length) {
return 25; }

add_image_size( 'articles-featured', 985, 400, true );

add_filter('xmlrpc_enabed', '__return_false');
