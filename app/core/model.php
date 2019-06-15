<?php
class Model {
    protected $data;
    public $template;

    public function __construct($page){
        $this->data = "Click here to update data";
        $this->template = "templates/template_" . $page . ".php";
    }

    public function getData() {
        return $this->data;
    }

    public function setData($newData) {
        $this->data = $newData;
    }

    public function getTemplate() {
        return $this->template;
    }

    public function setTemplate($newTemplate) {
        $this->template = $newTemplate;
    }
}
?>