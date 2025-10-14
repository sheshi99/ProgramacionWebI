<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
</head>
<body>
<h2>Editar Usuario</h2>

    <form method="POST" action="">
        <!-- ID del usuario a editar -->
        <input type="hidden" name="id" value="<?= $usuario_seleccionado['id'] ?>">

        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required 
                value="<?= htmlspecialchars($usuario_seleccionado['nombre']) ?>">
        </div><br>

        <div>
            <label for="apellido">Apellidos:</label>
            <input type="text" name="apellido" id="apellido" required 
                value="<?= htmlspecialchars($usuario_seleccionado['apellido']) ?>">
        </div><br>

        <div>
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" id="usuario" required 
                value="<?= htmlspecialchars($usuario_seleccionado['usuario']) ?>">
        </div><br>

        <div>
            <label for="clave">Contraseña (solo si desea cambiarla):</label>
            <input type="password" name="clave" id="clave"
            pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{6,}"  
            title="Debe tener al menos una letra mayúscula, una minúscula y un número, mínimo 6 caracteres">
        </div><br>

        <div>
            <label for="estado">Estado:</label>
            <?php
            $estado_actual = $usuario_seleccionado['estado'];

            if ($estado_actual == 'Activo') {
                // Mostrar como texto readonly
                echo '<input type="text" name="estado" id="estado" value="Activo" readonly>';
            } else {
                // Select normal si está deshabilitado
                echo '<select name="estado" id="estado">';
                echo '<option value="Activo">Activo</option>';
                echo '<option value="Deshabilitado" selected>Deshabilitado</option>';
                echo '</select>';
            }
            ?>
        </div><br>

        <div>
        <label for="administrador">Administrador:</label>
        <select name="administrador" id="administrador">
            <option value="0" <?php if ($usuario_seleccionado['administrador'] == 0) echo 'selected'; ?>>No</option>
            <option value="1" <?php if ($usuario_seleccionado['administrador'] == 1) echo 'selected'; ?>>Sí</option>
        </select>
        </div><br>


        <button type="submit">Guardar cambios</button>
        <a href="listado.php"><button type="button">Regresar al Menú</button></a>
    </form>

</body>
</html>
