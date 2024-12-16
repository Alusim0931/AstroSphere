<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = htmlspecialchars($_POST['nombre']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    echo "<h1>Datos Recibidos</h1>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Mensaje:</strong> $mensaje</p>";
} else {
    echo "<h1>Error: No se ha enviado ningún dato</h1>";
}
?>
