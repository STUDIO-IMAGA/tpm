<? use IMAGA\Theme\Extras; ?>

<section id="section-<?= get_row_index(); ?>" class="layout-lists <? the_sub_field('background_color'); ?> <? the_sub_field('text_color'); ?>">
  <div class="container">
    <div class="row">
      <div class="col-12 text-md-center">
        <?= Extras\heading_based_on_length( get_sub_field('title') ); ?>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-7">
        <? if( have_rows('list') ): ?>
          <? while ( have_rows('list') ) : the_row(); ?>
            <h4 class="display-2"><i class="fa <? the_sub_field('icon'); ?>"></i> <? the_sub_field('title'); ?></h4>
          <? endwhile; ?>
        <? endif;?>
      </div>
    </div>
  </div>
</section>
