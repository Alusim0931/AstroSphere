<?php
include('conexion.php');

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $sql = "DELETE FROM tareas WHERE id = $id";
    if ($conexion->query($sql) === TRUE) {
        header('Location: index.html');
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
}
?>
