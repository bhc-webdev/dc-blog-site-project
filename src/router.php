<?php

class Router
{
    // create array to hold routes from route table
    private array $routes = [];

    // create method to add routes from the route table to the routes array
    public function add(string $path, array $params): void
    {
        $this->routes[] = [
            "path" => $path,
            "params" => $params
        ];
    }
    public function matchRoute(string $path): array|bool
    {
        foreach ($this->routes as $route) {

            if ($route["path"] === $path) {

                return $route["params"];
            }
        }

        return false;
    }
}
