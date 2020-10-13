<?php
require 'environment.php';

$config = array();

if (ENVIRONMENT == 'development') {
    define("BASE_URL", "http://localhost/mtech/");
    $config['dbname'] = 'mtech';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'developer';
    $config['dbpass'] = 'developer';
} else {
    define("BASE_URL", "http://localhost/mtech");
    $config['dbname'] = 'mtech';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}