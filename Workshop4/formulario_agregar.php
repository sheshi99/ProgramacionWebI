<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Usuario</title>
</head>
<body>
    <h2>Agregar Usuario</h2>

    <form method="POST" action="">
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required value="<?php echo $nombre; ?>">
        </div><br>

        <div>
            <label for="apellido">Apellidos:</label>
            <input type="text" name="apellido" id="apellido" required value="<?php echo $apellido; ?>">
        </div><br>

        <div>
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" id="usuario" required value="<?php echo $usuario; ?>">
        </div><br>

        <div>
            <label for="clave">Contraseña:</label>
            <input type="password" name="clave" id="clave" required>
        </div><br>

        <div>
            <label for="confirmar_clave">Confirmar Contraseña:</label>
            <input type="password" name="confirmar_clave" id="confirmar_clave" required>
        </div><br>


        <div>
            <label for="administrador">Administrador:</label>
            <select name="administrador" id="administrador" required>
                <option value="" disabled selected>--Seleccione--</option>
                <option value="0">No</option>
                <option value="1">Sí</option>
            </select>
        </div><br>


        <button type="submit">Guardar</button>
        <a href="listado.php">
            <button type="button">Regresar al Menú</button>
        </a>
    </form>
</body>
</html>