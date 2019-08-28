<?
ini_set('zlib.output_compression_level',6); if(substr_count($_SERVER['HTTP_ACCEPT_ENCODING'],'gzip')) ob_start('ob_gzhandler'); else ob_start();
use IMAGA\Theme\Setup;
use IMAGA\Theme\Wrapper;

?>

<!doctype html>
<html <? language_attributes(); ?>>
  <? get_template_part('templates/head'); ?>
  <body <? body_class(); ?> >
    <!--[if IE]>
      <div class="alert alert-warning">
        <? _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'imaga'); ?>
      </div>
    <![endif]-->

    <? do_action('get_header'); ?>

    <? get_template_part('templates/header'); ?>

    <div class="wrap" role="document">

      <main>

        <? include Wrapper\template_path(); ?>

      </main>

    </div>

    <a id="scroll-to-top" href="#" title="Scroll to top"><i class="fa fa-chevron-up"></i></a>

    <? do_action('get_footer');?>

    <? get_template_part('templates/footer'); ?>

    <? wp_footer(); ?>

  </body>

</html>
<?php ob_end_flush();?>
