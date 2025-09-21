<?php
date_default_timezone_set("America/Costa_Rica");

// Guardar fecha y hora en variables
$fecha = date("d/m/Y"); 
$hora  = date("H:i:s");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Fecha y Hora Costa Rica</title>
</head>
<body style="text-align: center;"> <!-- Centra todo el contenido -->

    <h1>
        ---- 
        <span style="color: red;">Costa</span> 
        <span style="color: blue;">Rica</span> 
        ----
    </h1>

    <h2>Fecha actual</h2>
    <p><?php echo $fecha; ?></p>

    <h2>Hora actual</h2>
    <p><?php echo $hora; ?></p>

</body>
</html>
