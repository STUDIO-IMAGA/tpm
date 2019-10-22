<?php

namespace IMAGA\Theme\Taxonomies\Projecten\MarketSpecificSolutions;

function create_market_Specific_solutions_taxonomy() {

  $labels = array(
    'name'                       => _x( 'Solution Types', 'Skills General Name', 'imaga' ),
    'singular_name'              => _x( 'Solution Type', 'Skill Singular Name', 'imaga' ),
  );

  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => false,
    'public'                     => true,
    'show_ui'                    => false,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => false,
  );

  // Registering the taxonomy
  register_taxonomy( 'market-specific-solution', array( 'projecten' ), $args );
}

add_action( 'init', __NAMESPACE__ . '\\create_market_Specific_solutions_taxonomy' );
