<?php
class ControllerEdit extends Controller {

    public function view($taskID) {
        // this sets the ID of the task that is supposed to be show on the Edit page
        $this->model->setTaskID($taskID);
    }
}

?>