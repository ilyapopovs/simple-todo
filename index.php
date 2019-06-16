<?php
    session_start();
    
    // Gets DB related info from the config file and defines according constants
    // If config.ini doesn't exist - uses config_example.ini
    // WARNING: Insecure way of storing credentials
    // TODO: hide credentials outside the scope of the project
    $config = file_exists('./config.ini') ? parse_ini_file('./config.ini') : parse_ini_file('./config_example.ini');
    defined('DB_LOCATION') || define('DB_LOCATION', $config['dblocation']);
    defined('DB_USERNAME') || define('DB_USERNAME', $config['username']);
    defined('DB_PASSWORD') || define('DB_PASSWORD', $config['password']);
    defined('DB_NAME') || define('DB_NAME', $config['dbname']);
    defined('DB_TABLE') || define('DB_TABLE', $config['dbtable']);

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