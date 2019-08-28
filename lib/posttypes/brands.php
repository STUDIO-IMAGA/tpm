<?

namespace IMAGA\Theme\Posttype\Brands;

/**
 * Brands Post Type
 */
function create_post_type_brands() {

  $labels = array(
    'name'                  => _x( 'Brands', 'Brands General Name', 'imaga' ),
    'singular_name'         => _x( 'Brand', 'Brand Singular Name', 'imaga' ),
  );

  $args = array(
    'label'                 => __( 'Brands', 'imaga' ),
    'description'           => __( 'Brands of IMAGA', 'imaga' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 25, // 5 - below posts, 15 - below links, 20 - below pages, 25 - below comments, 60 below first seperator, 65 - below plugins, 70 - below users, 75 - below tools, 80 - below settings, 100 - below second seperator
    'menu_icon'             => 'dashicons-building',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'post', // or 'post'. Change when needed.
  );

  // Registering the post type
  register_post_type( 'brands', $args );
}

add_action( 'init', __NAMESPACE__ . '\\create_post_type_brands' );
