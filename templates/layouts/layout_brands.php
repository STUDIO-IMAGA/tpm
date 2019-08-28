<? use IMAGA\Theme\Extras; ?>

<section id="section-<?= get_row_index(); ?>" class="layout-brands">
  <div class="container">
    <div class="row">
      <div class="col-12 text-md-center">
        <? if(get_sub_field('title')): ?>
          <div class="h4"><? the_sub_field('title'); ?></div>
        <? endif; ?>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12">
        <? Extras\the_brands( get_sub_field('brands') ); ?>
      </div>
    </div>
  </div>
</section>
