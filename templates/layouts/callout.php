<?php $callout = get_field('callout'); ?>

<section class="callout">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10">
        <div class="row align-items-center pt-3 py-md-6">
          <div class="col-12 col-md-6 col-lg-5 text-white col-arrow-right">
            <h3 class="text-white"><?php echo $callout['title_left']; ?></h3>
            <?php echo $callout['content_left']; ?>
          </div>
          <div class="col-12 col-md-6 col-lg-7 text-white pl-lg-6">
            <h3 class="text-white"><?php echo $callout['title_right']; ?></h3>
            <?php echo $callout['content_right']; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
