<? if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <? _e('Sorry, no results were found.', 'imaga'); ?>
  </div>
  <? get_search_form(); ?>
<? endif; ?>

<section class="bg-gray-100">
  <div class="container">
    <div class="row">

      <? while (have_posts()) : the_post(); ?>

        <? get_template_part('templates/content', get_post_type() ); ?>

      <? endwhile; ?>
    </div>
  </div>
</section>
