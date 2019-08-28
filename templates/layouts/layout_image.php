<?
use IMAGA\Theme\Extras;

$image = get_sub_field('image'); ?>

<? if( !empty($image) ): ?>

  <? if( get_sub_field('appearence') == 'cover' ): ?>

    <section id="section-<?= get_row_index(); ?>" class="layout-image bg-cover <? the_sub_field('background_color'); ?>" style="background-image: url(<?= $image['url']; ?>); min-height:<? the_sub_field('height'); ?>px">
    </section>

  <? elseif( get_sub_field('appearence') == 'contain' ): ?>

    <section id="section-<?= get_row_index(); ?>" class="layout-image <? the_sub_field('background_color'); ?>">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <img class="img-fluid" src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" />
          </div>
        </div>
      </div>
    </section>

  <? endif; ?>

<? endif; ?>
