<?php
class ViewAdd extends View {

    public function show() {
        $data = $this->model->getData();
        require_once($this->model->getTemplate());
    }
}

?>