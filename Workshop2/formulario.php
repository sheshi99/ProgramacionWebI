
<?php ?>

<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
<title>Registro de Usuario</title>

    <link rel="stylesheet" href="formulario.css?v=1.0">

</head>

<body>
<div class="form-container">
    <h2>Formulario de Registro</h2>
    <form action="registro.php" method="post"> 
        <label>Nombre:</label>
        <input type="text" name="nombre" required>

        <label>Apellido:</label>
        <input type="text" name="apellido" required>

        <label>Correo:</label>
        <input type="email" name="correo" required>

        <label>Teléfono:</label>
        <input type="text" name="telefono" required pattern="[0-9]+">

        <input type="submit" value="Registrar">
    </form>
</div>
</body>

</html>


