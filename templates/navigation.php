<?php
use IMAGA\Theme\Assets;
use IMAGA\Theme\Bootstrap_Walker;

$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
$phone = get_field('company_phone', 'options');
?>

<header class="navbar-container">
  <nav class="navbar navbar-dark navbar-expand-md">
    <div class="container">
      <a class="navbar-brand" href="<?php echo esc_url( get_bloginfo('url') ); ?>">
        <img src="<?php echo esc_url($logo[0]); ?>" width="130" class="brand-img" alt="<?php echo bloginfo('name'); ?>">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primary_navigation" aria-controls="primary_navigation" aria-expanded="false" aria-label="<?php _e('Toggle navigation','imaga'); ?>">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="primary_navigation" class="collapse navbar-collapse navbar-toggle flex-wrap">
        <?php
        // Hoofd menu
        wp_nav_menu(
          array(
            'theme_location'    => 'primary_navigation',
            'container'         => false,
            'menu_class'        => 'mr-auto nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new Bootstrap_Walker\WP_Bootstrap_Navwalker()
          )
        );
        // Secundair menu
        wp_nav_menu(
          array(
            'theme_location'    => 'secondary_navigation',
            'container'         => false,
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new Bootstrap_Walker\WP_Bootstrap_Navwalker()
          )
        );
        ?>
        <a class="navbar-text phone" href="tel:<?php echo esc_url($phone); ?>"><?php echo $phone; ?></a>
      </div>
    </div>
  </nav>
</header>
