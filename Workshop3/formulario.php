<?php
include("conexion.php");

$resultado = $conexion->query("SELECT id, nombre FROM provincias");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Registro</title>
</head>
<body>
    <div style="text-align: center; margin-top: 50px;">
        <form action="registro.php" method="post">
            
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre" required placeholder="Escriba el nombre">
            <br><br>
            
            <label for="apellidos">Apellidos: </label>
            <input type="text" name="apellidos" id="apellidos" required placeholder="Escriba los apellidos">
            <br><br>

            <label for="provincia">Provincia: </label>
            <select name="provincia" id="provincia" required>
                <option value="">Seleccione...</option>
                <?php 
                    while ($fila = $resultado->fetch_assoc()) {
                        echo "<option value='" . $fila['id'] . "'>" . $fila['nombre'] . "</option>";
                    }
                ?>
            </select>
            <br><br>

            <button type="submit">Registrar</button>
        </form>
    </div>
</body>
</html>

<?php include("cerrar_conexion.php"); ?>
