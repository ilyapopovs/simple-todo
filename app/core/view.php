<?php
class View {
    protected $model;
    protected $controller;

    public function __construct($controller,$model) {
        $this->controller = $controller;
        $this->model = $model;
    }

    // will be getting data from model and printing html code with it
    public function show() {
        
    }
}

?>
