<?php

require_once 'vendor/autoload.php';

if (!session_id())
{
    session_start();
}

// Call Facebook API

$facebook = new \Facebook\Facebook([
  'app_id'      => '889873455194455',
  'app_secret'     => '2c5b50ddfa9255950e399a9836f61065',
  'default_graph_version'  => 'v2.12'
]);

?>