<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function studyChapters()
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
}
