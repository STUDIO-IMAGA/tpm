<section id="section-<?php echo get_row_index(); ?>" class="layout-pricing <?php the_sub_field('background_color'); ?>">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6">
        <h1 class="display-1"><?php the_sub_field('title'); ?></h1>
        <div class="lead">
          <?php the_sub_field('lead'); ?>
        </div>
      </div>
      <div class="col-12 col-md-6">

        <?php if( get_sub_field('price_prepend') ): ?>
          <sup class="text-muted"><?php the_sub_field('price_prepend'); ?></sup>
        <?php endif; ?>

        <h2>
          <?php if( get_sub_field('price_before') ): ?>
            <sup class="text-red"><small><s>&euro;<?php the_sub_field('price_before'); ?>,-</s></small></sup>
          <?php endif; ?>
          &euro; <?php the_sub_field('price'); ?>,-
        </h2>

        <?php if( get_sub_field('price_append') ): ?>
          <sup class="text-muted"><?php the_sub_field('price_append'); ?></sup>
        <?php endif; ?>

        <div><?php the_sub_field('summary'); ?></div>
      </div>
    </div>
  </div>
</section>
