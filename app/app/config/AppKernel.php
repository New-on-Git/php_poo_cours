<?php
require_once 'app/config/routing.php';

// dump($routes);
$method = $route['action'];
$controller = new $route['controller'];
$controller->$method();
