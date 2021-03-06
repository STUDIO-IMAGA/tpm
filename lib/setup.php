<?php

namespace IMAGA\Theme\Setup;

use IMAGA\Theme\Assets;

/**
* Theme setup
*/
function setup() {

  // Make theme available for translation
  load_theme_textdomain('imaga', get_template_directory() . '/lang');

  // Load main CSS for WYSIWYG
  add_editor_style(Assets\asset_path('styles/main.css'));

  // Enable plugins to manage the document title
  // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
  add_theme_support('title-tag');

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus([
    'primary_navigation'    => __('Hoofd Menu', 'imaga'),
    'secondary_navigation'  => __('Secondair Menu', 'imaga'),
    'tertiary_navigation'   => __('Copyright Menu', 'imaga'),
    'footer_nav_1'          => __('Footer Menu #1', 'imaga'),
    'footer_nav_2'          => __('Footer Menu #2', 'imaga'),
    'footer_nav_3'          => __('Footer menu #3', 'imaga'),
    'footer_nav_4'          => __('Footer Menu #4', 'imaga'),
  ]);

  // Enable various theme supports
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo');
  add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

  // Add image sizes
  // Used for related posts and more reviews
  add_image_size('post-thumbnail-related', 500, 300, true);
  add_image_size('gallery_icon', 720, 440, true);
  add_image_size('featured-projects', 1200, 600, true);
  add_image_size('project-featured-image', 500, 500, true);
  add_image_size('projecten-archive', 900, 361, true);

}
add_action('after_setup_theme', __NAMESPACE__ . '\\setup');

/**
* Theme assets
*/
function assets() {
  wp_enqueue_style('imaga/css', Assets\asset_path('styles/main.css'), false, null);
  wp_deregister_script( 'jquery' );
  wp_enqueue_script('jquery', Assets\asset_path('scripts/jquery.js'), null, null, true);
  wp_enqueue_script('popper/js', Assets\asset_path('scripts/popper.js'), ['jquery'], null, true);
  wp_enqueue_script('imaga/js', Assets\asset_path('scripts/main.js'), ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);

/**
* Login assets
*/
function add_login_stylesheet() {
  wp_register_style('imaga/login', Assets\asset_path('styles/login.css') );
  wp_enqueue_style( 'imaga/login');
}
add_action( 'login_enqueue_scripts', __NAMESPACE__ . '\\add_login_stylesheet' );

/**
* Login logo URL
*/
function login_logo_url($url) {
  return get_bloginfo('url');
}
add_filter( 'login_headerurl', __NAMESPACE__ . '\\login_logo_url' );

/*
* ACF Google Maps API Key
*/
function add_acf_google_maps_key() {
  if( ! defined( 'GOOGLE_MAPS_API' ) ) return;
  acf_update_setting('google_api_key', GOOGLE_MAPS_API );
}
add_action('acf/init', __NAMESPACE__ . '\\add_acf_google_maps_key');

/**
* Add Google Fonts
*/
function add_google_fonts() {
  wp_enqueue_style( 'imaga/google-fonts', 'http://fonts.googleapis.com/css?family=Lato:400,900&display=swap');
}
add_action( 'wp_head', __NAMESPACE__ . '\\add_google_fonts' , 1);

/**
* Remove acf-post2post nag
*/
add_filter('remove_hube2_nag', '__return_true');

/**
* Remove 'page-template' from body class on pages with custom templates
*/
function prefix_remove_body_class($wp_classes) {
  if ( is_page_template() ):
    foreach ($wp_classes as $key => $value) {
      $wp_classes[$key] = str_replace('page-template-template-', '', $value);
    }
  endif;
  return $wp_classes;
}
add_filter('body_class', __NAMESPACE__ . '\\prefix_remove_body_class', 20, 2);

/**
* Remove from admin menu
*/
function remove_admin_menus() {
  remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', __NAMESPACE__ . '\\remove_admin_menus' );

/**
*Remove from post and pages
*/
function remove_comment_support() {
  remove_post_type_support( 'post', 'comments' );
  remove_post_type_support( 'page', 'comments' );
}
add_action( 'init', __NAMESPACE__ . '\\remove_comment_support', 100);

/**
* Remove from admin bar
*/
function admin_bar_render() {
  global $wp_admin_bar;
  $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', __NAMESPACE__ . '\\admin_bar_render' );

/**
* Disable auto-paragraphing for Contact Form 7
*/
add_filter('wpcf7_autop_or_not', '__return_false');

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});

/*
 * Disable REST/JSON API
 * Source: https://www.wpbeginner.com/wp-tutorials/how-to-disable-json-rest-api-in-wordpress/#comment-364346
 */
add_filter('rest_enabled', '_return_false');
add_filter('rest_jsonp_enabled', '_return_false');

/*
 * Disable XMLRPC
 * Source: https://www.wpbeginner.com/plugins/how-to-disable-xml-rpc-in-wordpress/
 */
add_filter('xmlrpc_enabled', '__return_false');

// Disabled block editor
add_filter('use_block_editor_for_post', '__return_false', 10);

// Add message for Projects featured images
function projecten_admin_post_thumbnail_html( $content, $post_id, $thumbnail_id ) {
  global $post;
  if($post->post_type == 'projecten'):
    $content .= __( 'Gebruik een afbeelding met een minimale resolutie van 1200x600.', 'imaga' );
  endif;
  return $content;
}
add_filter( 'admin_post_thumbnail_html', __NAMESPACE__ . '\\projecten_admin_post_thumbnail_html', 10, 3 );

/*
 * Disable Emoji styles and scripts
 * Source: https://www.wpfaster.org/code/how-to-remove-emoji-styles-scripts-wordpress
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
