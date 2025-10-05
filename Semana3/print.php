<?php 
date_default_timezone_set("America/Costa_Rica");
echo "<div style='text-align:right'>".date("d/m/Y")."</div>";
echo "<strong>Identificación:</strong> " . $_POST['identificacion'] . "<br>"; 
echo "<strong>Nombre:</strong> " . $_POST['nombre'] . "<br>"; 
echo "<strong>Primer Apellido:</strong> " . $_POST['apellido1'] . "<br>";
echo "<strong>Segundo Apellido:</strong> " . $_POST['apellido2'] . "<br>";  
echo "<strong>Departamento:</strong> " . $_POST['departamento'] . "<br>"; 
echo '</div>'; 
?> 