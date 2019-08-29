<?php
/**
 * Theme plugins for production
 */

add_action( 'after_setup_theme', function() {

    $plugins = array(
      array(
        'name'               => 'Yoast SEO',
        'slug'               => 'wordpress-seo',
        'required'           => true,
      ),
      array(
        'name'               => 'ACF Content Analysis for Yoast SEO',
        'slug'               => 'acf-content-analysis-for-yoast-seo',
        'required'           => true,
      ),
      array(
        'name'               => 'Duplicate Post',
        'slug'               => 'duplicate-post',
      ),
    );

    $config = array(
        'id'           => 'imaga',
        'default_path' => get_template_directory() . '/lib/plugins',
        'menu'         => 'tgmpa-install-plugins',
        'parent_slug'  => 'themes.php',
        'capability'   => 'edit_theme_options',
        'has_notices'  => true,
        'dismissable'  => true,
        'is_automatic' => true,
    );

    tgmpa( $plugins, $config );
});
