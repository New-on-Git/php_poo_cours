<?php

require_once 'src/Resources/config/routes.php';

if(array_key_exists($_SERVER['REQUEST_URI'], $routes)) {
    $route = $routes[$_SERVER['REQUEST_URI']];
    $controllerName = $route['controller'];
    $actionName = $route['action'];

} else {
    die('Ressources not Found');
}
