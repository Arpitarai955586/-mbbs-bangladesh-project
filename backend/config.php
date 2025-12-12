<?php
$isCli = (php_sapi_name() === 'cli');

if ($isCli) {
    $host = '127.0.0.1'; 
    $dbname = 'bdlp';
    $username = 'root';
    $password = '';
} else {
    if (in_array($_SERVER['SERVER_NAME'], ['localhost', '127.0.0.1'])) {
        $host = '127.0.0.1';
        $dbname = 'bdlp';
        $username = 'root';
        $password = '';
    } else {
        $host = 'localhost';
        $dbname = 'u494280653_bangladesh';
        $username = 'u494280653_bangladesh';
        $password = '@BanlgaDesh#01';
       
    }
}
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
