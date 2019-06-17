<?php
class ControllerEdit extends Controller {

    public function view($taskID) {
        // this sets the ID of the task that is supposed to be show on the Edit page
        $this->model->setTaskID($taskID);
    }

    public function delete() {
        $this->model->deleteTask();
    }

    public function save() {
        $updatedTask['done'] = isset($_POST['chb_done']) ? 1 : 0;
        $updatedTask['title'] = $_POST['ta_title'];
        $updatedTask['description'] = $_POST['ta_description'];
        $this->model->updateTask($updatedTask);
        header("Location: index.php");
    }
}

?>