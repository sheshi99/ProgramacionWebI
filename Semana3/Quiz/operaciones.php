
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $opcion = $_POST['operacion'];

    $resultado = 0;
    
    if ($opcion == "suma") {
        $resultado = $numero1 + $numero2;
        echo "El resultado de la suma es: " . $resultado;
    }

     if ($opcion == "resta") {
        $resultado = $numero1 - $numero2;
        echo "El resultado de la resta es: " . $resultado;
    }

    if ($opcion == "multiplicacion") {
        $resultado = $numero1 * $numero2;
        echo "El resultado de la multiplicacion es: " . $resultado;
    }

     if ($opcion == "division") {
        $resultado = $numero1 / $numero2;
        echo "El resultado de la division es: " . $resultado;
    }

}

?>

