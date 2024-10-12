<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Chapter extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [          
            'Chapter' => get_class($this)
        ];
    }

    public static function isChapter()
    {
        if (!is_page()) {
          return false;
        }
        $post = get_post();
        return $post->ID == Chapter::root()->ID || in_array($post, Chapter::all());
    }

    public static function nextChapter()
    {   
        $next_chapter_index = Chapter::nextChapterIndex();

        if ($next_chapter_index == -1) {
          return null;
        }

        $pages = Chapter::nextPages();
        return $pages[$next_chapter_index];
    }

    public static function nextChapterIndex() {

        if (!Chapter::isChapter() && !Interview::isInterview()) {
          return -1;
        }

        $pages_ids = Chapter::nextPagesIds();
        $current_page_index = array_search(get_post()->ID, $pages_ids);

        if ($current_page_index === false || $current_page_index >= count($pages_ids) - 1) {
          return -1;
        }

        return $current_page_index + 1;
    }

    public static function nextChapterIsInterview() {
      return in_array(Chapter::nextChapter()->ID, Interview::ids());
    }

    public static function hasNextChapter() {
        return !!Chapter::nextChapter();
    }

    public static function nextPages () {
      return array_merge(Chapter::all(), Interview::all());
    }

    public static function nextPagesIds () {
      return array_column(Chapter::nextPages(), 'ID');
    }

    public static function root() {
      return get_page_by_title('L\'étude');
    }

    public static function all()
    {
        $study_root = Chapter::root();
        if ( is_null($study_root) ) {
          return [];
        }

        return get_pages([
          'child_of' => $study_root->ID,
          'sort_order' => 'ASC',
          'sort_column' => 'menu_order'
        ]);
    }

    public static function ids() {
      return array_column(Chapter::all(), 'ID');
    }

    public static function first()
    {
      return Chapter::all()[0];
    }

    public static function parent() {
      $post_parent_id = Chapter::first()->post_parent;
      return get_post($post_parent_id);
    }
}
