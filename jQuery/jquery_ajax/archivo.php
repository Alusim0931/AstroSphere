<?php
// Verifica si los parámetros 'name' y 'age' fueron enviados
if (isset($_POST['name']) && isset($_POST['age'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];

    // Responde con un mensaje
    echo "Nombre: " . $name . " / Edad: " . $age;
} else {
    echo "Faltan parámetros.";
}
?>
