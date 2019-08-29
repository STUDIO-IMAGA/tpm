<?php use IMAGA\Theme\Extras; ?>

<?php $alignment = get_sub_field('title_alignment') ?? ''; ?>

<?php $lead_color = ( get_sub_field('text_color') == "text-white" ) ? 'text-white' : 'text-muted'; ?>

<?php if( get_sub_field('title') or get_sub_field('lead') ): ?>

  <div class="row">

    <div class="col-12">

      <?php if( get_sub_field('title') ): ?>

        <h2 class="<?php echo $alignment; ?>"><?php the_sub_field('title'); ?></h2>

      <?php endif; ?>

      <?php if( get_sub_field('lead') ): ?>

        <p class="lead <?php echo $lead_color; ?>">
          <?php the_sub_field('lead'); ?>
        </p>

      <?php endif; ?>

    </div>

  </div>

<?php endif; ?>
