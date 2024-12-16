<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $estudios = $_POST['estudios'];

    if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] == 0) {
        $avatar = $_FILES['avatar'];
        $nombreAvatar = $avatar['name'];
        $tipoAvatar = $avatar['type'];
        $tamanoAvatar = $avatar['size'];
        $temporalAvatar = $avatar['tmp_name'];

        // Definir la ruta donde se guardará el archivo
        $directorioDestino = 'uploads/';
        $rutaAvatar = $directorioDestino . basename($nombreAvatar);

        // Comprobar que el archivo sea una imagen
        $esImagen = getimagesize($temporalAvatar);
        if ($esImagen !== false) {
            // Mover el archivo a la carpeta de destino
            if (move_uploaded_file($temporalAvatar, $rutaAvatar)) {
                echo "El archivo se ha subido con éxito.<br>";
            } else {
                echo "Hubo un error al subir el archivo.<br>";
            }
        } else {
            echo "El archivo subido no es una imagen.<br>";
        }
    } else {
        echo "No se ha subido ningún archivo o ha ocurrido un error.<br>";
    }

    // Mostrar los datos recuperados
    echo "<h2>Datos recibidos:</h2>";
    echo "Nombre: " . htmlspecialchars($nombre) . "<br>";
    echo "Correo: " . htmlspecialchars($correo) . "<br>";
    echo "Estudios: " . htmlspecialchars($estudios) . "<br>";

    if (isset($rutaAvatar)) {
        echo "Avatar: <br><img src='$rutaAvatar' width='150'><br>";
    }
} else {
    echo "Método no permitido.";
}
?>
