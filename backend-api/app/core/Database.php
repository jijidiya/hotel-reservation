<?php

private static function connect(): void {
    require_once __DIR__ . '/../config/env.php';

    $dsn = sprintf(
        "mysql:host=%s;dbname=%s;charset=s%",
        $_ENV['DB_HOST'],
        $_ENV['DB_NAME'],
        $_ENV['DB_CHARSET']
    );

    try {
        self::$instance = new PDO(
            $dsn,
            $_ENV['DB_USER'],
            $_ENV['DB_PASS'],
            [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]
        );
    } catch(PDOException $e) {
        http_response_code(500);
        echo json_encode([
            'success' => false,
            'message' => 'Database connection failed'
        ]);
        exit;
    }
}