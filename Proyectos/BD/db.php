<?php
// db.php
$host = 'localhost';
$dbname = 'verduras';
$username = 'root';

try {
    $pdo = new PDO("mysql:localhost=$host;verduras=$dbname", $username);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error al conectar: " . $e->getMessage());
}

