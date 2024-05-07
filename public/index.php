<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
// Server
// !Change URL for every site!
// $path = str_replace("/webdev/SteveHarvey/mvc-views/", "/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
// Local
define("ROOT_PATH", dirname(__DIR__));

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

spl_autoload_register(function (string $class_name) {

    require ROOT_PATH . "/src/" . str_replace("\\", "/", $class_name) . ".php";
});

$dotenv = new Framework\Dotenv;

$dotenv->load(ROOT_PATH . "/.env");

// print_r($_ENV);

$router = new Framework\Router;

// Routes
$router->add("/{controller}/{id:\d+}/{action}");
$router->add("/", ["controller" => "home", "action" => "index"]);
$router->add("/home", ["controller" => "home", "action" => "index"]);
$router->add("/blogs", ["controller" => "blogs", "action" => "index"]);
$router->add("/blogs/show", ["controller" => "blogs", "action" => "show"]);
$router->add("/{controller}/{action}");
$router->add("/about", ["controller" => "About", "action" => "index"]);

$params = $router->matchRoute($path);
if (!$params) {
    exit("No matching route for '$path'.");
}

if ( !empty($params["id"]) ) {
    $id = $params["id"];
} else {
    $id = NULL;
}

$action = $params["action"];
$controller = "App\Controllers\\" . ucwords($params["controller"]);
$controller_object = new $controller;

if (!empty($id)) {
    $controller_object->$action($id);
} else {
    $controller_object->$action();
}