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
      'title'   => __( 'Kopteksten', 'imaga' ),
      'items'   => array(
        array(
          'title' => 'H1',
          'block' => 'h1',
        ),
        array(
          'title' => 'H2',
          'block' => 'h2',
        ),
        array(
          'title' => 'H3',
          'block' => 'h3',
        ),
        array(
          'title' => 'H4',
          'block' => 'h4',
        ),
        array(
          'title' => 'H5',
          'block' => 'h5',
        ),
        array(
          'title' => 'H6',
          'block' => 'h6',
        ),
      ),
    ),
    array(
      'title'	=> __( 'Knoppen', 'imaga' ),
      'items'	=> array(
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
      ),
    ),
    array(
      'title'	=> __( 'Knop icons', 'imaga' ),
      'items'	=> array(
        array(
          'title' => 'Pijl',
          'selector' => 'a',
          'classes' => 'btn-arrow'
        ),
        array(
          'title' => 'Agenda',
          'selector' => 'a',
          'classes' => 'btn-arrow'
        ),
      ),
    ),
    array(
      'title' => 'Lijst met Checkmarks',
      'selector' => 'ul',
      'wrapper' => true,
      'classes' => 'list-checkmark'
    ),
  );
  // Insert the array, JSON ENCODED, into 'style_formats'
  $init_array['style_formats'] = json_encode($style_formats);
  return $init_array;
}
add_filter('tiny_mce_before_init', __NAMESPACE__ . '\\imaga_mce_before_init_insert_formats');
