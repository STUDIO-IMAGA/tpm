<? use IMAGA\Theme\Extras; ?>
<? while (have_posts()) : the_post(); ?>
  <article <? post_class(); ?>>

    <? get_template_part('templates/header','single'); ?>

    <? if( have_rows('layouts') ): ?>
      <? while( have_rows('layouts') ): the_row(); ?>

        <? Extras\get_layout( get_row_layout() ); ?>

      <? endwhile; ?>
    <? endif; ?>

  </article>
<? endwhile; ?>

<? get_template_part('templates/parts/related-posts'); ?>
