<?php
include('conexion.php');

$resultado = $conexion->query("SELECT * FROM tareas ORDER BY fecha_creacion DESC");
while ($tarea = $resultado->fetch_assoc()) {
    echo "<li class='list-group-item'>";
    echo "<h5>" . htmlspecialchars($tarea['titulo']) . "</h5>";
    echo "<p>" . htmlspecialchars($tarea['descripcion']) . "</p>";
    echo "<small>Creada el: " . $tarea['fecha_creacion'] . "</small>";
    echo " <a href='eliminar_tarea.php?id=" . $tarea['id'] . "' class='btn btn-danger btn-sm ml-2'>Eliminar</a>";
    echo "</li>";
}
?>
