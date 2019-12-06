<?php $tint = (get_sub_field('tint'))?' bg-gray-100':''; ?>
<?php $reverse = (get_sub_field('reverse'))?'flex-lg-row-reverse':''; ?>
<?php $image = get_sub_field('image'); ?>
<section class="content-image<?php echo $tint; ?>">
  <div class="container">
    <div class="row align-items-center <?php echo $reverse; ?>">
      <div class="col-12 col-lg-6 pt-4 pt-md-5">
        <?php the_sub_field('content'); ?>
      </div>
      <div class="col-12 col-lg-6 text-center">
        <img class="img-fluid" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>"/>
      </div>
    </div>
  </div>
</section>
