<?php
class ModelAdd extends Model {

    // Adds a new task to the DB
    public function addTask($newTask) {
        //TODO: check for existing connection instead of reconnecting every time
        $db = new mysqli(DB_LOCATION, DB_USERNAME, DB_PASSWORD, DB_NAME);
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }
        // query preparation to avoid injections
        $stmt = $db->prepare("INSERT INTO " . DB_TABLE . " (title, description, done) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $newTask['title'], $newTask['description'], $newTask['done']);
        $stmt->execute();
        $stmt->close();
        $db->close();
    }
}

?>