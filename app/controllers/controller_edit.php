<?php
class ControllerEdit extends Controller {

    // this sets the ID of the task that is supposed to be show on the Edit page
    public function view($taskID) {
        $this->model->setTaskID($taskID);
    }

    // Responsible for deleting the task being edited
    public function delete() {
        $this->model->deleteTask(); // model already has its id
        header("Location: index.php");
    }

    // Responsible for saving the changes done on the Edit page
    public function save() {
        $updatedTask['done'] = isset($_POST['chb_done']) ? 1 : 0;
        $updatedTask['title'] = $_POST['ta_title'];
        $updatedTask['description'] = $_POST['ta_description'];
        $this->model->updateTask($updatedTask);
        header("Location: index.php");
    }
}

?>