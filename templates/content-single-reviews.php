
<? use IMAGA\Theme\Extras; ?>


<? while (have_posts()) : the_post(); ?>

  <article <? post_class(); ?>>
    <? get_template_part('templates/header','reviews'); ?>
  </article>
  
<? endwhile; ?>

<? get_template_part('templates/parts/related-posts'); ?>
