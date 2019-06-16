<?php
class ControllerMain extends Controller {
    public function __construct($model){
        parent::__construct($model);
        $this->model->fetchData();
    }
}

?>