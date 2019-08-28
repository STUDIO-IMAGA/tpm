<section class="header-reviews bg-red text-white py-md-7">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-5">
        <h1 class="display-1">Meet our customers.</h1>
        <p class="lead">See what business owners have to say about how IMAGA improves their sales and reaches new customers.</p>
      </div>
      <div class="col-11 col-md-6 review">
        <div class="row box-shadow bg-white text-body p-2">
          <div class="col-3 text-right">
            <img class="img-fluid img-circle" src="<?= get_the_post_thumbnail_url(); ?>" alt="<? the_title(); ?>">
          </div>
          <div class="col-9">
            <? the_title(); ?>, <? the_field('company'); ?> <? the_field('location'); ?>
            <span class="review-stars text-orange">
              <? the_field('stars'); ?>
            </span>
            <p>
              <small>
                <? the_content(); ?>
              </small>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
