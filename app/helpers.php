<?php

namespace App;

/**
 * Get a Datawrapper ID according to the given URL
 *
 * @param string $url
 * @param string $prefix
 * @return string
 */
function datawrapper_id($url = '', $prefix = '') {
  preg_match('/\/(\w+)\/(\d+)\/$/', $url, $matches);
  return $prefix . $matches[1];
}
