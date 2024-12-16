<?php
global $pdo;
require('db.php');

if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];

    $sql = "INSERT INTO verduras (nombre) VALUES (:nombre)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['nombre' => $nombre]);

    echo "Elemento insertado con éxito.";
} else {
    echo "Faltan parámetros en la URL.";
}
?>


