<?php
ini_set('zlib.output_compression_level',6); if(substr_count($_SERVER['HTTP_ACCEPT_ENCODING'],'gzip')) ob_start('ob_gzhandler'); else ob_start();
use IMAGA\Theme\Setup;
use IMAGA\Theme\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?> >
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'imaga'); ?>
      </div>
    <![endif]-->

    <?php do_action('get_header'); ?>

    <?php get_template_part('templates/navigation'); ?>

    <div class="wrap" role="document">

      <div class="fixed-bottom">
        <div class="d-block d-sm-none">
          XS
        </div>
        <div class="d-none d-sm-block d-md-none">
          SM
        </div>
        <div class="d-none d-md-block d-lg-none">
          MD
        </div>
        <div class="d-none d-lg-block d-xl-none">
          LG
        </div>
        <div class="d-none d-xl-block">
          XL
        </div>
      </div>

      <main>

        <?php include Wrapper\template_path(); ?>

      </main>

    </div>

    <?php get_template_part('templates/footer'); ?>

    <?php do_action('get_footer');?>

    <?php wp_footer(); ?>

  </body>

</html>
<?php ob_end_flush();?>
