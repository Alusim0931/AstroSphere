<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = htmlspecialchars($_POST['usuario']);
    $email = htmlspecialchars($_POST['email']);
    $edad = htmlspecialchars($_POST['edad']);

    echo "<h2>Datos Recibidos</h2>";
    echo "<p><strong>Nombre de Usuario:</strong> $usuario</p>";
    echo "<p><strong>Correo Electrónico:</strong> $email</p>";
    echo "<p><strong>Edad:</strong> $edad</p>";
} else {
    echo "<h2>Error: No se han enviado datos mediante POST</h2>";
}
?>
