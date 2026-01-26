<?php
/**
 * Stealth Labz - Environment Configuration
 */

$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$requestUri = $_SERVER['REQUEST_URI'] ?? '';

$isLocal = (
    strpos($host, '.local') !== false ||
    strpos($host, 'localhost') !== false ||
    strpos($host, '127.0.0.1') !== false
);

$isStaging = strpos($host, 'staging.') === 0 || strpos($host, 'beta.') === 0;

// Determine environment
if ($isLocal) {
    define('ENVIRONMENT', 'local');
} elseif ($isStaging) {
    define('ENVIRONMENT', 'staging');
} else {
    define('ENVIRONMENT', 'production');
}

// Base path for subfolder installations
$scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
$basePath = '';
if (ENVIRONMENT === 'local' && preg_match('#^(/[^/]+/public)#', $scriptName, $matches)) {
    $basePath = $matches[1];
}
define('BASE_PATH', $basePath);

// Legacy
define('IS_LOCAL', ENVIRONMENT === 'local');
define('IS_PRODUCTION', ENVIRONMENT === 'production');
define('DEBUG_MODE', ENVIRONMENT !== 'production');

// Protocol
define('PROTOCOL', IS_LOCAL ? 'http://' : 'https://');

// Domain
if (ENVIRONMENT === 'local') {
    define('BASE_DOMAIN', 'stealthlabz.local');
} else {
    define('BASE_DOMAIN', 'stealthlabz.com');
}

// Error reporting
if (DEBUG_MODE) {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
} else {
    error_reporting(0);
    ini_set('display_errors', '0');
}

/**
 * URL Helpers
 */
function buildUrl(string $path = ''): string
{
    $url = PROTOCOL . BASE_DOMAIN;
    if ($path) {
        $url .= '/' . ltrim($path, '/');
    }
    return $url;
}

function cdnUrl(string $path = ''): string
{
    return BASE_PATH . '/cdn/' . ltrim($path, '/');
}

function siteUrl(string $path = ''): string
{
    return BASE_PATH . '/' . ltrim($path, '/');
}

function canonicalUrl(): string
{
    $uri = strtok($_SERVER['REQUEST_URI'] ?? '', '?');
    $uri = rtrim($uri, '/');
    if (BASE_PATH && strpos($uri, BASE_PATH) === 0) {
        $uri = substr($uri, strlen(BASE_PATH));
    }
    return PROTOCOL . BASE_DOMAIN . $uri;
}
