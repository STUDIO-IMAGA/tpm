<section class="header-work mb-5">
  <div class="container p-0">
    <div class="row">
      <div class="col-12">
        <div class="bg-container bg-cover bg-center" style="background-image: url('<? the_post_thumbnail_url(); ?>');"></div>
      </div>
    </div>
    <div class="row justify-content-center description">
      <div class="col-12 col-md-8 pt-4 pb-5  px-4 text-center bg-white box-shadow">
        <h1 class="display-2 mb-3"><? the_field('title'); ?></h1>
        <div class="lead"><? the_field('lead'); ?></div>
        <? if( get_field('site_url') ): ?>
          <div class="site-url">
            <small><a class="" href="<? the_field('site_url'); ?>" target="_blank">Visit the website</a></small>
          </div>
        <? endif; ?>
        <a class="scroll-arrow bg-yellow" href="#content" title="Scroll to content"><i class="fa fa-chevron-down"></i></a>
      </div>
    </div>
  </div>
</section>
<div id="content"></div>
