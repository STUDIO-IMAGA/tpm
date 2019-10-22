<?php use IMAGA\Theme\Assets; ?>

<?php // Get fields
$header = get_field('header');
$featured = get_field('featured');
?>


<section id="header" class="bg-gray-300 bg-grid">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-md-6 order-2">
        <div class="content">
          <h1><?php echo $header['title'];?></h1>
          <?php echo $header['introduction'];?>
        </div>
      </div>
      <div class="col-12 col-md-6 text-md-center order-1 order-md-3">
        <img class="img-fluid" src="<?php echo $header['image']['url']; ?>" alt="TPM Logo met foto invulling">
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="enumeration">
          <span>Project management & Consultancy</span>
          <span class="seperator"></span>
          <span>Enginering</span>
          <span class="seperator"></span>
          <span>Interim professionals</span>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('templates/layouts/content','tabs'); ?>

<?php get_template_part('templates/layouts/market-specific-solutions'); ?>

<?php get_template_part('templates/layouts/blog'); ?>

<?php get_template_part('templates/layouts/callout'); ?>

<?php get_template_part('templates/layouts/reviews'); ?>

<?php get_template_part('templates/layouts/projects'); ?>
