<?

namespace IMAGA\Theme\Extras;

use IMAGA\Theme\Setup;
use WP_Query;

/**
* Add <body> classes
*/
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
* Clean up the_excerpt()
*/
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'imaga') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');


/**
* Selecting Display heading based on length of string
* TODO: find a better function name
*/
function heading_based_on_length( $string , $wrapper = "h2", $alignment = null){

  $count = mb_strlen( $string );

  switch ($count):
    case $count < 10: $size = "display-4 mb-3"; break;
    case $count < 15: $size = "display-3 mb-3"; break;
    case $count < 30: $size = "display-2 mb-3"; break;
    case $count < 40: $size = "display-1 mb-3"; break;
    default:
    $size = "display-3 mb-3";
    break;
  endswitch;

  return '<'.$wrapper.' class="'.$size.' '.$alignment.'">'.do_shortcode($string).'</'.$wrapper.'>';

}

/**
 * Get the flexible layout and return template file.
 */
function get_layout( $row_layout ){
  if( locate_template( array('templates/layouts/'. $row_layout .'.php') ) ):
    get_template_part('templates/layouts/'. $row_layout );
  else:
    echo '<div class="alert alert-danger m-0">De layout "'.$row_layout.'" wordt niet ondersteund.</div>';
  endif;
}

/**
 * Shows recent posts as Bootstrap 4 list items.
 */
function recent_posts( $post_per_page = 4 ){
  $args = array('post_type' => 'post', 'posts_per_page' => $post_per_page);
  $query = new wp_query( $args );

  if($query->have_posts()):

    while( $query->have_posts() ) :
      $query->the_post();
      $seconds = strtotime("now") - strtotime(get_the_date("Y/m/d"));
      ?>

      <li class="list-item py-1">

        <a href="<?= get_permalink(); ?>" class="text-gray-500">
          <? the_title(); ?>
        </a>

        <? if( $seconds < 172800 ): ?>
          <span class="badge badge-info">NEW</span>
        <? endif; ?>

      </li>

      <?
    endwhile;
    wp_reset_postdata();
    wp_reset_query();
  endif;
}

/**
 * Shows all items in post type 'employees'.
 * Displayed in Bootstrap 4 styling.
 */
function the_employees(){
  $args = array('post_type' => 'employees','orderby' => 'post_date','order' => 'ASC');
  $query = new wp_query( $args );
  $modulus = 0;

  if($query->have_posts()):
    while( $query->have_posts() ) :
      $modulus++;
      $query->the_post();
      $terms = get_field('skills');
      if($modulus % 2 == 0):
        $switch_class = 'order-2';
        $switch_bg = 'bg-light';
      else:
        $switch_class = '';
        $switch_bg = '';
      endif;
      ?>
      <section id="<?= strtolower( str_replace(' ','', get_the_title() ) ); ?>" class="pt-6 <?= $switch_bg; ?>">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-md-10">
              <div class="row">
                <div class="col-4 col-md-2">
                  <img class="img-fluid img-circle box-shadow" src="<? the_post_thumbnail_url('thumbnail'); ?>" alt="<? the_title(); ?>">
                </div>
                <div class="col-8 d-block d-md-none">
                  <h1 class="display-1"><? the_title(); ?></h1>
                </div>
                <div class="col-12 col-md-10 pt-3 pt-md-0 pb-3">
                  <h1 class="display-2 d-none d-md-block"><? the_title(); ?></h1>
                  <? if( $terms ): ?>
                    <? foreach( $terms as $term ): ?>
                      <span class="badge badge-blue mr-2"><?= $term->name; ?></span>
                    <? endforeach; ?>
                  <? endif; ?>
                </div>
              </div>

              <div class="row justify-content-end">
                <div class="col-12 col-md-10">
                  <? the_content(); ?>
                </div>
              </div>
              <div class="row justify-content-end pt-3">
                <div class="col-12 col-md-10">
                  <? if( have_rows('content') ): ?>
                    <? while( have_rows('content') ): the_row(); ?>
                      <h1 class="display-1"><? the_sub_field('title'); ?></h1>
                      <div class="mb-4">
                        <? the_sub_field('content'); ?>
                      </div>
                    <? endwhile; ?>
                  <? endif; ?>
                </div>
              </div>
              <div class="row text-center py-4">
                <? if( have_rows('badges') ): ?>
                  <? while( have_rows('badges') ): the_row(); ?>
                    <? $image = get_sub_field('image'); ?>
                    <? if( !empty($image) ): ?>
                      <div class="col">
                        <img class="img-fluid" src="<?= $image['url']; ?>" alt="<? the_sub_field('title'); ?>">
                      </div>
                    <? endif; ?>
                  <? endwhile; ?>
                <? endif; ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?
    endwhile;
    wp_reset_postdata();
    wp_reset_query();
  endif;
}

