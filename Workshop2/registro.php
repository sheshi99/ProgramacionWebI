
<?php

$servidor     = "localhost";
$usuarioBD    = "root";
$contrasenaBD = "";
$nombreBD     = "usuarios"; 

// Crear conexión
$conexionBD = new mysqli($servidor, $usuarioBD, $contrasenaBD, $nombreBD);

// Verificar conexión
if ($conexionBD->connect_error) {
    die("Error de conexión: " . $conexionBD->connect_error);
}

// Procesar el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre   = strtoupper($_POST['nombre']);
    $apellido = strtoupper($_POST['apellido']);
    $correo   = strtoupper($_POST['correo']);
    $telefono = strtoupper($_POST['telefono']);



    $consulta = $conexionBD->prepare(
        "INSERT INTO registro (nombre, apellido, correo, telefono) VALUES (?,?,?,?)"
    );
    
    $consulta->bind_param("ssss", $nombre, $apellido, $correo,$telefono);


    if ($consulta->execute()) {
        echo '<div style="text-align: center;">';
        echo "----- Registro insertado correctamente ----<br><br>";
        echo "Nombre: " . $nombre . "<br>";
        echo "Apellido: " . $apellido . "<br>";
        echo "Correo: " . $correo . "<br>";
        echo "Teléfono: " . $telefono . "<br><br>";
        echo "<a href='formulario.php'>Volver al formulario</a>";
        echo '</div>';
    } else {
        echo '<div style="text-align: center;">';
        echo "Error al insertar: " . $consulta->error;
        echo '</div>';
    }

    $consulta->close();
}

$conexionBD->close();
?>


