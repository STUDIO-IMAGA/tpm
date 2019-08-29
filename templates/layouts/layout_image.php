<?
use IMAGA\Theme\Extras;

$image = get_sub_field('image'); ?>

<?php if( !empty($image) ): ?>

  <?php if( get_sub_field('appearence') == 'cover' ): ?>

    <section id="section-<?php echo get_row_index(); ?>" class="layout-image bg-cover <?php the_sub_field('background_color'); ?>" style="background-image: url(<?php echo $image['url']; ?>); min-height:<?php the_sub_field('height'); ?>px">
    </section>

  <?php elseif( get_sub_field('appearence') == 'contain' ): ?>

    <section id="section-<?php echo get_row_index(); ?>" class="layout-image <?php the_sub_field('background_color'); ?>">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          </div>
        </div>
      </div>
    </section>

  <?php endif; ?>

<?php endif; ?>
