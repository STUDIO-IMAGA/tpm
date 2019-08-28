<?
/*
Nodig omdat door een onbekende bug get_field() van een gekloonde Button Group een Array terug geeft.
Via array[0] kan ik de waarden niet bereiken.
vardump:

C:\Users\Odilio\Documents\Ampps\www\imaga.local\wp-content\themes\IMAGA\templates\header-jumbotron.php:7:
array (size=1)
  'header_image_toggle' => string 'bg-left' (length=7)

*/
use IMAGA\Theme\Assets;

if( get_field('header_toggle') ):
  foreach ( get_field('header_toggle') as $key => $value):
    $image_alignment = $value;
  endforeach;
endif;

$rows = get_field('layouts' );
$first_row = $rows[0];
$color = str_replace('bg', '', $first_row['background_color']);
?>

<div class="jumbotron jumbotron-fluid bg-white overflow-hidden mb-0 py-0">

  <div class="container">
    <div class="row">

      <? if( $image_alignment == 'bg-left' ): ?>
        <div class="col-6"></div>
        <? $padding = "pl-md-4 pl-lg-5"; ?>
      <? else: ?>
        <? $padding = "pl-md-4 pl-lg-5"; ?>
      <? endif; ?>

      <div class="col-12 col-md-6 <?= $padding; ?> pb-4 pb-md-0">
        <h1 class="display-1 mb-3"><? the_field('title'); ?></h1>
        <div class="lead mb-5"><? the_field('lead'); ?></div>
      </div>

    </div>

  </div>

  <div class="bg-container <? the_field('header_toggle'); ?> bg-cover bg-center" style="background-image: url('<? the_post_thumbnail_url(); ?>');"></div>

</div>

<div id="content"></div>

<section class="<? the_field('conversion_bg');?>">
  <div class="container py-4">

    <div class="row text-center">
      <div class="col-12 mb-4">

        <? if( get_field('conversion_category') == 'conversion-research' ): ?>
          <a href="/conversion-research">
            <img class="img-fluid category-service box-shadow bg-white" src="<?= Assets\asset_path('images/icons/conversion-research-color.svg');?>" alt="Conversion Research">
          </a>
        <? endif; ?>

        <? if( get_field('conversion_category') == 'conversion-strategy' ): ?>
          <a href="/conversion-strategy">
            <img class="img-fluid category-service box-shadow bg-white" src="<?= Assets\asset_path('images/icons/conversion-strategy-color.svg');?>" alt="Conversion Strategy">
          </a>
        <? endif; ?>

        <? if( get_field('conversion_category') == 'conversion-design' ): ?>
          <a href="/conversion-design">
            <img class="img-fluid category-service box-shadow bg-white" src="<?= Assets\asset_path('images/icons/conversion-design-color.svg');?>" alt="Conversion Design">
          </a>
        <? endif; ?>

        <? if( get_field('conversion_category') == 'conversion-build' ): ?>
          <a href="/conversion-build">
            <img class="img-fluid category-service box-shadow bg-white" src="<?= Assets\asset_path('images/icons/conversion-build-color.svg');?>" alt="Conversion Build">
          </a>
        <? endif; ?>

      </div>
    </div>

    <div class="row justify-content-center text-center">
      <div class="col-10">
        <div class="row">

          <? if( have_rows('services') ): ?>
            <? while ( have_rows('services') ) : the_row(); ?>

              <? $icon = get_sub_field('icon'); ?>

              <a class="col <?= get_sub_field('current') == TRUE ? "conversion-arrow$color conversion-service-item-active" : 'conversion-service-item' ; ?>" href="<? the_sub_field('url'); ?>">
                <img class="img-fluid" src="<?= $icon['url']; ?>" alt="<?= $icon['alt']; ?>" width="72" height="72">
                <p class="d-none d-md-block lead text-white"><? the_sub_field('title'); ?></p>
              </a>

            <? endwhile; ?>
          <? endif; ?>
        </div>
      </div>
    </div>

  </div>
</section>
