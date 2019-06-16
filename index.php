<?php
    session_start();
    // attaching parent classes
    require("app/core/model.php");
    require("app/core/controller.php");
    require("app/core/view.php");

    // determining the page to be shown (defaults to 'main')
    $page = (isset($_GET['page']) && !empty($_GET['page'])) ? $_GET['page'] : "main";

    // attaching components of that page
    require("app/models/model_" . strtolower($page) . ".php");
    require("app/controllers/controller_" . strtolower($page) . ".php");
    require("app/views/view_" . strtolower($page) . ".php");

    // getting proper class names of the components
    $modelClass = "Model" . $page;
    $viewClass = "View" . $page;
    $controllerClass = "Controller" . $page;

    // creating components
    $model = new $modelClass($page);
    $controller = new $controllerClass($model);
    $view = new $viewClass($controller, $model);

    // performing action if set
    if (isset($_GET['action']) && !empty($_GET['action'])) {
        // providing the id of the task if set
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $controller->{$_GET['action']}($_GET['id']);
        } else {
            $controller->{$_GET['action']}();
        }
    }
    
    // showing the page
    echo $view->show();

?>