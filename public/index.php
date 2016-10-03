<?php

require_once '../vendor/autoload.php';

use App\Petition;

if (PHP_SAPI === 'cli') {
    $url = $argv[1];
}
else {
    $url = 'http://example.com';
    $url = (isset($_GET['url'])) ? $_GET['url'] : $url ;
}

$price = new Petition($url);