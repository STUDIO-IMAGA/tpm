<section id="section-<?= get_row_index(); ?>" class="layout-columns <? the_sub_field('background_color'); ?> <? the_sub_field('text_color'); ?> <? the_sub_field('title_alignment'); ?>">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <? if(get_sub_field('title')): ?>
          <div class="h1 mb-4"><?= do_shortcode( get_sub_field('title') ); ?></div>
        <? endif;?>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <? if( have_rows('columns') ): ?>
          <? $box_shadow = (get_sub_field('box_shadow') == true)?'box-shadow':''; ?>
          <div class="card-deck">
            <? while ( have_rows('columns') ) : the_row(); ?>
              <? $image = get_sub_field('image'); ?>
              <div class="card <?= $box_shadow; ?>">
                <div class="card-body">
                  <? if( !empty($image) ): ?>
                    <div class="text-center">
                      <img class="img-fluid" src="<?= $image['url'] ?>" alt="<? the_sub_field('title'); ?>">
                    </div>
                  <? endif; ?>
                  <div class="card-text <? the_sub_field('text_alignment'); ?> <? the_sub_field('text_color'); ?>">
                    <div class="lead mb-3">
                      <b><? the_sub_field('title'); ?></b>
                    </div>
                    <div class="lead">
                      <?= do_shortcode( get_sub_field('content') ); ?>
                    </div>
                  </div>
                </div>
                <? if( get_sub_field('footer') ): ?>
                <div class="card-footer">
                  <?= do_shortcode( get_sub_field('footer') ); ?>
                </div>
              <? endif; ?>
              </div>
            <? endwhile; ?>
          </div>
        <? endif;?>
      </div>
    </div>
  </div>
</section>
