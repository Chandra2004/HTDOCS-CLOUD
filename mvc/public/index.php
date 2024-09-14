<?php
require_once "../app/core/Router.php";
require_once "../app/config/config.php";
require_once "../app/core/Database.php";

$router = new Router();
$router->addRoute('/', 'HomeController', 'index');
$router->addRoute('/register', 'RegisterController', 'index');
$router->addRoute('/dashboard', 'DashboardController', 'index');
$router->addRoute('/editor', 'EditorController', 'index');
$router->addRoute('/404', 'ErrorController', 'notFound');

$url = str_replace('/mvc/public', '', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$router->dispatch($url);
?>
