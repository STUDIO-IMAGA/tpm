<?php use IMAGA\Theme\Extras; ?>

<?php if (have_posts()) : ?>
  <section id="header">
    <div class="container">
      <div class="row align-items-center px-sm-3 px-md-4 px-lg-5 px-xl-6">
        <div class="col-12 col-md-6">
          <div class="content py-md-6">
            <h1><?php the_field('title','option'); ?></h1>
            <?php the_field('introduction','option'); ?>
          </div>
        </div>
        <?php if( has_post_thumbnail() ): ?>
          <div class="col-12 col-md-6 text-center">
            <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_post_thumbnail_alt(); ?>">
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <section class="projecten-archive">
    <div class="container">
      <div class="row justify-content-center">
        <?php while (have_posts()) : the_post();?>
          <a class="col-12 col-sm-6 col-md-4 col-lg-3 pt-3 pt-md-5" href="<?php echo get_permalink(); ?>">
            <div class="project" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');">
              <div class="project-opdrachtgever-logo">
                <span class="helper"></span>
                <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(get_field('opdrachtgever')); ?>" alt="<?php echo get_the_title(get_field('opdrachtgever')); ?>">
              </div>
              <div class="project-opdrachtgever">
                <?php echo get_the_title(get_field('opdrachtgever')); ?>
              </div>
              <div class="project-titel">
                <?php the_title(); ?>
              </div>
            </div>
          </a>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
<?php endif; ?>


<?php if (!have_posts()) : ?>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Helaas,</h1>
        <p>We konden niks vinden.</p>
        <a class="btn btn-black" href="/" target="_self">Terug naar home</a>
      </div>
    </div>
  </div>
<?php endif; ?>

<section class="archive content-producten">
  <div class="container">
    <div class="row producten">
      <?php while (have_posts()) : the_post(); ?>
        <div class="col-12 col-sm-6 col-md-4 mb-5 product">
          <?php get_template_part('templates/content', get_post_type() ); ?>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>

<?php the_posts_navigation(); ?>
