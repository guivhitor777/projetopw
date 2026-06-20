<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/logs/error.log');

$pdo = new PDO(
    "mysql:host=mysql;dbname=" . getenv('MYSQL_DATABASE') . ";charset=utf8mb4",
    getenv('MYSQL_USER'),
    getenv('MYSQL_PASSWORD'),
    [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    ]
);
?>