<?php

$content_left = get_sub_field('content_left');
$content_right = get_sub_field('content_right');

?>
<section class="bg-blue bg-grid">
  <div class="container">
    <div class="row justify-content-around py-6">
      <div class="col-12 col-md-4 text-white col-arrow-right">
        <h3 class="text-white"><?php echo $content_left['title']; ?></h3>
        <?php echo $content_left['content']; ?>
      </div>
      <div class="col-12 col-md-6 text-white">
        <h3 class="text-white"><?php echo $content_right['title']; ?></h3>
        <?php echo $content_right['content']; ?>
      </div>
    </div>
  </div>
</section>
