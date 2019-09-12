<?php

namespace IMAGA\Theme\ACF;

/**
* Add Theme Settings page
*/
if( function_exists('acf_add_options_page') ):
  acf_add_options_page(array(
    'page_title' 	=> 'Thema Instellingen',
    'menu_title'	=> 'Thema Instellingen',
    'menu_slug' 	=> 'theme-options',
    'capability'	=> 'edit_posts',
    'redirect'		=> false
  ));
endif;

/**
* Replace Flex Layout title with content
*/
function acf_flexible_content_layout_title( $title, $field, $layout, $i ) {

  // some magic (requires PHP 7.3 or up)
  // see: https://stackoverflow.com/a/40607717
  $desc = strip_tags( get_sub_field( 'title' ) ??0?: get_sub_field( 'lead' ) ??0?: get_sub_field( 'author' ) ??0?: get_sub_field( 'text' ) );

  if ( !empty($desc) ) {
    return $title . " - " . $desc = (strlen($desc) > 50) ? mb_substr($desc, 0, 50).'...' : $desc;
  }
  return $title;
}
add_filter( 'acf/fields/flexible_content/layout_title', __NAMESPACE__ . '\\acf_flexible_content_layout_title', 10, 4 );


/**
 * Modify ACF-JSON save point
 * source: https://www.advancedcustomfields.com/resources/local-json#saving-explained
 */
function acf_json_save_point( $path ) {
    $path = get_stylesheet_directory() . '/lib/fields';
    return $path;
}
add_filter('acf/settings/save_json', __NAMESPACE__ . '\\acf_json_save_point');

/**
 * Modify ACF-JSON load point
 * source: https://www.advancedcustomfields.com/resources/local-json#loading-explained
 */
function acf_json_load_point( $paths ) {
    unset($paths[0]);
    $paths[] = get_stylesheet_directory() . '/lib/fields';
    return $paths;
}
add_filter('acf/settings/load_json', __NAMESPACE__ . '\\acf_json_load_point');

/**
* Modify WYSIWYG Toolbar
* source: https://www.advancedcustomfields.com/resources/customize-the-wysiwyg-toolbars/
*/
function my_toolbars( $toolbars ) {

  // Add toolbars
  // Simple Title toolbar used for titles bacause we don't want button and stuff in it
  $toolbars['Simple Title'] = array();
  $toolbars['Simple Title'][1] = array('bold', 'italic', 'underline', 'link', 'undo', 'redo');

  // Simple Content toolbar used for all content type fields. Here you can add buttons and stuff
	$toolbars['Simple Content'] = array();
	$toolbars['Simple Content'][1] = array('bold', 'italic', 'underline', 'bullist', 'numlist', 'alignleft', 'alignright', 'aligncenter', 'link', 'undo', 'redo', 'styleselect');


	// remove the 'Basic' toolbar completely
	unset( $toolbars['Basic'] );

  // Important!
	return $toolbars;
}
add_filter( 'acf/fields/wysiwyg/toolbars' , __NAMESPACE__ . '\\my_toolbars'  );
