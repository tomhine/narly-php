<?php

namespace app\core;

class Router
{
    protected array $routes = [];

    public function get(string $path, callable $callback): void
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve(): void
    {

    }
}