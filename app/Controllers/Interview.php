<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Interview extends Controller
{
    public function isInterview()
    {
        if (!is_page()) {
          return false;
        }
        return in_array(get_post()->ID, Interview::ids());
    }

    public function all()
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

    public function ids() {
      return array_column(Interview::all(), 'ID');
    }

    public function first()
    {
      return Chapter::all()[0];
    }
}
