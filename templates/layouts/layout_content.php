<? // Dit word een complex document ?>

<? use IMAGA\Theme\Extras; ?>

<? if( get_sub_field('image_toggle') == FALSE ): ?>

  <section id="section-<?= get_row_index(); ?>" class="layout-content <? the_sub_field('background_color'); ?> <? the_sub_field('text_color'); ?> <? the_sub_field('text_alignment'); ?>">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8 lead">
          <? get_template_part('templates/parts/title'); ?>
          <?= do_shortcode( get_sub_field('content') ); ?>
        </div>
      </div>
    </div>
  </section>

<? else: ?>

  <? $image = get_sub_field('image_array'); ?>

  <? $image_alignment = get_sub_field('image_alignment'); ?>

  <? $image_sizing = get_sub_field('image_sizing'); ?>

  <? $padding = ( $image_alignment == 'bg-left' ) ? "pl-md-5" : "pr-md-5"; ?>

  <? $order = (  $image_alignment == 'bg-right' ) ? "order-1" : "order-3"; ?>


  <section id="section-<?= get_row_index(); ?>" class="layout-content <? the_sub_field('background_color'); ?> <? the_sub_field('text_color'); ?> <? the_sub_field('text_alignment'); ?>">
    <div class="container">
      <div class="row align-items-center">

        <? if( $image_sizing == 'cover' and $image_alignment == 'bg-left' ): ?>
          <div class="col-6"></div>
        <? endif; ?>

        <div class="col-12 col-md-6 <?= $order; ?> <?= $padding; ?> lead">
          <? get_template_part('templates/parts/title'); ?>
          <?= do_shortcode( get_sub_field('content') ); ?>
        </div>

        <? if( $image_sizing == 'contain' ): ?>

          <div class="col-12 col-md-6 order-2">
            <img class="img-fluid <? the_sub_field('image_styling'); ?>" src="<?= $image['url']; ?>" title="<?= $image['alt']; ?>" alt="<?= $image['alt']; ?>">
          </div>

        <? endif; ?>

        </div>
      </div>


      <? if( $image_sizing == 'cover' and !empty($image) ): ?>

        <div class="layout-background <?= $image_alignment; ?> bg-<?= $image_sizing; ?>" style="background-image: url('<?= $image['url']; ?>');" title="<?= $image['alt']; ?>" alt="<?= $image['alt']; ?>"></div>

      <? endif; ?>

    </section>
  <? endif; ?>
