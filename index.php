<? //get_template_part('templates/header', 'banner'); ?>

<? if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <? _e('Sorry, no results were found.', 'imaga'); ?>
  </div>
  <? get_search_form(); ?>
<? endif; ?>

<section>
  <? while (have_posts()) : the_post(); ?>
    <? get_template_part('templates/content', get_post_type() ); ?>
  <? endwhile; ?>
</section>

<? the_posts_navigation(); ?>
