<?php 

class ExampleController {
    public function index() {
        echo "Hello World from example index";
    }

    public function create($params1 = 1, $params2 = 2) {

        echo "Add some example params ke-1 = $params1 dan params ke-2 $params2 ";
    }
}   