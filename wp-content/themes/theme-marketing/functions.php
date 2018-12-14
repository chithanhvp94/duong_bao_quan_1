<?php
define('AKASA_LINK_THEME', plugin_dir_path(__FILE__ ));
if ( ! function_exists( 'wiz_setup' ) ) :
	function wiz_setup() {
		load_theme_textdomain( 'wiz', get_template_directory() . '/languages' );
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'wiz' ),
		) );
	}
endif;
add_action( 'after_setup_theme', 'wiz_setup' );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wiz_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wiz' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wiz' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wiz_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/style_js.php';
require get_template_directory() . '/framework/bootstrap.php';
require get_template_directory() . '/inc/t_akasa_functions.php';
require get_template_directory() . '/inc/get_google_form.php';
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
}

