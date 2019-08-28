<section class="bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <h3 class="display-1 mb-5">
          <span class="underline-green">Featured Work</span>
        </h3>
      </div>
    </div>
    <div class="row">
      <? $args = array( 'post_type' => 'work', 'orderby' => 'post_date', 'order' => 'desc' ); ?>
      <? $query = new wp_query( $args ); ?>
      <? $i = 0;?>
      <div class="card-deck mb-4">
        <? if($query->have_posts()): ?>
          <? while( $query->have_posts() ) :  $query->the_post(); $i++; ?>

            <article <? post_class('card box-shadow overflow-hidden'); ?>>
              <a class="text-body" href="<? the_permalink(); ?>">
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
                    <? the_field('lead'); ?>
                  </div>
                </div>
              </a>
            </article>

            <? if($i % 3 == 0): ?>
          </div><div class="card-deck mb-4">
            <? endif; ?>

          <? endwhile; ?>
          <? wp_reset_postdata(); ?>
          <? wp_reset_query(); ?>
        <? endif; ?>
    </div>
  </div>
</section>
