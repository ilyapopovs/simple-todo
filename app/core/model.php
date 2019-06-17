<?php
class Model {
    protected $data;
    public $template;

    // setting the path for the template
    public function __construct($page){
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