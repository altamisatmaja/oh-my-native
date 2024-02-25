<?php

$file = '../config/config.properties';
if (!file_exists($file)) {
    echo 'File tidak ditemukan';
    exit();
}

$properties = parse_ini_file($file);

define('BASE_URL', $properties['url']);

var_dump($properties['dbname']);

define('DB_HOST', $properties['dbhost']);
define('DB_USER', $properties['dbuser']);
define('DB_PASS', $properties['dbpass']);
define('DB_NAME', $properties['dbname']);
define('DB_PORT', $properties['dbport']);
