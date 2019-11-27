<?php
use IMAGA\Theme\Bootstrap_Walker;
?>

<footer id="footer">
  <?php if(is_single() && 'projecten' == get_post_type()): ?>
    <?php get_template_part('templates/page-parts/callout'); ?>
  <?php endif; ?>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10">
        <div class="row">
          <div class="col-6 col-md-4 col-lg-3">
            <h6><?php echo wp_get_nav_menu_name('footer_nav_1'); ?></h6>
            <div class="seperator"></div>
            <?php
            wp_nav_menu(
              array(
                'theme_location'    => 'footer_nav_1',
                'container'         => false,
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new Bootstrap_Walker\WP_Bootstrap_Navwalker()
              )
            );
            ?>
          </div>
          <div class="col-6 col-md-4 col-lg-3">
            <h6><?php echo wp_get_nav_menu_name('footer_nav_2'); ?></h6>
            <div class="seperator"></div>
            <?php
            wp_nav_menu(
              array(
                'theme_location'    => 'footer_nav_2',
                'container'         => false,
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new Bootstrap_Walker\WP_Bootstrap_Navwalker()
              )
            );
            ?>
          </div>
          <div class="col-4 col-sm-6 col-md-4 col-lg-3 mt-4 mt-md-0">
            <h6><?php echo wp_get_nav_menu_name('footer_nav_3'); ?></h6>
            <div class="seperator"></div>
            <?php
            wp_nav_menu(
              array(
                'theme_location'    => 'footer_nav_3',
                'container'         => false,
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new Bootstrap_Walker\WP_Bootstrap_Navwalker()
              )
            );
            ?>
          </div>
          <div class="col-8 col-sm-6 col-md-4 col-lg-3 mt-4 mt-md-0">
            <h6><?php echo wp_get_nav_menu_name('footer_nav_4'); ?></h6>
            <div class="seperator"></div>
            <?php
            wp_nav_menu(
            array(
            'theme_location'    => 'footer_nav_4',
            'container'         => false,
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new Bootstrap_Walker\WP_Bootstrap_Navwalker()
            )
            );
            ?>
            <a class="contact-link" href="/contact">Alle contactgegevens</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 navbar navbar-expand nav-copyright">
        <div class="collapse navbar-collapse">
          <span class="navbar-text text-blue-light">&copy; <?php echo get_bloginfo('name').' '.date('Y'); ?></span>
          <?php
          wp_nav_menu(
            array(
              'theme_location'    => 'tertiary_navigation',
              'container'         => false,
              'menu_class'        => 'nav-inline nav navbar-nav',
              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
              'walker'            => new Bootstrap_Walker\WP_Bootstrap_Navwalker()
            )
          );
          ?>
        </div>
      </div>
    </div>
  </div>

</footer>
