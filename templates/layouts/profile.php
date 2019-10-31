<?php $tint = (get_sub_field('tint'))?' bg-gray-100':''; ?>
<?php $reverse = (get_sub_field('reverse'))?' flex-lg-row-reverse':''; ?>
<?php $image = get_sub_field('avatar'); ?>
<section class="profile<?php echo $tint;?>">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 py-4">
        <div class="row<?php echo $reverse;?>">
          <div class="col-8 pt-4">
            <h3><?php the_sub_field('title'); ?> <span><?php the_sub_field('job_title'); ?></span></h3>
            <?php the_sub_field('content'); ?>
          </div>
          <div class="col-4 p-4">
            <img class="img-fluid img-rounded" src="<?php echo $image['sizes']['large'];?>" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
