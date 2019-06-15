<?php
class Controller {
    protected $model;

    public function __construct($model){
        $this->model = $model;
    }

    public function clicked() {
        $this->model->setData("Updated Data");
    }
}

?>