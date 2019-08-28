<?

namespace IMAGA\Theme\Posttype\Work;

/**
 * Brands Post Type
 */
function create_post_type_work() {

  $labels = array(
    'name'                  => _x( 'Work', 'Work General Name', 'imaga' ),
    'singular_name'         => _x( 'Work', 'Work Singular Name', 'imaga' ),
  );

  $args = array(
    'label'                 => __( 'Work', 'imaga' ),
    'description'           => __( 'Our work', 'imaga' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'            => array( 'category' ), // Add taxonomies
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 25, // 5 - below posts, 15 - below links, 20 - below pages, 25 - below comments, 60 below first seperator, 65 - below plugins, 70 - below users, 75 - below tools, 80 - below settings, 100 - below second seperator
    'menu_icon'             => 'dashicons-clipboard',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'post', // or 'post'. Change when needed.
  );

  // Registering the post type
  register_post_type( 'work', $args );
}

add_action( 'init', __NAMESPACE__ . '\\create_post_type_work' );
