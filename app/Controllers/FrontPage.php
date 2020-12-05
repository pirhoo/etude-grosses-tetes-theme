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
}
