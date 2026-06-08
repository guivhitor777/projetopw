<?php

$pdo = new PDO(
    "mysql:host=mysql;dbname=" . getenv('DB_DATABASE') . ";charset=utf8mb4",
    getenv('DB_USERNAME'),
    getenv('DB_PASSWORD'),
    [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    ]
);
?>