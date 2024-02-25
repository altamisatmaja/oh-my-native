<?php

class Controller
{
    public function view($view, $data = [])
    {
        if (count($data)) {
            extract($data);
        }

        require_once '../views/' . $view . '.blade.php';
    }

    public function redirect($url)
    {
        header('Location: ' . $url);
        exit;
    }

    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
}
