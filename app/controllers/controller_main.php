<?php
class ControllerMain extends Controller {
    public function __construct($model){
        parent::__construct($model);
        $this->model->fetchData();
    }

    public function checkbox($taskID) {
        $task;
        foreach($_SESSION['data'] as $someTask){
            if($someTask['id'] == $taskID) {
                $task = $someTask;
            }
        }
        $newState = $task['done'] ? 0 : 1;
        $this->model->updateTaskDone($taskID, $newState);
        echo "<script>window.location = 'index.php?&page_y=". $_SESSION['page_y'] ."'</script>";
    }
}

?>