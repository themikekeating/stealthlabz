<?php
/**
 * Stealth Labz - Application Entry Point
 */

// Define root path
$parentPath = dirname(__DIR__);
$currentPath = __DIR__;

if (file_exists($parentPath . '/app/Core/Router.php')) {
    define('ROOT_PATH', $parentPath);
} elseif (file_exists($currentPath . '/app/Core/Router.php')) {
    define('ROOT_PATH', $currentPath);
} else {
    die('Error: Cannot locate app directory.');
}

// Load environment configuration
require_once ROOT_PATH . '/config/environment.php';

// Autoloader
spl_autoload_register(function ($class) {
    $prefix = 'App\\';
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }
    $relativeClass = substr($class, $len);
    $file = ROOT_PATH . '/app/' . str_replace('\\', '/', $relativeClass) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});

// Load router
use App\Core\Router;
use App\Controllers\LandingController;
use App\Controllers\BlogController;
use App\Controllers\LegalController;
use App\Controllers\SitemapController;

// Initialize router
$router = new Router();

// Routes
$router->get('/', [LandingController::class, 'index']);

// Blog
$router->get('/insights', [BlogController::class, 'index']);
$router->get('/insights/category/{slug}', [BlogController::class, 'category']);
$router->get('/insights/{slug}', [BlogController::class, 'show']);

// Legal
$router->get('/legal/privacy', [LegalController::class, 'privacy']);
$router->get('/legal/terms', [LegalController::class, 'terms']);
$router->get('/legal/cookies', [LegalController::class, 'cookies']);
$router->get('/legal/disclaimer', [LegalController::class, 'disclaimer']);

// Sitemap
$router->get('/sitemap.xml', [SitemapController::class, 'index']);

// Dispatch
$router->dispatch();
