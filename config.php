<?php
// Database credentials come from environment variables so they never end up
// in this public repo. Local example:
//   DB_HOST=127.0.0.1 DB_USER=root DB_PASS=secret php -S localhost:8080
require_once __DIR__ . '/site.php';

ini_set('display_errors', '0');
mysqli_report(MYSQLI_REPORT_OFF);

$conn = null;

if (!STATIC_BUILD) {
    $conn = @mysqli_connect(
        getenv('DB_HOST') ?: 'localhost',
        getenv('DB_USER') ?: 'root',
        getenv('DB_PASS') ?: '',
        getenv('DB_NAME') ?: 'asna',
        (int) (getenv('DB_PORT') ?: 3306)
    );

    if ($conn === false) {
        error_log('ASNA: database connection failed: ' . mysqli_connect_error());
        $conn = null;
    } else {
        mysqli_set_charset($conn, 'utf8mb4');
    }
}
