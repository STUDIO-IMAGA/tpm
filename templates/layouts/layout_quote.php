<?php use IMAGA\Theme\Extras; ?>

<section id="section-<?php echo get_row_index(); ?>" class="layout-quote <?php the_sub_field('background_color'); ?> <?php the_sub_field('text_color'); ?>">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8">
        <blockquote class="blockquote text-center">
          <i><?php echo Extras\heading_based_on_length( get_sub_field('quote') ); ?></i>
          <footer class="blockquote-footer <?php the_sub_field('text_color'); ?>"><cite title="<?php the_sub_field('author'); ?>"><?php the_sub_field('author'); ?></cite></footer>
        </blockquote>
      </div>
    </div>
  </div>
</section>
