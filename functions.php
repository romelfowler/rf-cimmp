<?php
/**
 * CIMMP-V2 Removing Query Strings
 *
 */
function _remove_script_version( $src ){
	$parts = explode( '?ver', $src );
        return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );


require_once('template-parts/nav/custom_nav.php');
/**
 * CIMMP-V2 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CIMMP-V2
 */
if ( ! function_exists( 'cimmp_v2_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function cimmp_v2_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on CIMMP-V2, use a find and replace
		 * to change 'cimmp-v2' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'cimmp-v2', get_template_directory() . '/languages' );

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
			'main-menu' => esc_html__( 'Main Menu', 'cimmp-v2' ),
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
		add_theme_support( 'custom-background', apply_filters( 'cimmp_v2_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'cimmp_v2_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cimmp_v2_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'cimmp_v2_content_width', 640 );
}
add_action( 'after_setup_theme', 'cimmp_v2_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cimmp_v2_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'cimmp-v2' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'cimmp-v2' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar-2', 'cimmp-v2' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'cimmp-v2' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'cimmp_v2_widgets_init' );
/**
 * Enqueue scripts and styles.
 */
function cimmp_v2_scripts() {
	wp_enqueue_style( 'GF-helvetica', 'https://fonts.googleapis.com/css?family=Helvetica:400,700');
	wp_enqueue_style( 'GF-raleway', 'https://fonts.googleapis.com/css?family=Raleway:400,100,300,500,700,900');
	wp_enqueue_style( 'animate', get_stylesheet_directory_uri() . '/assets/css/animate.css');
	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style( 'et-line', get_stylesheet_directory_uri() . '/assets/css/et-line-icons.css');
	wp_enqueue_style( 'fa', get_stylesheet_directory_uri() . '/assets/css/font-awesome.min.css');
	wp_enqueue_style( 'themify', get_stylesheet_directory_uri() . '/assets/css/themify-icons.css');
	wp_enqueue_style( 'swiper', get_stylesheet_directory_uri() . '/assets/css/swiper.min.css');
	wp_enqueue_style( 'justify-gallery', get_stylesheet_directory_uri() . '/assets/css/justified-gallery.min.css');
	// magnific popup
	wp_enqueue_style( 'mag-pop-up', get_stylesheet_directory_uri() . '/assets/css/magnific-popup.css' );
	// revolution slider
	wp_enqueue_style( 'settings', get_stylesheet_directory_uri() . '/assets/revolution/css/settings.css');
	wp_enqueue_style( 'layers', get_stylesheet_directory_uri() . '/assets/revolution/css/layers.css');
	wp_enqueue_style( 'navigation', get_stylesheet_directory_uri() . '/assets/revolution/css/navigation.css');
	// bootsnav
	wp_enqueue_style( 'bootsnav', get_stylesheet_directory_uri() . '/assets/css/bootsnav.css');
	wp_enqueue_style( 'cimmp-v2-style', get_stylesheet_uri() );
	wp_enqueue_style( 'responsive-style', get_stylesheet_directory_uri() . '/assets/css/responsive.css');


	// ALL JS FROM THIS IntlCodePointBreakIterator
	wp_enqueue_script( 'cimmp-v2-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'cimmp-v2-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'JQuery-CDN', 'https://code.jquery.com/jquery-3.3.1.min.js', null, null, true );
	wp_enqueue_script('JQuery', get_template_directory_uri() . '/assets/js/jquery.js', array(), '0.1', true );
	wp_enqueue_script('Modernizr', get_template_directory_uri() . '/assets/js/modernizr.js', array(), '0.1', true );
	wp_enqueue_script('Bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '0.1', true );
	wp_enqueue_script('Jquery-easing', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array('jquery'), '1.3', true );
	wp_enqueue_script('Skrollr', get_template_directory_uri() . '/assets/js/skrollr.min.js', array(), '0.1', true );
	wp_enqueue_script('Smooth-Scroll', get_template_directory_uri() . '/assets/js/smooth-scroll.js', array(), '0.1', true );
	wp_enqueue_script('JQuery-Appear', get_template_directory_uri() . '/assets/js/jquery.appear.js', array('jquery'), '0.1', true );
	wp_enqueue_script('Bootsnav', get_template_directory_uri() . '/assets/js/bootsnav.js', array(), '0.1', true );
	wp_enqueue_script('JQuery-Nav', get_template_directory_uri() . '/assets/js/jquery.nav.js', array('jquery'), '0.1', true );
	wp_enqueue_script('WOW', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '0.1', true );
	wp_enqueue_script('Page-Scroll', get_template_directory_uri() . '/assets/js/page-scroll.js', array(), '0.1', true );
	wp_enqueue_script('Swiper', get_template_directory_uri() . '/assets/js/swiper.min.js', array(), '0.1', true );
	wp_enqueue_script('JQuery-Count-To', get_template_directory_uri() . '/assets/js/jquery.count-to.js', array('jquery'), '0.1', true );
	wp_enqueue_script('JQuery-Stellar', get_template_directory_uri() . '/assets/js/jquery.stellar.js', array('jquery'), '0.1', true );
	wp_enqueue_script('Magnific-Popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), '0.1', true );
	wp_enqueue_script('Isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array(), '0.1', true );
	wp_enqueue_script('Images-Loaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array(), '0.1', true );
	wp_enqueue_script('Classie', get_template_directory_uri() . '/assets/js/classie.js', array(), '0.1', true );
	wp_enqueue_script('Hamburger-Menu', get_template_directory_uri() . '/assets/js/hamburger-menu.js', array(), '0.1', true );
	wp_enqueue_script('Counter', get_template_directory_uri() . '/assets/js/counter.js', array(), '0.1', true );
	wp_enqueue_script('JQuery-Fitvids', get_template_directory_uri() . '/assets/js/jquery.fitvids.js', array('jquery'), '0.1', true );
	wp_enqueue_script('Equalize', get_template_directory_uri() . '/assets/js/equalize.min.js', array(), '0.1', true );
	wp_enqueue_script('JQuery-Bars', get_template_directory_uri() . '/assets/js/skill.bars.jquery.js', array('jquery'), '0.1', true );
	wp_enqueue_script('Justified-Gallery', get_template_directory_uri() . '/assets/js/justified-gallery.min.js', array(), '0.1', true );
	wp_enqueue_script('JQuery-easypiechart', get_template_directory_uri() . '/assets/js/jquery.easypiechart.min.js', array('jquery'), '0.1', true );
	wp_enqueue_script('Instafeed', get_template_directory_uri() . '/assets/js/instafeed.min.js', array(), '0.1', true );
	wp_enqueue_script('Retina', get_template_directory_uri() . '/assets/js/retina.min.js', array(), '0.1', true );
	// REVOLUTION
	wp_enqueue_script('JQuery-Themepunch-Tools', get_template_directory_uri() . '/assets/revolution/js/jquery.themepunch.tools.min.js', array('jquery'), '0.1', true );
	wp_enqueue_script('JQuery-Themepunch-Revolution', get_template_directory_uri() . '/assets/revolution/js/jquery.themepunch.revolution.min.js', array('jquery'), '0.1', true );
	wp_enqueue_script('Revolution-Ext-Action', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.actions.min.js', array(), '0.1', true );
	wp_enqueue_script('Revolution-Ext-Carousel', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.carousel.min.js', array(), '0.1', true );
	wp_enqueue_script('Revolution-Ext-Kenburn', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.kenburn.min.js', array(), '0.1', true );
	wp_enqueue_script('Revolution-Ext-layeranimation', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js', array(), '0.1', true );
	wp_enqueue_script('Revolution-Ext-migration', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.migration.min.js', array(), '0.1', true );
	wp_enqueue_script('Revolution-Ext-navigation', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.navigation.min.js', array(), '0.1', true );
	wp_enqueue_script('Revolution-Ext-parallax', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.parallax.min.js', array(), '0.1', true );
	wp_enqueue_script('Revolution-Ext-slideanims', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.slideanims.min.js', array(), '0.1', true );
	wp_enqueue_script('Revolution-Ext-video', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.video.min.js', array(), '0.1', true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cimmp_v2_scripts' );

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
 * Filter Hooks: Excerpt for blogs
 */
 function extra_excerpt($more_text){
	 global $post;
	 return '... <a class="moretag" href=" '. get_permalink($post->ID) . '"> Read More </a>';
 }
 add_filter('excerpt_more', 'extra_excerpt');

 /**
  * Filter Hooks: Admin settings for ACF
  */
 add_filter('acf/settings/show_admin', 'my_acf_show_admin');

 function my_acf_show_admin( $show ) {

     return current_user_can('manage_options');
 }
 /**
  * Defer parsing of javascript.
  */
 // if (!(is_admin() )) {
 //     function defer_parsing_of_js ( $url ) {
 //         if ( FALSE === strpos( $url, '.js' ) ) return $url;
 //         	if ( strpos( $url, 'jquery.js' ) ) return $url;
 //         // return "$url' defer ";
 //         return "$url' defer onload='";
 //     }
 //     add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );
 // }


 add_action("widgets_init", array('Widget_Custom_tax_tag_cloud', 'register'));
 class Widget_Custom_tax_tag_cloud {
     function control(){
         echo 'No control panel';
     }
     function widget($args){
         echo $args['before_widget'];
         echo $args['before_title'] . 'Your widget title' . $args['after_title'];
         $cloud_args = array('taxonomy' => 'Your taxonomy here');
         wp_tag_cloud( $cloud_args );
         echo $args['after_widget'];
     }
     function register(){
         register_sidebar_widget('Widget name', array('Widget_Custom_tax_tag_cloud', 'widget'));
         register_widget_control('Widget name', array('Widget_Custom_tax_tag_cloud', 'control'));
     }
 }

 // Async load
 function vtdigger_async($url)
 {
     if ( strpos( $url, '#asyncload') === false )
         return $url;
     else if ( is_admin() )
         return str_replace( '#asyncload', '', $url );
     else
   return str_replace( '#asyncload', '', $url )."' async='async";
     }
 add_filter( 'clean_url', 'vtdigger_async', 11, 1 );
