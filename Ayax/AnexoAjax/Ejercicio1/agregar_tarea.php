<?php
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $conexion->real_escape_string($_POST['titulo']);
    $descripcion = $conexion->real_escape_string($_POST['descripcion']);

    $sql = "INSERT INTO tareas (titulo, descripcion) VALUES ('$titulo', '$descripcion')";
    if ($conexion->query($sql) === TRUE) {
        header('Location: index.html');
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
}
?>
