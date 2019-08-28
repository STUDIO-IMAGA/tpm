<?

namespace IMAGA\Theme\Posttype\Products;

/**
 * Products Post Type
 */
function create_post_type_products() {

  $labels = array(
    'name'                  => _x( 'Products', 'Products General Name', 'imaga' ),
    'singular_name'         => _x( 'Product', 'Product Singular Name', 'imaga' ),
  );

  $args = array(
    'label'                 => __( 'Products', 'imaga' ),
    'description'           => __( 'Products of IMAGA', 'imaga' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 26, // 5 - below posts, 15 - below links, 20 - below pages, 25 - below comments, 60 below first seperator, 65 - below plugins, 70 - below users, 75 - below tools, 80 - below settings, 100 - below second seperator
    'menu_icon'             => 'dashicons-cart',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'post', // or 'post'. Change when needed.
  );

  // Registering the post type
  register_post_type( 'products', $args );
}
add_action( 'init', __NAMESPACE__ . '\\create_post_type_products' );

// Setting custom columns
function products_page_columns($columns) {
    $columns = array(
        'cb'          => '<input type="checkbox" />',
        'title'       => _x('Product', 'imaga'),
        'price'       => _x('Price', 'imaga'),
        'date'        => _x('Date', 'imaga'),
    );
    return $columns;
}
add_filter('manage_products_posts_columns', __NAMESPACE__ . '\\products_page_columns');

// Display price value
function products_columns($column) {
    global $post;

    if($column == 'price'){
      echo '&euro; '.get_field('price');
    }
}
add_action('manage_products_posts_custom_column', __NAMESPACE__ . '\\products_columns');

// Make the title field unsortable, the Re-Order Posts plugins handles this
function sortable_products_column( $columns ) {
    unset($columns['title']);
    return $columns;
}
add_filter( 'manage_edit-products_sortable_columns', __NAMESPACE__ . '\\sortable_products_column' );
