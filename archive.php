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
        <div class="col-8">
          <div class="row">
            <?php $i = 0; ?>
            <?php while (have_posts()) : the_post(); $i++; ?>
              <?php $toggler = ($i % 2)?'order-3':'order-1';?>
              <div class="project col-12 pt-3 pt-md-5 px-md-5">
                <div class="row">
                  <div class="project-featured-image col-12 col-sm-6 col-md-5 p-0 <?php echo $toggler; ?>">
                    <a href="<?php echo get_permalink(); ?>">
                      <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($post, 'project-featured-image'); ?>" alt="<?php the_title(); ?>">
                      <div class="project-opdrachtgever-logo">
                        <span class="helper"></span>
                        <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(get_field('opdrachtgever')); ?>" alt="<?php echo get_the_title(get_field('opdrachtgever')); ?>">
                      </div>
                    </a>
                  </div>
                  <div class="col-12 col-sm-6 col-md-7 bg-blue px-5 py-4 order-2">
                    <h6 class="project-titel"><?php the_title(); ?></h6>
                    <div class="project-excerpt">
                      <?php the_field('excerpt'); ?>
                    </div>
                    <div class="mt-3">
                      <a href="<?php echo get_permalink(); ?>">Verder lezen</a>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        </div>
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
