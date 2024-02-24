<?php

function handle_routes($class_name)
{
    $path_to_file = '../routes/' . $class_name . '.php';
    if (file_exists($path_to_file)) {
        require_once ($path_to_file);
    }
}

spl_autoload_register('handle_routes');
