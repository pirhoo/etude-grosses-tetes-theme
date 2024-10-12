<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class FrontPage extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'index',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [          
            'FrontPage' => get_class($this)
        ];
    }
    
    public static function studyChapters()
    {
        return Chapter::all();
    }

    public static function studyParent()
    {
      return Chapter::parent();
    }

    public static function studyParentContent()
    {
      $content = FrontPage::studyParent()->post_content;
      $content = apply_filters( 'the_content', $content);
      $content = str_replace( ']]>', ']]&gt;', $content);
      return $content;
    }

    public static function interview()
    {
      return Interview::first();
    }

    public static function interviews()
    {
      return Interview::all();
    }

    public static function methodology()
    {
      return get_page_by_title('Methodologie');
    }

    public static function methodologyPermalink()
    {
      return get_permalink(FrontPage::methodology());
    }
}
