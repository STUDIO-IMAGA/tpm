<?php // Dit word een complex document ?>

<?php use IMAGA\Theme\Extras; ?>

<?php if( get_sub_field('image_toggle') == FALSE ): ?>

  <section id="section-<?php echo get_row_index(); ?>" class="layout-content <?php the_sub_field('background_color'); ?> <?php the_sub_field('text_color'); ?> <?php the_sub_field('text_alignment'); ?>">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8 lead">
          <?php get_template_part('templates/parts/title'); ?>
          <?php echo do_shortcode( get_sub_field('content') ); ?>
        </div>
      </div>
    </div>
  </section>

<?php else: ?>

  <?php $image = get_sub_field('image_array'); ?>

  <?php $image_alignment = get_sub_field('image_alignment'); ?>

  <?php $image_sizing = get_sub_field('image_sizing'); ?>

  <?php $padding = ( $image_alignment == 'bg-left' ) ? "pl-md-5" : "pr-md-5"; ?>

  <?php $order = (  $image_alignment == 'bg-right' ) ? "order-1" : "order-3"; ?>


  <section id="section-<?php echo get_row_index(); ?>" class="layout-content <?php the_sub_field('background_color'); ?> <?php the_sub_field('text_color'); ?> <?php the_sub_field('text_alignment'); ?>">
    <div class="container">
      <div class="row align-items-center">

        <?php if( $image_sizing == 'cover' and $image_alignment == 'bg-left' ): ?>
          <div class="col-6"></div>
        <?php endif; ?>

        <div class="col-12 col-md-6 <?php echo $order; ?> <?php echo $padding; ?> lead">
          <?php get_template_part('templates/parts/title'); ?>
          <?php echo do_shortcode( get_sub_field('content') ); ?>
        </div>

        <?php if( $image_sizing == 'contain' ): ?>

          <div class="col-12 col-md-6 order-2">
            <img class="img-fluid <?php the_sub_field('image_styling'); ?>" src="<?php echo $image['url']; ?>" title="<?php echo $image['alt']; ?>" alt="<?php echo $image['alt']; ?>">
          </div>

        <?php endif; ?>

        </div>
      </div>


      <?php if( $image_sizing == 'cover' and !empty($image) ): ?>

        <div class="layout-background <?php echo $image_alignment; ?> bg-<?php echo $image_sizing; ?>" style="background-image: url('<?php echo $image['url']; ?>');" title="<?php echo $image['alt']; ?>" alt="<?php echo $image['alt']; ?>"></div>

      <?php endif; ?>

    </section>
  <?php endif; ?>
