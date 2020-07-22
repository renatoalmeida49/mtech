<?php
require 'environment.php';

$config = array();

if (ENVIRONMENT == 'development') {
    define("BASE_URL", "http://localhost/mtech");
    $config['dbname'] = 'mtech';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['password'] = '';
} else {
    define("BASE_URL", "http://localhost/mtech");
    $config['dbname'] = 'mtech';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['password'] = '';
}