<?php
/**
 * Database Configuration
 */

function getDbConnection(): ?PDO
{
    static $pdo = null;

    if ($pdo !== null) {
        return $pdo;
    }

    $secretsPath = ROOT_PATH . '/config/secrets.php';

    if (!file_exists($secretsPath)) {
        return null;
    }

    $secrets = require $secretsPath;

    try {
        $dsn = sprintf(
            'mysql:host=%s;dbname=%s;charset=utf8mb4',
            $secrets['db_host'],
            $secrets['db_name']
        );

        $pdo = new PDO($dsn, $secrets['db_user'], $secrets['db_pass'], [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]);

        return $pdo;
    } catch (PDOException $e) {
        if (DEBUG_MODE) {
            throw $e;
        }
        return null;
    }
}
