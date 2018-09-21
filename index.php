<?php
/**
 * Created by PhpStorm.
 * User: hasaki
 * Date: 2018/9/21
 * Time: 16:52
 */

define('DS', DIRECTORY_SEPARATOR);

define('APP_PATH', dirname(__FILE__) . DS . 'application');

spl_autoload_register(function ($class_name) {
    require_once APP_PATH . DS . 'controller' . DS . $class_name . '.php';
});

$query = $_SERVER['REQUEST_URI'];

$query_string = explode('/', $query);

if (isset($query_string[1]) && !empty($query_string[1])) {
    $controller = $query_string[1];
} else {
    $controller = 'index';
}

$controller = ucfirst($controller) . 'Controller';

$action = isset($query_string[2]) ? $query_string[2] : 'index';

$response = call_user_func_array([new $controller, $action], []);

die($response);