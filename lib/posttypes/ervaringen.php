<?php

namespace IMAGA\Theme\Posttype\Ervaringen;

function create_post_type_ervaringen() {

  $labels = array(
    'name'                  => _x( 'Ervaringen', 'Ervaringen General Name', 'imaga' ),
    'singular_name'         => _x( 'Ervaring', 'Ervaringen Singular Name', 'imaga' ),
    'new_item'              => __( 'Nieuw Item', 'imaga' ),
    'add_new'               => __( 'Nieuw Item', 'imaga' ),
    'add_new_item'          => __( 'Nieuw Project', 'imaga' ),
  );

  $args = array(
    'label'                 => __( 'Ervaringen', 'imaga' ),
    'description'           => __( 'Ervaringen van klanten', 'imaga' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 25,
    'menu_icon'             => 'dashicons-clipboard',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );

  register_post_type( 'ervaringen', $args );
}

add_action( 'init', __NAMESPACE__ . '\\create_post_type_ervaringen' );
