<? use IMAGA\Theme\Extras; ?>

<? $alignment = get_sub_field('title_alignment') ?? ''; ?>

<? $lead_color = ( get_sub_field('text_color') == "text-white" ) ? 'text-white' : 'text-muted'; ?>

<? if( get_sub_field('title') or get_sub_field('lead') ): ?>

  <div class="row">

    <div class="col-12">

      <? if( get_sub_field('title') ): ?>

        <h2 class="<?= $alignment; ?>"><? the_sub_field('title'); ?></h2>

      <? endif; ?>

      <? if( get_sub_field('lead') ): ?>

        <p class="lead <?= $lead_color; ?>">
          <? the_sub_field('lead'); ?>
        </p>

      <? endif; ?>

    </div>

  </div>

<? endif; ?>
