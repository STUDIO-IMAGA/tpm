<?php use IMAGA\Theme\Extras; ?>

<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>

    <?php get_template_part('templates/header','single-projecten'); ?>

    <?php if( have_rows('layouts') ): ?>
      <?php while( have_rows('layouts') ): the_row(); ?>

        <?php Extras\get_layout( get_row_layout() ); ?>

      <?php endwhile; ?>
    <?php endif; ?>

    <div class="mt-8"></div>

    <?php get_template_part('templates/layouts/reviews'); ?>

    <?php get_template_part('templates/layouts/callout'); ?>

  </article>
<?php endwhile; ?>
