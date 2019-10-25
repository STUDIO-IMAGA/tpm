<?php use IMAGA\Theme\Extras; ?>

<?php if (have_posts()) : ?>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-12 pt-6 pb-4">
            <?php if(is_archive()): ?>
              <h1><?php post_type_archive_title(); ?></h1>
              <h2><?php single_term_title(); ?></h2>
            <?php endif;?>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <?php while (have_posts()) : the_post();?>
          <a class="col-12 col-sm-6 col-md-3 project" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');" href="<?php echo get_permalink(); ?>">
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
            <div class="hover">
              <p><?php echo Extras\limit_text(get_the_content(),'30'); ?></p>
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
