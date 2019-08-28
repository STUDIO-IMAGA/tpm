
<? use IMAGA\Theme\Extras; ?>

<? get_template_part('templates/header','jumbotron'); ?>

<? if( have_rows('layouts') ): ?>
  <? while( have_rows('layouts') ): the_row(); ?>

    <? Extras\get_layout( get_row_layout() ); ?>

  <? endwhile; ?>
<? endif; ?>

<? get_template_part('templates/parts/frontpage', 'steps'); ?>

<? get_template_part('templates/parts/frontpage', 'certifications'); ?>
