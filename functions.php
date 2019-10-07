<?php
$files = [
  'lib/setup.php',                        // Theme setup
  'lib/updater.php',                      // Theme Updater
  'lib/integrations/acf.php',             // Advanced Custom Fields
  'lib/integrations/bootstrap_walker.php',// Navigation Bootstrap Walker
  'lib/integrations/tgmpa.php',           // TGM Plugin Activation
  'lib/integrations/version-info.php',    // Version Info
  'lib/integrations/wpsvg.php',           // WPSVG
  'lib/integrations/tinymce.php',         // WYSIWYG setup

  'lib/assets.php',                       // Scripts and stylesheets
  'lib/customizer.php',                   // Theme customizer
  'lib/extras.php',                       // Custom functions
  'lib/plugins.php',                      // Required plugins
  'lib/shortcodes.php',                   // Theme shortcodes
  'lib/titles.php',                       // Page titles
  'lib/wrapper.php',                      // Theme wrapper class

  'lib/posttypes/opdrachtgevers.php',     // Custom Post Type
  'lib/posttypes/projecten.php',          // Custom Post Type
  'lib/posttypes/ervaringen.php',         // Custom Post Type

];

foreach ($files as $file):
  if (!$filepath = locate_template($file)):
    trigger_error(sprintf(__('Error locating %s for inclusion', 'imaga'), $file), E_USER_ERROR);
  endif;
  require_once $filepath;
endforeach;
unset($file, $filepath);

// Init updater
$puc = Puc_v4_Factory::buildUpdateChecker( 'https://github.com/STUDIO-IMAGA/TPM', __FILE__, 'imaga' );

$puc->getVcsApi()->enableReleaseAssets();
