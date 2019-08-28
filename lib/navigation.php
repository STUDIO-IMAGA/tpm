<?

namespace IMAGA\Theme\Navigation;

use IMAGA\Theme\Navigation\Bootstrap_Walker;
use IMAGA\Theme\Navigation\Start_Depth;

use WP_Term;

function brand( $image_url, $width = 180 ){

  $html = '<a class="navbar-brand" href="' .esc_url( home_url('/') ) .'">';
  $html .= '<img src="' . $image_url . '" width="' . $width . '" class="d-inline-block align-top brand-img" alt="' . get_bloginfo('name') . '">';
  $html .= '</a>';

  return $html;
}

function toggler( $theme_location = 'primary_navigation' ){

  $html = '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="' . $theme_location . '" aria-controls="' . $theme_location . '" aria-expanded="false" aria-label="' . __('Toggle navigation','imaga') . '">';
  $html .= '<span class="navbar-toggler-icon"></span>';
  $html .= '</button>';

  return $html;
}

function navigation( $theme_location = "primary_navigation", $container_id = "primary_navigation", $start_depth = 0, $depth = 2, $menu_class = "ml-auto nav navbar-nav", $container_class = "collapse navbar-collapse navbar-toggle" ){
  return wp_nav_menu(
    array(
      'theme_location'    => $theme_location,
      'start_depth'       => $start_depth,
      'depth'             => $depth,
      'container'         => 'div',
      'container_class'   => $container_class,
      'container_id'      => $container_id,
      'menu_class'        => $menu_class,
      'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
      'walker'            => new Bootstrap_Walker\WP_Bootstrap_Navwalker()
    )
  );
}

function navigation_inline( $theme_location = "theme_location", $menu_id = "menu_id", $menu_class = "menu_class"){
  return wp_nav_menu(
    array(
      'theme_location'    => $theme_location,
      'container'         => FALSE,
      'container_class'   => FALSE,
      'container_id'      => FALSE,
      'menu_class'        => 'nav-inline '.$menu_class,
      'menu_id'           => $menu_id,
      'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
      'walker'            => new Bootstrap_Walker\WP_Bootstrap_Navwalker()
    )
	);
}

function navigation_list( $theme_location = "theme_location", $menu_id = "menu_id", $menu_class = "menu_class"){
  return wp_nav_menu(
    array(
      'theme_location'    => $theme_location,
      'container'         => FALSE,
      'container_class'   => FALSE,
      'container_id'      => FALSE,
      'menu_class'        => 'nav flex-column '.$menu_class,
      'menu_id'           => $menu_id,
      'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
      'walker'            => new Bootstrap_Walker\WP_Bootstrap_Navwalker()
    )
	);
}
