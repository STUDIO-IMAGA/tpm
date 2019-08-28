<? use IMAGA\Theme\Navigation; ?>
<? use IMAGA\Theme\Assets; ?>
<? use IMAGA\Theme\Extras; ?>

<footer class="bg-gray-900 text-gray-500">
  <div class="container">
    <div class="row pb-md-3">
      <div class="col-12">
        <? if( have_rows('social_media', 'option') ): ?>
          <span class="mr-3">Follow us on:</span>
          <? while ( have_rows('social_media', 'option') ) : the_row(); ?>
            <? $service = get_sub_field('service'); ?>
            <a class="text-gray-400  mr-3" href="<? the_sub_field('url'); ?>" title="IMAGA on <?= $service['label']; ?>" target="_blank"><span class="fa <?= $service['value']; ?>"></span></a>
          <? endwhile; ?>
        <? endif; ?>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-12 col-md-4 py-3">
        <a href="<?= esc_url( home_url('/') ); ?>">
          <img class="img-fluid mb-4" src="<?= Assets\asset_path('images/brand-full-white.png'); ?>" alt="IMAGA" width="200">
        </a>
        <?= Navigation\navigation_list( "secondary_navigation", "footer_primary_navigation"  ); ?>
      </div>
      <div class="col-12 col-md-3 py-3">
        <h5 class="lead text-light mb-3">Conversion Optimization</h5>
        <ul class="list-unstyled m-0">
          <li class="list-item py-1">
            <a href="/conversion-optimization/conversion-research" class="text-gray-500">
              Conversion Research
            </a>
          </li>
          <li class="list-item py-1">
            <a href="/conversion-optimization/conversion-strategy" class="text-gray-500">
              Conversion Strategy
            </a>
          </li>
          <li class="list-item py-1">
            <a href="/conversion-optimization/conversion-design" class="text-gray-500">
              Conversion Design
            </a>
          </li>
          <li class="list-item py-1">
            <a href="/conversion-optimization/conversion-build" class="text-gray-500">
              Conversion Build
            </a>
          </li>
        </ul>
      </div>
      <div class="col-12 col-md-5 py-3">
        <h5 class="lead text-light mb-3">Articles</h5>
        <ul class="list-unstyled m-0">
          <? Extras\recent_posts(4); ?>
        </ul>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-12">
        <span class="mr-4">
          <small>&copy; IMAGA 2018, All rights reserverd.</small>
        </span>
        <?= Navigation\navigation_inline( "tertiary_navigation", "footer_secondary_navigation" ); ?>
      </div>
    </div>
  </div>
</footer>
