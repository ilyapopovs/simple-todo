<?php

class ModelMain extends Model {
    public function fetchData() {
        // Saves the tasks from the DB
        // and puts them to _SESSION for later use in the Edit page
        $this->data = $this->getAllTasks();
        $_SESSEION['data'] = $this->data;
    }

    public function getAllTasks() {
        // Supposed to make a call to the Database here
        // Retruns an array of existing tasks

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
        return $response_stub;
    }
}

?>