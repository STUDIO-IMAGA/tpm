<div class="col-12 col-md-6 p-4 card-deck">
  <article <? post_class('card'); ?>>
    <a href="<? the_permalink(); ?>" class="text-body">

      <? if( has_post_thumbnail() ): ?>
        <img class="card-img-top" src="<? the_post_thumbnail_url(); ?>" alt="<? the_title(); ?>">
      <? endif; ?>

      <div class="card-body">
        <div class="card-title">
          <header>
            <h1 class="display-4 text-body">
              <? the_title(); ?>
            </h1>
          </header>
        </div>
        <div class="card-text text-muted">
          <? the_field('excerpt'); ?>
        </div>
      </div>
    </a>
  </article>
</div>
