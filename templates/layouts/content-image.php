<?php $reverse = (get_sub_field('reverse'))?'flex-lg-row-reverse':''; ?>
<?php $image = get_sub_field('image'); ?>
<section class="content-image">
  <div class="container">
    <div class="row align-items-center <?php echo $reverse; ?>">
      <div class="col-12 col-lg-6">
        <?php the_sub_field('content'); ?>
      </div>
      <div class="col-12 col-lg-6 text-center">
        <img class="img-fluid" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>"/>
      </div>
    </div>
  </div>
</section>
