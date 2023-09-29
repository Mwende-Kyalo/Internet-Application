<?php
$server= 'localhost';
$dbName = 'user_data';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:localhost;user_data", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>