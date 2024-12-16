<?php
$host = 'localhost';
$usuario = 'root';
$password = '';
$base_datos = 'gestor_tareas';

$conexion = new mysqli($host, $usuario, $password, $base_datos);

if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}
?>
