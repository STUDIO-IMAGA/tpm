<?

$files = [
  'lib/setup.php',                        // Theme setup
  'lib/integrations/acf.php',             // Advanced Custom Fields
  'lib/integrations/bootstrap_walker.php',// Navigation Bootstrap Walker
  'lib/integrations/classic-editor.php',  // TGM Plugin Activation
  'lib/integrations/tgmpa.php',           // TGM Plugin Activation
  'lib/integrations/version-info.php',    // Version Info
  'lib/integrations/wpsvg.php',           // WPSVG

  'lib/assets.php',                       // Scripts and stylesheets
  'lib/customizer.php',                   // Theme customizer
  'lib/extras.php',                       // Custom functions
  'lib/plugins.php',                      // Required plugins
  'lib/shortcodes.php',                   // Theme shortcodes
  'lib/titles.php',                       // Page titles
  'lib/wrapper.php',                      // Theme wrapper class

  // 'lib/posttypes/products.php',           // Custom Post Type Products

  // 'lib/taxonomies/work-categories.php',   // Custom Taxonomy Categories
];

foreach ($files as $file):

  if (!$filepath = locate_template($file)):

    trigger_error(sprintf(__('Error locating %s for inclusion', 'imaga'), $file), E_USER_ERROR);

  endif;

  require_once $filepath;

endforeach;

unset($file, $filepath);

add_filter('use_block_editor_for_post', '__return_false', 10);
