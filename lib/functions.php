<?php
// Namespaceless globally accesable functions

/**
 * Get thumbnail alt title
 */
function get_the_post_thumbnail_alt($post = null) {
  $post_thumbnail_id = get_post_thumbnail_id( $post );
  if ( ! $post_thumbnail_id ) {
    return '';
  }
  return get_post_meta(get_post_thumbnail_id($post), '_wp_attachment_image_alt', true);
}

/**
 * Echo thumbnail alt tiltle
 */
function the_post_thumbnail_alt($post = null) {
  $thumbnail_alt = get_the_post_thumbnail_alt($post);
  if ( ! $thumbnail_alt ) {
    $thumbnail_alt = '';
  }
  echo $thumbnail_alt;
}
