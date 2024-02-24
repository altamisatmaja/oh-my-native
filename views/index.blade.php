<?php

if (!session_id()) {
    session_start();
}

require_once '../routes/route.php';

$routes = new Routes();
$routes->run();

// <!DOCTYPE html>
// <html>

// <head>
//     <meta charset="utf-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <link href="../public/css/output.css" rel="stylesheet">
// </head>

// <body>
//     <p class="text-3xl font-bold underline text-blue-400">
//         apa lu liat-liat
//         </h>
// </body>

// </html>
