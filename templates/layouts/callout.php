<?php $callout_left = get_sub_field('content_left'); ?>
<?php $callout_right = get_sub_field('content_right'); ?>

<section class="callout">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10">
        <div class="row align-items-center pt-3 py-md-6">
          <div class="col-12 col-md-6 col-lg-5 text-white col-arrow-right">
            <h3 class="text-white"><?php echo $callout_left['title']; ?></h3>
            <?php echo $callout_left['content']; ?>
          </div>
          <div class="col-12 col-md-6 col-lg-7 text-white pl-lg-6">
            <h3 class="text-white"><?php echo $callout_right['title']; ?></h3>
            <?php echo $callout_right['content']; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
