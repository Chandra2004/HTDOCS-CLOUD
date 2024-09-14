<?php
class Router {
    private $routes = [];

    public function addRoute($route, $controller, $method) {
        $this->routes[$route] = ['controller' => $controller, 'method' => $method];
    }

    public function dispatch($url) {
        if (array_key_exists($url, $this->routes)) {
            $route = $this->routes[$url];
            $controllerName = $route['controller'];
            $methodName = $route['method'];

            require_once "../app/controllers/" . $controllerName . ".php";

            if (class_exists($controllerName) && method_exists($controllerName, $methodName)) {
                $controller = new $controllerName();
                $controller->$methodName();
            } else {
                $this->redirect404();
            }
        } else {
            $this->redirect404();
        }
    }

    private function redirect404() {
        header("Location: " . BASE_URL . "/404");
        exit();
    }
}

?>