<?php

if (!session_id()) {
    session_start();
}

require_once '../config/config.php';
require_once '../routes/web.php';

$routes = new Routes();
$routes->run();
