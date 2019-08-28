<? use IMAGA\Theme\Extras; ?>

<section id="section-<?= get_row_index(); ?>" class="layout-quote <? the_sub_field('background_color'); ?> <? the_sub_field('text_color'); ?>">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8">
        <blockquote class="blockquote text-center">
          <i><?= Extras\heading_based_on_length( get_sub_field('quote') ); ?></i>
          <footer class="blockquote-footer <? the_sub_field('text_color'); ?>"><cite title="<? the_sub_field('author'); ?>"><? the_sub_field('author'); ?></cite></footer>
        </blockquote>
      </div>
    </div>
  </div>
</section>
