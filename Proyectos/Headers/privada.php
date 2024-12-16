<?php

// Obtener el valor del parámetro 'dejameEntrar'
$dejameEntrar = isset($_GET['dejameEntrar']) ? $_GET['dejameEntrar'] : '0';

// Verificar el valor del parámetro
if ($dejameEntrar === '1') {
    // Si el valor es 1, mostrar el mensaje de bienvenida
    echo "<!DOCTYPE html>";
    echo "<html lang='es'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>Bienvenido</title>";
    echo "</head>";
    echo "<body>";
    echo "<h1>Bienvenido</h1>";
    echo "<p>Has accedido correctamente a la página privada.</p>";
    echo "</body>";
    echo "</html>";
} else {
    // Si el valor es 0 o no está definido, redirigir a login.php
    header('Location: login.php');
    exit(); // Finalizar la ejecución del script después de redirigir
}

