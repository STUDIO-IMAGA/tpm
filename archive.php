<?php use IMAGA\Theme\Extras; ?>

<?php if (have_posts()) : ?>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-12">
            <?php if(is_archive()): ?>
              <h2><?php post_type_archive_title(); ?></h2>
            <h2><?php single_term_title(); ?></h2>
            <?php endif;?>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray-300 bg-grid">
    <div class="container-fluid py-6">
      <div class="row justify-content-around">
        <?php while (have_posts()) : the_post();?>
          <div class="col-12 col-sm-6 col-md-3 p-4">
            <div class="project">
              <h4><?php the_title(); ?></h4>
              <p><?php echo Extras\limit_text(get_the_content(),'30'); ?></p>
              <a href="<?php echo get_permalink(); ?>">Meer</a>
            </div>
          </div>
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
