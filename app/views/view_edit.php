<?php
class ViewEdit extends View {

    public function show() {
        $taskID = $this->model->getTaskID();
        $task;
        foreach($_SESSION['data'] as $someTask) {
            if ($someTask['id'] == $taskID) {
                $task = $someTask;
            }
        }
        require_once($this->model->getTemplate());
    }
}

?>