<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables de tipo string</title>
</head>
<body>

<?php
$nota1 = 10;
$nota2 = 7;
$nota3 = 8;
$suma = $nota1 + $nota2 + $nota3;
$promedio = $suma / 3;
echo "Juan aprobó la materia con las notas $nota1, $nota2 y $nota3";
echo "<hr>";
echo "Juan aprobó la materia con las notas:";
echo "<br>SUMATORIA: " . $suma;
echo "<br>PROMEDIO: " . $promedio;
?>

</body>
</html>
