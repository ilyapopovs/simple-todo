<?php

class ModelMain extends Model {
    public function fetchData() {
        // Saves the tasks from the DB
        // and puts them to _SESSION for later use in the Edit page
        $this->data = $this->getAllTasks();
        $_SESSION['data'] = $this->data;
    }

    public function getAllTasks() {
        // Makes a call to the Database
        // Returns an array of existing tasks

        $db = new mysqli(DB_LOCATION, DB_USERNAME, DB_PASSWORD, DB_NAME);
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }

        $sql = "SELECT * FROM " . DB_TABLE;
        $result = $db->query($sql);
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $arrayResponse[] = $row;
        }

        return $arrayResponse;
    }
}

?>