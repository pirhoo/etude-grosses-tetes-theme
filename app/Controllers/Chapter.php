<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Chapter extends Controller
{
    public function isChapter()
    {
        if (!is_page()) {
          return false;
        }
        return in_array(get_post(), Chapter::all());
    }

    public function nextChapter()
    {
        if (!Chapter::isChapter() && !Interview::isInterview()) {
          return null;
        }
        $pages = Chapter::nextPages();
        $pages_ids = Chapter::nextPagesIds();
        $current_page_index = array_search(get_post()->ID, $pages_ids);
        if ($current_page_index === false || $current_page_index >= count($pages) - 1) {
          return $pages[0];
        }
        return $pages[$current_page_index + 1];
    }

    public function hasNextChapter() {
        return !!Chapter::nextChapter();
    }

    public function nextPages () {
      return array_merge(Chapter::all(), Interview::all());
    }

    public function nextPagesIds () {
      return array_column(Chapter::nextPages(), 'ID');
    }

    public function all()
    {
        $study_root = get_page_by_title('L\'étude');
        if ( is_null($study_root) ) {
          return [];
        }

        return get_pages([
          'child_of' => $study_root->ID,
          'sort_order' => 'ASC',
          'sort_column' => 'menu_order'
        ]);
    }

    public function ids() {
      return array_column(Chapter::all(), 'ID');
    }

    public function first()
    {
      return Chapter::all()[0];
    }

    public function parent() {
      $post_parent_id = Chapter::first()->post_parent;
      return get_post($post_parent_id);
    }
}
