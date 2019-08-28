<? use IMAGA\Theme\Extras; ?>
<article <? post_class(); ?>>

  <? get_template_part('templates/header','jumbotron'); ?>

  <? if( have_rows('layouts') ): ?>
    <? while( have_rows('layouts') ): the_row(); ?>

      <? Extras\get_layout( get_row_layout() ); ?>

    <? endwhile; ?>
  <? endif; ?>

</article>
