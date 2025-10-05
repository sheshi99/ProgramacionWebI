
<?php

$lado = 10;
$area_cuadrado = $lado * $lado;

echo "--- Cuadrado --- <br>";
echo "Lado: ". $lado . "<br>";
echo "El área del cuadrado es " . ( $area_cuadrado ) . "<br>";
echo "<br>";



$base = 5;
$altura = 10;
$area_rectangulo = $base * $altura;

echo "--- Rectángulo --- <br>";
echo "Base: ". $base . "<br>";
echo "Altura: ". $altura . "<br>";
echo "El área del rectángulo es " . ($area_rectangulo). "<br>";
echo "<br>";



$base_triangulo = 10;
$altura_triangulo =15;
$area_triangulo = $base_triangulo * $altura_triangulo / 2;

echo "--- Triángulo --- <br>";
echo "Base: ". $base_triangulo . "<br>";
echo "Altura: ". $altura_triangulo. "<br>";
echo "El área del triángulo es " . ($area_triangulo). "<br>";
echo "<br>";


$radio = 11;
$area_circulo = pi() * ($radio * $radio);

echo "--- Círculo --- <br>";
echo "Radio: " . $radio . "<br>";
echo "El área del círculo es " . $area_circulo . "<br>";
echo "<br>";


$diagonal_mayor = 15;
$diagonal_menor = 7;
$area_rombo = ($diagonal_mayor * $diagonal_menor) / 2;

echo "--- Rombo --- <br>";
echo "Diagonal mayor: " . $diagonal_mayor . "<br>";
echo "Diagonal menor: " . $diagonal_menor . "<br>";
echo "El área del rombo es " . $area_rombo . "<br>";
echo "<br>";


?>


