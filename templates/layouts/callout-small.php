<?php $callout_small = get_field('callout_small'); ?>
<section class="callout-small">
  <div class="container">
    <div class="row px-sm-3 px-md-4 px-lg-5 px-xl-6">
      <div class="col-12">
        <span><?php echo $callout_small['text']; ?></span><a class="btn btn-blue btn-agenda ml-4" href="/contact"><?php echo $callout_small['btn_text']; ?></a>
      </div>
    </div>
  </div>
</section>
