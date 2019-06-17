<?php
class ControllerAdd extends Controller {

    // Responsible for adding a new task
    public function add() {
        $newTask['title'] = $_POST['ta_title'];
        $newTask['description'] = $_POST['ta_description'];
        $newTask['done'] = 0;
        $this->model->addTask($newTask);
        header("Location: index.php");
    }
}

?>