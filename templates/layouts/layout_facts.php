<section id="section-<?= get_row_index(); ?>" class="layout-facts <? the_sub_field('background_color'); ?> <? the_sub_field('text_color'); ?>">
  <div class="container">
    <div class="row text-center">
      <? if( have_rows('facts') ): ?>
        <? while ( have_rows('facts') ) : the_row(); ?>
          <div class="col-12 col-md">
            <h2 class="display-2"><?= ( get_sub_field('change') == 'none' )?'':get_sub_field('change'); ?><? the_sub_field('amount'); ?></h2>
            <p class="lead"><?= do_shortcode( get_sub_field('subject') ); ?></p>
          </div>
        <? endwhile; ?>
      <? endif;?>
    </div>
    <div class="row">
      <div class="col-12 text-center <? the_sub_field('text_color'); ?>">
        <small><?= do_shortcode( get_sub_field('lead') ); ?></small>
      </div>
    </div>
  </div>
</section>
