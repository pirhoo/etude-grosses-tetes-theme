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
        global $wpdb;
        $title = $wpdb->esc_like('Interview de ').'%';
        $query = $wpdb->prepare(<<<EOD
          SELECT * FROM $wpdb->posts
          WHERE post_title LIKE %s
            AND post_status = 'publish'
          ORDER BY menu_order ASC
        EOD, $title);
        return $wpdb->get_results($query);
    }

    public function ids() {
      return array_column(Interview::all(), 'ID');
    }

    public function first()
    {
      return Chapter::all()[0];
    }
}
