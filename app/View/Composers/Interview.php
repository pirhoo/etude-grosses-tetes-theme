<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Interview extends Composer
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
            'Interview' => get_class($this)
        ];
    }

    public static function isInterview()
    {
        if (!is_page()) {
          return false;
        }
        return in_array(get_post()->ID, Interview::ids());
    }

    public static function all()
    {
        $study_root = get_page_by_title('Interviews');
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
      return array_column(Interview::all(), 'ID');
    }

    public static function first()
    {
      return Interview::all()[0];
    }
}
