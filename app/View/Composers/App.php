<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
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
            'siteName' => $this->siteName(),
            'app' => $this
        ];
    }

    /**
     * Returns the page title.
     *
     * @return string
     */
    public function title()
    {
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_404()) {
            return __('Page introuvable', 'sage');
        }
        return get_the_title();
    }


    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }

    public static function year()
    {
        return date("Y");
    }

    public function legal()
    {
      return get_page_by_title('Mentions Légales');
    }

    public function legal_permalink()
    {
      return get_permalink(App::legal());
    }
}
