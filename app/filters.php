<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

/**
 * Disable automatic excerpt generation
 */
remove_filter('get_the_excerpt', 'wp_trim_excerpt');

/**
 * Add the featured image and the except to each sub-menu item
 */
add_filter('nav_menu_item_title', function ($title, $item, $args, $depth) {
  $post_id = url_to_postid( $item->url );
  if ($depth > 0 && $post_id > 0) {
    $post = get_post($post_id);
    $thumbnail_class = 'menu-item__wrapper__thumbnail__image';
    $thumbnail = get_the_post_thumbnail($post, 'home-md', ['class' => $thumbnail_class]);
    $title = <<<EOD
      <div class="menu-item__wrapper">
        <div class="menu-item__wrapper__thumbnail">
          {$thumbnail}
        </div>
        <div class="menu-item__wrapper__title">
          {$title}
        </div>
        <div class="menu-item__wrapper__excerpt">
          {$post->post_excerpt}
        </div>
      </div>
    EOD;
  }
	return $title;
}, 10, 4);