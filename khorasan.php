<?php

error_reporting(-1);
ini_set('display_errors', 'On');

set_time_limit(0);

# example newspaper ID with page number:
# http://khorasannews.com/?nid=19293&pid=2

# From newspaper Id $id_from to newspaper ID $id_to
# IDs can be found in khorasannews.com
$id_from = 19285;
$id_to   = 19334;

# Set to false to save all images in a single folder all together
$id_folders = true;

# Base folder to save images in
$base = "images/";

for ($id=$id_from; $id <= $id_to; $id++) {
  for( $page=1; $page < 17; $page++){
    $url = "http://khorasannews.com/content/newspaper/Version{$id}/0/Page{$page}/newspaperimg_{$id}_{$page}.jpg";
    if( get_headers($url, 1)[0] == 'HTTP/1.1 200 OK' ){
      $filename = explode('/', $url);
      $filename = end($filename);
      $filebase = ($id_folders == true) ? $base . $id . "/" . $filename : $base . $filename;
      if( ! file_exists($filebase) ){
        fopen($filebase, 'w');
        $put = file_put_contents($filebase, fopen($url, 'r'));
        if( $put !== false ){
          echo 'File saved: ' . $filebase . '<br>';
        }
      } else {
        echo 'File already existed: ' . $filebase . '<br>';
      }
    } else {
      echo 'File URL was not valid: ' . $url . '<br>';
    }
  }
}
