<?php
/**
 * kn-webwork 2 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kn-webwork_2
 */

if ( ! function_exists( 'kn_webwork_2_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function kn_webwork_2_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on kn-webwork 2, use a find and replace
	 * to change 'kn-webwork-2' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'kn-webwork-2', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'kn-webwork-2' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'kn_webwork_2_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'kn_webwork_2_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kn_webwork_2_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'kn_webwork_2_content_width', 640 );
}
add_action( 'after_setup_theme', 'kn_webwork_2_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kn_webwork_2_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'kn-webwork-2' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'kn-webwork-2' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'kn-webwork-2' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'kn-webwork-2' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'kn-webwork-2' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'kn-webwork-2' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'kn-webwork-2' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'kn-webwork-2' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	
}
add_action( 'widgets_init', 'kn_webwork_2_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kn_webwork_2_scripts() {

	wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', false, '3.3.7', 'all' );

	wp_enqueue_style( 'kn-webwork-2-style', get_stylesheet_uri(), false, filemtime( get_stylesheet_directory() . '/style.css' ) );

	wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', false, '4.7.0', 'all' );

	wp_enqueue_style( 'montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:300,400', false, '4.7.0', 'all' );

	if ( is_page( 'team' ) ) {
		wp_enqueue_style( 'libre-baskerville', 'https://fonts.googleapis.com/css?family=Libre+Baskerville', false, '4.7.0', 'all' );
	}

	wp_enqueue_script( 'nav-scripts', get_template_directory_uri() . '/js/nav-scripts.js', array('jquery'), get_stylesheet_directory() . '/style.css', true);

	wp_enqueue_script( 'ga-events', get_template_directory_uri() . '/js/ga-events.js', array('jquery'), get_stylesheet_directory() . '/style.css', true);

	if ( is_front_page() ) {
		wp_enqueue_script( 'front-page-scripts', get_template_directory_uri() . '/js/front-page-scripts.js', array('jquery'), get_stylesheet_directory() . '/style.css', true);
	}

	wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '3.3.7', true );

	wp_enqueue_script( 'kn-webwork-2-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'kn-webwork-2-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kn_webwork_2_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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

function contact_mail_script() {
	if ( is_page( 'contact' ) ) {
		$submitted = $_POST['submitted'];

		if ($submitted):

			$flagged = false;
			$reason = '';

			$name = $_POST['user_name'];
			if (!ctype_alpha($name) || strlen($name) > 100) {
				$flagged = true;
				$reason = $reason . 'name,';
			}

			$originalMail = $_POST['user_mail'];
			$safeMail = filter_var($originalMail, FILTER_SANITIZE_EMAIL);

			if ($originalMail !== $safeMail || !filter_var($originalMail, FILTER_VALIDATE_EMAIL)) {
				$flagged = true;
				$reason = $reason . ' email,';
			}

			$message = $_POST['user_message'];

			if (!ctype_alnum($message)) {
				$flagged = true;
				$reason = $reason . ' message,';
			}


			$to_mail = 'kyledavid022@gmail.com';


			if( $name && $message && $originalMail &&  $flagged === false):
				$message = "

				Name: $name
				Email: $originalMail

				Message: $message

				";

				mail($to_mail, $subject, $message);
			else: 
				$message = "
				Flagged for: $reason
				Name: $name
				Email: $originalMail

				Message: $message

				";
				mail($to_mail, 'you got flagged', $message);
			endif;

		endif;
	}
	
}

add_action( 'wp_head', 'contact_mail_script' );

function add_ga_tracking() {
	echo "<script>
  			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  			ga('create', 'UA-74202208-1', 'auto');
  			ga('send', 'pageview');

		</script>";
}

add_action( 'wp_head', 'add_ga_tracking' );

function add_tag_mngr() {
	echo "<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-K29ZPB3');</script>
		<!-- End Google Tag Manager -->";
}

add_action( 'wp_head', 'add_tag_mngr' );