<?php
/**
 * Router - URL routing to controllers
 */

namespace App\Core;

class Router
{
    private array $routes = [];
    private string $basePath = '';

    public function __construct()
    {
        $this->basePath = dirname($_SERVER['SCRIPT_NAME']);
        if ($this->basePath === '/' || $this->basePath === '\\') {
            $this->basePath = '';
        }
    }

    public function get(string $path, array $handler): self
    {
        $this->routes['GET'][$path] = $handler;
        return $this;
    }

    public function post(string $path, array $handler): self
    {
        $this->routes['POST'][$path] = $handler;
        return $this;
    }

    public function dispatch(): void
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = $this->getUri();

        if (isset($this->routes[$method][$uri])) {
            $this->callHandler($this->routes[$method][$uri]);
            return;
        }

        foreach ($this->routes[$method] ?? [] as $route => $handler) {
            $pattern = $this->convertToRegex($route);
            if (preg_match($pattern, $uri, $matches)) {
                array_shift($matches);
                $this->callHandler($handler, $matches);
                return;
            }
        }

        $this->notFound();
    }

    private function getUri(): string
    {
        $uri = $_SERVER['REQUEST_URI'] ?? '/';
        if (($pos = strpos($uri, '?')) !== false) {
            $uri = substr($uri, 0, $pos);
        }
        if ($this->basePath && strpos($uri, $this->basePath) === 0) {
            $uri = substr($uri, strlen($this->basePath));
        }
        $uri = '/' . trim($uri, '/');
        return $uri === '' ? '/' : $uri;
    }

    private function convertToRegex(string $route): string
    {
        $pattern = preg_replace('/\{([a-zA-Z_]+)\}/', '([^/]+)', $route);
        return '#^' . $pattern . '$#';
    }

    private function callHandler(array $handler, array $params = []): void
    {
        [$controllerClass, $method] = $handler;
        if (!class_exists($controllerClass)) {
            throw new \Exception("Controller {$controllerClass} not found");
        }
        $controller = new $controllerClass();
        if (!method_exists($controller, $method)) {
            throw new \Exception("Method {$method} not found in {$controllerClass}");
        }
        call_user_func_array([$controller, $method], $params);
    }

    private function notFound(): void
    {
        http_response_code(404);
        include ROOT_PATH . '/views/templates/404.php';
    }
}
