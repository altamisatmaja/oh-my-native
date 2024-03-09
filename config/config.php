<?php

// $file = '../config/config.properties';
// if (!file_exists($file)) {
//     echo 'File tidak ditemukan';
//     exit();
// }

// $properties = parse_ini_file($file);

(new Dotenv(__DIR__.'../.env'))->load();

define('BASE_URL', getenv('BASE_URL'));

// define('DB_HOST', $properties['dbhost']);
// define('DB_USER', $properties['dbuser']);
// define('DB_PASSWORD', $properties['dbpass']);
// define('DB_NAME', $properties['dbname']);
// define('DB_PORT', $properties['dbport']);