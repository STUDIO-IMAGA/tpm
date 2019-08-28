<?
/*
Nodig omdat door een onbekende bug get_field() van een gekloonde Button Group een Array terug geeft.
Via array[0] kan ik de waarden niet bereiken.
vardump:

C:\Users\Odilio\Documents\Ampps\www\imaga.local\wp-content\themes\IMAGA\templates\header-jumbotron.php:7:
array (size=1)
  'header_image_toggle' => string 'bg-left' (length=7)

*/

if( get_field('header_toggle') ):
  foreach ( get_field('header_toggle') as $key => $value):
    $image_alignment = $value;
  endforeach;
endif;
?>

<div class="jumbotron jumbotron-fluid bg-white overflow-hidden mb-0 py-0">

  <div class="container">
    <div class="row">

      <? if( $image_alignment == 'bg-left' ): ?>
        <div class="col-6"></div>
        <? $padding = "pl-md-4 pl-lg-5"; ?>
      <? else: ?>
        <? $padding = "pr-md-4 pr-lg-5"; ?>
      <? endif; ?>

      <div class="col-12 col-md-6 <?= $padding; ?> pb-4 pb-md-0">
        <h1 class="display-1 mb-3"><? the_field('title'); ?></h1>
        <div class="lead mb-5"><? the_field('lead'); ?></div>
      </div>

      <a class="scroll-arrow bg-yellow" href="#content" title="Scroll to content"><i class="fa fa-chevron-down"></i></a>

    </div>
  </div>

  <div class="bg-container <? the_field('header_toggle'); ?> bg-cover bg-center" style="background-image: url('<? the_post_thumbnail_url(); ?>');"></div>

</div>

<div id="content"></div>
