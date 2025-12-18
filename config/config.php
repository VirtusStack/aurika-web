<?php
// Development Error Reporting
ini_set("display_errors", true);
error_reporting(E_ALL);

// Default Timezone
date_default_timezone_set('Asia/Kolkata');

// Database Configuration
define("DB_HOST", "localhost");
define("DB_NAME", "aurika_web");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_CHARSET", "utf8mb4");

// PDO DSN
define(
    "DB_DSN",
    "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET
);

// PDO Connection
try {
    $conn = new PDO(DB_DSN, DB_USER, DB_PASS, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Project Paths

define("BASE_URL", "http://localhost/aurika-web");
define("TEMPLATE_PATH", __DIR__ . "/../templates");

// Global Exception Handler
function handleException($exception) {
    echo "<pre><strong>ERROR:</strong> " . $exception->getMessage() . "</pre>";
    error_log($exception->getMessage());
}
set_exception_handler('handleException');
