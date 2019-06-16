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
}

?>