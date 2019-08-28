<?
if (post_password_required()) {
  return;
}
?>

<section id="comments" class="comments">
  <? if (have_comments()) : ?>
    <h2><? printf(_nx('One response to &ldquo;%2$s&rdquo;', '%1$s responses to &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'imaga'), number_format_i18n(get_comments_number()), '<span>' . get_the_title() . '</span>'); ?></h2>

    <ol class="comment-list">
      <? wp_list_comments(['style' => 'ol', 'short_ping' => true]); ?>
    </ol>

    <? if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
      <nav>
        <ul class="pager">
          <? if (get_previous_comments_link()) : ?>
            <li class="previous"><? previous_comments_link(__('&larr; Older comments', 'imaga')); ?></li>
          <? endif; ?>
          <? if (get_next_comments_link()) : ?>
            <li class="next"><? next_comments_link(__('Newer comments &rarr;', 'imaga')); ?></li>
          <? endif; ?>
        </ul>
      </nav>
    <? endif; ?>
  <? endif; // have_comments() ?>

  <? if (!comments_open() && get_comments_number() != '0' && post_type_supports(get_post_type(), 'comments')) : ?>
    <div class="alert alert-warning">
      <? _e('Comments are closed.', 'imaga'); ?>
    </div>
  <? endif; ?>

  <? comment_form(); ?>
</section>
