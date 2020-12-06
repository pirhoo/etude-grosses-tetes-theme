<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function studyChapters()
    {
        return Chapter::all();
    }

    public function studyParent()
    {
      return Chapter::parent();
    }

    public function studyParentContent()
    {
      $content = FrontPage::studyParent()->post_content;
      $content = apply_filters( 'the_content', $content);
      $content = str_replace( ']]>', ']]&gt;', $content);
      return $content;
    }

    public function interviews()
    {
      return Interview::all();
    }

    public function methodology()
    {
      return get_page_by_title('Methodologie');
    }

    public function methodology_permalink()
    {
      return get_permalink(FrontPage::methodology());
    }
}
