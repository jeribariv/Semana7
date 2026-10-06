<?php
$nombre = $_REQUEST["nombre"] ?? '';
$n1 = $_REQUEST["n1"] ?? 0;
$n2 = $_REQUEST["n2"] ?? 0;

$suma = $n1 + $n2;
$promedio = $suma / 2;

echo "<h3>$nombre</h3>";
echo "Suma: " . $suma . "<br>";
echo "Promedio: " . $promedio . "<br>";
?>