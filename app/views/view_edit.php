<?php
class ViewEdit extends View {

    public function show() {
        $taskID = $this->model->getTaskID();
        // $task = ($_SESSION['data'])[$taskID-1]; <-- works if tasks are always sorted by id
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