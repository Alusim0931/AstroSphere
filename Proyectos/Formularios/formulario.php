<html>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    Nombre: <input type="text" name="nombre"><br>
    Correo: <input type="text" name="correo"><br>
    Estudios:
    <select name="educacion">
        <option value="ESO">La ESO</option>
        <option value="Bachiller">Bachiller</option>
        <option value="Grado Medio">Grado Medio</option>
        <option value="Grado Superior">Grado Superior</option>
        <option value="Universidad">Universidad</option>
    </select><br>
    Avatar: <input type="file" name="imagen" /><br>
    <input type="submit" name="submit" />


</form>
</body>
</html>
