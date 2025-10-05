<?php

date_default_timezone_set('America/Costa_Rica');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Empleados - TU RAYO</title>
</head>
<body>

<div style="text-align: right;">
    <?php
    echo "Fecha: " . date("d/m/Y");
    ?>
</div>

<h2>Registro de Empleados - TU RAYO</h2>

<form action="print.php" method="post">
    <label for="identificacion">Identificación:</label><br>
    <input type="text" name="identificacion" id="identificacion" placeholder="Escriba la identificación" required><br><br>

    <label for="nombre">Nombre:</label><br>
    <input type="text" name="nombre" id="nombre" placeholder="Escriba el nombre" required><br><br>

    <label for="apellido1">Primer Apellido:</label><br>
    <input type="text" name="apellido1" id="apellido1" placeholder="Primer apellido" required><br><br>

    <label for="apellido2">Segundo Apellido:</label><br>
    <input type="text" name="apellido2" id="apellido2" placeholder="Segundo apellido" required><br><br>

    <label for="departamento">Departamento:</label><br>
    <select name="departamento" id="departamento" required>
        <option value="">--Seleccione--</option>
        <option value="Financiero">Financiero</option>
        <option value="Gerencia">Gerencia</option>
        <option value="Ventas">Ventas</option>
        <option value="TI">TI</option>
    </select><br><br>

    <button type="submit">Registrar Empleado</button>
</form>

</body>
</html>
