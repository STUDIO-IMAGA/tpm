<?php

namespace IMAGA\Theme\Posttype\Opdrachtgevers;

function create_post_type_opdrachtgevers() {

  $labels = array(
    'name'                  => _x( 'Opdrachtgevers', 'Opdrachtgevers General Name', 'imaga' ),
    'singular_name'         => _x( 'Opdrachtgever', 'Opdrachtgever Singular Name', 'imaga' ),
    'new_item'              => __( 'Nieuw Item', 'imaga' ),
    'add_new'               => __( 'Nieuw Item', 'imaga' ),
    'add_new_item'          => __( 'Nieuwe Opdrachtgever', 'imaga' ),
  );

  $args = array(
    'label'                 => __( 'Opdrachtgevers', 'imaga' ),
    'description'           => __( 'Onze opdrachtgevers', 'imaga' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'thumbnail', ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 25,
    'menu_icon'             => 'dashicons-building',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'post',
  );

  // Registering the post type
  register_post_type( 'opdrachtgevers', $args );
}

add_action( 'init', __NAMESPACE__ . '\\create_post_type_opdrachtgevers' );
