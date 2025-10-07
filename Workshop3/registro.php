<?php

session_start();
include ("conexion.php");


try{

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $provincia = $_POST['provincia'];

        $sql = "INSERT INTO usuarios (nombre, apellidos, provincia_id) VALUES (?, ?, ?)";
        $consulta = $conexion->prepare($sql);
        $consulta->bind_param("ssi", $nombre, $apellidos, $provincia);


        if ($consulta->execute()) {
            
            $_SESSION['usuario'] = $nombre;
            header("Location: login.php");
            exit;

        } else {
            echo '<div style="text-align: center;">';
            echo "Error al insertar: " . $consulta->error;
            echo '</div>';
        }

    }

}catch (Exception $e){
    echo "Error al guardar:" . $e->getMessage();
}

include("cerrar_conexion.php");

?>