<?php
use IMAGA\Theme\Assets;
use IMAGA\Theme\Bootstrap_Walker;

// Set Custom Logo variables
$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
$phone = get_field('company_phone', 'options');
$navbar_color = ( is_front_page() ) ? 'navbar-dark' : 'navbar-light' ;
?>

<header class="navbar-container">

  <nav class="navbar <?php echo $navbar_color; ?> navbar-expand-md">
    <div class="container">

      <a class="navbar-brand" href="<?php echo esc_url( get_bloginfo('url') ); ?>">
        <?php if ( is_front_page() ): ?>
          <img class="brand-img d-none d-md-inline-block" src="<?php echo Assets\asset_path('images/tpm-logo-light.png'); ?>" width="150" alt="<?php echo bloginfo('name'); ?>">
          <img class="brand-img d-inline-block d-md-none" src="<?php echo Assets\asset_path('images/tpm-logo-dark.png'); ?>" width="150" alt="<?php echo bloginfo('name'); ?>">
        <?php else: ?>
          <img src="<?php echo esc_url($logo[0]); ?>" width="150" class="brand-img" alt="<?php echo bloginfo('name'); ?>">
        <?php endif; ?>
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
