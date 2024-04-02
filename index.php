<?php

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


require "src/router.php";
$router = new Router;

// Routes
$router->add("/", ["controller" => "blogs", "action" => "index"]);
$router->add("/blogs", ["controller" => "blogs", "action" => "index"]);

$params = $router->matchRoute($path);

if ($params === false) {

    exit("No matching route");

}

$controller = $params["controller"];
$action = $params["action"];

require "src/controllers/$controller.php";

$controller_object = new $controller;

$controller_object->$action();