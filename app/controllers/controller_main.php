<?php
class ControllerMain extends Controller {
    public function __construct($model){
        parent::__construct($model);
        $this->model->fetchData();
    }

    // Responsible for saving changes done to checkboxes (in the future, possibly scroll position too)
    public function checkbox($taskID) {
        $task;
        foreach($_SESSION['data'] as $someTask){
            if($someTask['id'] == $taskID) {
                $task = $someTask;
            }
        }
        $newState = $task['done'] ? 0 : 1; // switching the state
        $this->model->updateTaskDone($taskID, $newState);
        echo "<script>window.location = 'index.php'</script>"; // not php for future scroll position save
    }
}

?>