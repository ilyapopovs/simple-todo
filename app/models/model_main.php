<?php

class ModelMain extends Model {

    // Saves all tasks from the DB and puts them to _SESSION for later use in the Edit page
    public function fetchData() {
        $this->data = $this->getAllTasks();
        $_SESSION['data'] = $this->data;
    }

    // Makes a call to the Database, Returns an array of existing tasks
    public function getAllTasks() {
        //TODO: check for existing connection instead of reconnecting every time
        $db = new mysqli(DB_LOCATION, DB_USERNAME, DB_PASSWORD, DB_NAME);
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }

        $arrayResponse = NULL;
        $sql = "SELECT * FROM " . DB_TABLE;
        if($result = $db->query($sql)) {
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $arrayResponse[] = $row;
            }
            $result->free();
        }
        $db->close();

        return $arrayResponse;
    }

    // Sets the 'done' field of the task which id = $taskID to $newState
    public function updateTaskDone($taskID, $newState) {
        //TODO: check for existing connection instead of reconnecting every time
        $db = new mysqli(DB_LOCATION, DB_USERNAME, DB_PASSWORD, DB_NAME);
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }
        
        // query preparation to avoid injections
        $stmt = $db->prepare("UPDATE " . DB_TABLE . " SET done = ? WHERE id = ?");
        $stmt->bind_param("ii", $newState, $taskID);
        $stmt->execute();
        $stmt->close();
        $db->close();
    }
}

?>