<?php $tint = (get_sub_field('tint'))?' bg-gray-100':''; ?>
<section class="content<?php echo $tint; ?>">
  <div class="container">
    <div class="row justify-content-center pt-4 pt-md-5 px-sm-3 px-md-4 px-lg-5 px-xl-6">
      <div class="col-12 col-md-10 col-xl-8">
        <?php the_sub_field('content'); ?>
      </div>
    </div>
  </div>
</section>
