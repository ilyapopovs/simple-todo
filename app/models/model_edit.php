<?php
class ModelEdit extends Model {
    protected $taskID; // ID from the Database

    public function __construct($page){
        parent::__construct($page);
    }

    public function setTaskID($newTaskID) {
        $this->taskID = $newTaskID;
    }

    public function getTaskID() {
        return $this->taskID;
    }

    // Deletes a task being edited
    public function deleteTask() {
        //TODO: check for existing connection instead of reconnecting every time
        $db = new mysqli(DB_LOCATION, DB_USERNAME, DB_PASSWORD, DB_NAME);
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }

        // query preparation to avoid injections
        $stmt = $db->prepare("DELETE FROM " . DB_TABLE . " WHERE id = ?");
        $stmt->bind_param("i", $this->taskID);
        $stmt->execute();
        $stmt->close();
        $db->close();
    }
    
    // Updates a task that was edited to match the input info
    public function updateTask($updatedTask) {
        //TODO: check for existing connection instead of reconnecting every time
        $db = new mysqli(DB_LOCATION, DB_USERNAME, DB_PASSWORD, DB_NAME);
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }

        // query preparation to avoid injections
        $stmt = $db->prepare("UPDATE " . DB_TABLE . " SET title = ? , description = ? , done = ? WHERE id = ?");
        $stmt->bind_param("ssii", $updatedTask['title'], $updatedTask['description'], $updatedTask['done'], $this->taskID);
        $stmt->execute();
        $stmt->close();
        $db->close();
    }
}

?>