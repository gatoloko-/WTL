<?php
/**
 * world transport intl functions and definitions
 *
 * @package world transport intl
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'world_transport_intl_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function world_transport_intl_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on world transport intl, use a find and replace
	 * to change 'world-transport-intl' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'world-transport-intl', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'world-transport-intl' ),
	) );
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link'
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'world_transport_intl_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // world_transport_intl_setup
add_action( 'after_setup_theme', 'world_transport_intl_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function world_transport_intl_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'world-transport-intl' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'world_transport_intl_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function world_transport_intl_scripts() {
	wp_enqueue_style( 'world-transport-intl-style', get_stylesheet_uri() );

	wp_enqueue_script( 'world-transport-intl-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'world-transport-intl-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'world_transport_intl_scripts' );


//mine
function rollOver() {
	wp_enqueue_script(
		'rollover',
		get_stylesheet_directory_uri() . '/js/rollOver.js',
		array( 'jquery' )
	);
}

add_action( 'wp_enqueue_scripts', 'rollOver' );

function backgroundRender($bck) {if($bck[0]=="random"){
echo "<style>
body{
	background: url(".get_template_directory_uri()."/img/".rand(1,10).".jpg) no-repeat center center fixed; 
 	-webkit-background-size: cover;
  	-moz-background-size: cover;
  	-o-background-size: cover;
  	background-size: cover;
}
</style>";
}else{
echo "<style>
body{
	background: url(".get_template_directory_uri()."/img/".$bck[0].".jpg) no-repeat center center fixed; 
 	-webkit-background-size: cover;
  	-moz-background-size: cover;
  	-o-background-size: cover;
  	background-size: cover;
}
</style>";
}
		
	
}

add_filter( 'backgroundRender', 'background' );

add_theme_support( 'post-thumbnails' );

//mine
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
