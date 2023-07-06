<?php
/**
 * sankitaweb and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.

 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

/**
 * sankitaweb only works in WordPress 4.4 or later.
 */


add_theme_support( 'post-thumbnails' );
add_custom_background(); 


function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );  


add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {

	/*sidebar berita */
	  register_sidebar( array(
        'name' => __( 'sidebartop-1', 'theme-slug' ),
        'id' => 'sidebartop-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h5 class="widgettitle">',
	'after_title'   => '</h5>',
    ) );

	   register_sidebar( array(
        'name' => __( 'sidebartop-2', 'theme-slug' ),
        'id' => 'sidebartop-2',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h5 class="widgettitle">',
	'after_title'   => '</h5>',
    ) );


	   register_sidebar( array(
        'name' => __( 'sidebartop-3', 'theme-slug' ),
        'id' => 'sidebartop-3',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h5 class="widgettitle">',
	'after_title'   => '</h5>',
    ) );


	   register_sidebar( array(
        'name' => __( 'sidebartop-4', 'theme-slug' ),
        'id' => 'sidebartop-4',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h5 class="widgettitle">',
	'after_title'   => '</h5>',
    ) );
	/*end sidebar berita*/

	/*end sidebar artikel*/

    register_sidebar( array(
        'name' => __( 'sidebar1', 'theme-slug' ),
        'id' => 'sidebar1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h6 class="widgettitle">',
	'after_title'   => '</h6>',
    ) );

    register_sidebar( array(
        'name' => __( 'sidebar2', 'theme-slug' ),
        'id' => 'sidebar2',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h6 class="widgettitle">',
	'after_title'   => '</h6>',
    ) );

    register_sidebar( array(
        'name' => __( 'sidebar3', 'theme-slug' ),
        'id' => 'sidebar3',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h6 class="widgettitle">',
	'after_title'   => '</h6>',
    ) );

    register_sidebar( array(
        'name' => __( 'sidebar4', 'theme-slug' ),
        'id' => 'sidebar4',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h6 class="widgettitle">',
	'after_title'   => '</h6>',
    ) );

    register_sidebar( array(
        'name' => __( 'sidebar5', 'theme-slug' ),
        'id' => 'sidebar5',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h6 class="widgettitle">',
	'after_title'   => '</h6>',
    ) );

    register_sidebar( array(
        'name' => __( 'sidebar6', 'theme-slug' ),
        'id' => 'sidebar6',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h6 class="widgettitle">',
	'after_title'   => '</h6>',
    ) );

}

/*end sidebar artikel*/


//Custom CSS Widget
add_action('admin_menu', 'custom_css_hooks');
add_action('save_post', 'save_custom_css');
add_action('wp_head','insert_custom_css');
function custom_css_hooks() {
	add_meta_box('custom_css', 'Custom CSS', 'custom_css_input', 'post', 'normal', 'high');
	add_meta_box('custom_css', 'Custom CSS', 'custom_css_input', 'page', 'normal', 'high');
}
function custom_css_input() {
	global $post;
	echo '<input type="hidden" name="custom_css_noncename" id="custom_css_noncename" value="'.wp_create_nonce('custom-css').'" />';
	echo '<textarea name="custom_css" id="custom_css" rows="5" cols="30" style="width:100%;">'.get_post_meta($post->ID,'_custom_css',true).'</textarea>';
}
function save_custom_css($post_id) {
	if (!wp_verify_nonce($_POST['custom_css_noncename'], 'custom-css')) return $post_id;
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return $post_id;
	$custom_css = $_POST['custom_css'];
	update_post_meta($post_id, '_custom_css', $custom_css);
}
function insert_custom_css() {
	if (is_page() || is_single()) {
		if (have_posts()) : while (have_posts()) : the_post();
			echo '<style type="text/css">'.get_post_meta(get_the_ID(), '_custom_css', true).'</style>';
		endwhile; endif;
		rewind_posts();
	}
}

?>