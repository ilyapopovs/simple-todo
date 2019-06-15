<?php

class ModelMain extends Model {
    public function __construct($page){
        $response_stub = [
            [
                "id" => "1",
                "title" => "Make Structured Base",
                "description" => "Create a nearly empty, but working base for the project.",
                "date_added" => date("d.m.Y", mktime(23, 1, 30, 6, 14, 2019)),
                "done" => true
            ], [
                "id" => "2",
                "title" => "Design The Main Page",
                "description" => "Make it look good :)",
                "date_added" => date("d.m.Y", mktime(23, 30, 30, 6, 15, 2019)),
                "done" => false
            ]
        ];

        $this->data = $response_stub;
        $this->template = "templates/template_" . $page . ".php";
    }
}

?>