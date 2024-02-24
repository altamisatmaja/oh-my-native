<?php

class Routes {
    public function run () {
        $router = new App();
        $router->setDefaultController('Controller');
        $router->setDefaultMethod('index');

        $router->get('/example', ['ExampleController', 'index']);
        $router->get('/example/index', ['ExampleController', 'index']);
        $router->get('/example/create', ['ExampleController', 'create']);
        $router->get('/example/update', ['ExampleController', 'update']);
        $router->post('/example/create_example', ['ExampleController', 'create_example']);
        $router->post('/example/update_example', ['ExampleController', 'update_example']);

        $router->run();
    }
}