/**
 * Displays all items in $post_objects
 */
function the_brands( $post_objects ){
  $modulus = 0;

  if( $post_objects ):
    ?>
    <div class="row">

      <? foreach( $post_objects as $post_object): ?>
        <div class="col-6 col-md-2-4 p-md-3">

          <? if( get_field('url' ,$post_object->ID) ):?>
            <a href="<? the_field('url', $post_object->ID); ?>" target="_blank" alt="<?= get_the_title($post_object->ID); ?>">
          <? endif;?>

              <img class="img-fluid brands-img" src="<?= get_the_post_thumbnail_url($post_object->ID, 'brand-thumbnail'); ?>" title="<?= get_the_title($post_object->ID); ?>" alt="<?= get_the_title($post_object->ID); ?>"/>

          <? if( get_field('url', $post_object->ID) ):?>
            </a>
          <? endif;?>

        </div>
      <? endforeach; ?>
    </div>
    <?
  endif;
}

/**
 * Displays all item in post type 'Reviews'
 */
function recent_reviews( $post_per_page = 4 ){
  $args = array('post_type' => 'reviews', 'posts_per_page' => $post_per_page);
  $query = new wp_query( $args );

  if($query->have_posts()):
    ?>
    <div class="review-slider w-100">
    <?
      while( $query->have_posts() ) :
        $query->the_post();
        ?>

        <div class="review">
          <div class="col-12">

            <div class="row">
              <div class="col-3 text-right">
                <img class="img-fluid img-circle" src="<?= get_the_post_thumbnail_url(); ?>" alt="<? the_title(); ?>">
              </div>
              <div class="col-9">
                <? the_title(); ?>, <? the_field('company'); ?> <? the_field('location'); ?>
                <span class="review-stars text-orange">
                  <? the_field('stars'); ?>
                </span>
                <p>
                  <small>
                    <? the_content(); ?>
                  </small>
                </p>
              </div>
            </div>
          </div>
        </div>

        <?
      endwhile;
    ?>
    </div>
    <?
    wp_reset_postdata();
    wp_reset_query();
  endif;
}

/**
 * Add Bootstrap styles to Gravityforms
 */
function add_bootstrap_container_class( $field_container, $field, $form, $css_class, $style, $field_content ) {
	$id = $field->id;
  $field_id = is_admin() || empty( $form ) ? "field_{$id}" : 'field_' . $form['id'] . "_$id";
	return '<li id="' . $field_id . '" class="' . $css_class . ' form-group">{FIELD_CONTENT}</li>';
}
add_filter( 'gform_field_container', __NAMESPACE__ . '\\add_bootstrap_container_class', 10, 6 );

/**
 * Replace Flex Layout title with content
 */
function acf_flexible_content_layout_title( $title, $field, $layout, $i ) {

  // some magic
  // see: https://stackoverflow.com/a/40607717
  $desc = strip_tags( get_sub_field( 'title' ) ??0?: get_sub_field( 'lead' ) ??0?: get_sub_field( 'author' ) ??0?: get_sub_field( 'content' ) );

	if ( !empty($desc) ) {

    return $title . " - " . $desc = (strlen($desc) > 50) ? mb_substr($desc, 0, 50).'...' : $desc;

	}
	return $title;
}
add_filter( 'acf/fields/flexible_content/layout_title', __NAMESPACE__ . '\\acf_flexible_content_layout_title', 10, 4 );

/**
 * Fire BrowserSync reload on post save
 */
add_action('save_post', function() {
  $args = ['blocking' => false];
  wp_remote_get('http://'.$_SERVER['SERVER_ADDR'].':3000/__browser_sync__?method=reload', $args);
} );
/**
 * Shorten $text by $limit amount of words
 */
function limit_text($text, $limit, $prepend) {

  $text = strip_tags($text);

  if (str_word_count($text, 0) > $limit):

    $words = str_word_count($text, 2);
    $pos = array_keys($words);
    $text = substr($text, 0, $pos[$limit]) . $prepend;

  endif;

  return $text;
}

/**
 * Remove <p> and <br>. Used for shortcodes
 */
function rautop($content){
    $array = array (
        '<p>['      => '[', //replace "<p>[" with "["
        ']</p>'     => ']', //replace "]</p>" with "]"
        ']<br />'   => ']' //replace "]<br />" with "]"
    );
    $content = strtr($content, $array); //replaces instances of the keys in the array with their values
    return $content;
}
