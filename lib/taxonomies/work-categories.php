<?

namespace IMAGA\Theme\Taxonomies\Cases\Categories;

/*
 * Skills Taxonomy for Employees
 */
function create_taxonomy_category() {

  $labels = array(
    'name'                       => _x( 'Categories', 'Categories General Name', 'imaga' ),
    'singular_name'              => _x( 'Category', 'Category Singular Name', 'imaga' ),
  );

  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => false,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => false,
  );

  // Registering the taxonomy
  register_taxonomy( 'category', array( 'work' ), $args );
}

add_action( 'init', __NAMESPACE__ . '\\create_taxonomy_category' );
