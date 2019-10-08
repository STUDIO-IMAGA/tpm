<?php

$content_left = get_sub_field('content_left');
$content_right = get_sub_field('content_right');

?>
<section class="bg-blue text-white">
  <div class="container">
    <div class="row py-6">
      <div class="col-12 col-md-5">
        <h3><?php echo $content_left['title']; ?></h3>
        <?php echo $content_left['content']; ?>
      </div>
      <div class="col-12 col-md-7">
        <h3><?php echo $content_right['title']; ?></h3>
        <?php echo $content_right['content']; ?>
      </div>
    </div>
  </div>
</section>
