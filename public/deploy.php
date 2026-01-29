<?php
/**
 * GitHub Webhook Deploy Script
 *
 * Automatically pulls latest code when GitHub sends a push event.
 *
 * Setup:
 * 1. Set DEPLOY_SECRET below (or in secrets.php)
 * 2. Add webhook in GitHub: Settings > Webhooks > Add webhook
 *    - Payload URL: https://stealthlabz.com/deploy.php
 *    - Content type: application/json
 *    - Secret: same as DEPLOY_SECRET
 *    - Events: Just the push event
 */

// Load secret from config if available
$secretsPath = dirname(__DIR__) . '/config/secrets.php';
$secrets = file_exists($secretsPath) ? require $secretsPath : [];

$deploySecret = $secrets['deploy_secret'] ?? null;

if (!$deploySecret) {
    http_response_code(500);
    die('Deploy secret not configured');
}

// Verify request is from GitHub
$signature = $_SERVER['HTTP_X_HUB_SIGNATURE_256'] ?? '';
$payload = file_get_contents('php://input');

if (!$signature) {
    http_response_code(403);
    die('No signature');
}

$expectedSignature = 'sha256=' . hash_hmac('sha256', $payload, $deploySecret);

if (!hash_equals($expectedSignature, $signature)) {
    http_response_code(403);
    die('Invalid signature');
}

// Parse payload
$data = json_decode($payload, true);

// Only deploy on push to master
if (($data['ref'] ?? '') !== 'refs/heads/master') {
    die('Not master branch');
}

// Change to repo root
chdir(dirname(__DIR__));

// Pull latest code
$output = [];
$returnCode = 0;

exec('git pull origin master 2>&1', $output, $returnCode);

// Log result
$log = date('Y-m-d H:i:s') . " - Deploy triggered\n";
$log .= "Return code: $returnCode\n";
$log .= implode("\n", $output) . "\n\n";

$logFile = dirname(__DIR__) . '/logs/deploy.log';

// Rotate log if it exceeds 1MB
if (file_exists($logFile) && filesize($logFile) > 1048576) {
    rename($logFile, $logFile . '.' . date('Y-m-d-His') . '.bak');
}

file_put_contents($logFile, $log, FILE_APPEND);

// Response (don't leak server paths or git output)
header('Content-Type: application/json');
echo json_encode([
    'success' => $returnCode === 0
]);
