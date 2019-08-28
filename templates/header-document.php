<section class="header-document">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8">
        <h1 class="display-1 mb-0 text-center"><? the_field('title'); ?></h1>
        <? if( get_field('date') ): ?>
          <div class="text-center mb-4">
            <small class="text-muted"><? the_field('date'); ?></small>
          </div>
        <? endif; ?>
        <div class="lead"><? the_field('lead'); ?></div>
      </div>
    </div>
  </div>
</section>
