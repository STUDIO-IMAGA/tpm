<?php

namespace IMAGA\Theme\TinyMCE;


// Callback function to insert 'styleselect' into the $buttons array
function imaga_mce_buttons( $buttons ) {
    array_unshift($buttons, 'styleselect');
    return $buttons;
}
add_filter('mce_buttons', __NAMESPACE__ . '\\imaga_mce_buttons');

function imaga_mce_before_init_insert_formats( $init_array ) {
  $style_formats = array(
      // Each array child is a format with it's own settings
      array(
          'title' => 'Witte Knop',
          'inline' => 'a',
          'classes' => 'btn btn-white',
          'attributes' => array( 'href' => '#' )
      ),
      array(
          'title' => 'Blauwe Knop',
          'inline' => 'a',
          'classes' => 'btn btn-blue',
          'attributes' => array( 'href' => '#' )
      ),
  );
  // Insert the array, JSON ENCODED, into 'style_formats'
  $init_array['style_formats'] = json_encode($style_formats);
  return $init_array;
}
add_filter('tiny_mce_before_init', __NAMESPACE__ . '\\imaga_mce_before_init_insert_formats');
