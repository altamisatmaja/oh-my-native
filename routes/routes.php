<?php

class Routes
{
    public function run()
    {
        $router = new App();
        $router->setDefaultController('HomeController');
        $router->setDefaultMethod('index');

        $router->get('/example', ['ExampleController', 'index']);
        $router->get('/example/index', ['ExampleController', 'index']);
        $router->get('/example/create', ['ExampleController', 'create']);
        $router->get('/example/update', ['ExampleController', 'update']);
        $router->post('/example/create_example', ['ExampleController', 'create_example']);
        $router->post('/example/update_example', ['ExampleController', 'update_example']);

        $router->get('/dashboard', ['AdminController', 'index']);
        $router->get('/dashboard/index', ['AdminController', 'index']);

        $router->get('/crud', ['FormController', 'index']);
        $router->get('/crud/index', ['FormController', 'index']);
        $router->get('/crud/insert', ['FormController', 'insert']);
        $router->get('/crud/edit/{id}', ['FormController', 'edit']);
        $router->post('/crud/edit_saham', ['FormController', 'edit_saham']);
        $router->post('/crud/insert_saham', ['FormController', 'insert_saham']);

        $router->run();
    }
}
