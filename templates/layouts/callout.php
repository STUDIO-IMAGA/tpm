<?php $callout = get_field('callout'); ?>

<section class="callout">
  <div class="container">
    <div class="row justify-content-around pt-3 py-md-6">
      <div class="col-12 col-md-4 text-white col-arrow-right">
        <h3 class="text-white"><?php echo $callout['title_left']; ?></h3>
        <?php echo $callout['content_left']; ?>
      </div>
      <div class="col-12 col-md-6 text-white">
        <h3 class="text-white"><?php echo $callout['title_right']; ?></h3>
        <?php echo $callout['content_right']; ?>
      </div>
    </div>
  </div>
</section>
