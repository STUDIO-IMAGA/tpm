<section id="section-<?= get_row_index(); ?>" class="layout-pricing <? the_sub_field('background_color'); ?>">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6">
        <h1 class="display-1"><? the_sub_field('title'); ?></h1>
        <div class="lead">
          <? the_sub_field('lead'); ?>
        </div>
      </div>
      <div class="col-12 col-md-6">

        <? if( get_sub_field('price_prepend') ): ?>
          <sup class="text-muted"><? the_sub_field('price_prepend'); ?></sup>
        <? endif; ?>

        <h2>
          <? if( get_sub_field('price_before') ): ?>
            <sup class="text-red"><small><s>&euro;<? the_sub_field('price_before'); ?>,-</s></small></sup>
          <? endif; ?>
          &euro; <? the_sub_field('price'); ?>,-
        </h2>

        <? if( get_sub_field('price_append') ): ?>
          <sup class="text-muted"><? the_sub_field('price_append'); ?></sup>
        <? endif; ?>

        <div><? the_sub_field('summary'); ?></div>
      </div>
    </div>
  </div>
</section>
