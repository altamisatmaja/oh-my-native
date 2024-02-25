<?php

class Controller
{
    public function view($view, $data = [])
    {
        if (count($data)) {
            extract($data);
        }

        $viewPath = '../views/' . $view . '.blade.php';
        
        if (file_exists($viewPath)) {
            require_once $viewPath;
        } else {
            die('View file not found.');
        }
    }

    public function redirect($url)
    {
        header('Location: ' . $url);
        exit;
    }

    public function model($model)
    {
        $modelPath = '../app/models/' . $model . '.php';
        // var_dump($modelPath);

        if (file_exists($modelPath)) {
            // echo "File ada";
            require_once $modelPath;
            return new $model;
        } else {
            die('Model file not found.');
        }
    }
}
