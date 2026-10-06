<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h3>Concatenación de cadenas</h3>
    <?php
    $ciudad = "Lima";
    $pais = "Perú";
    $continente = "América";

    $titulo = $ciudad . ", " . $pais . ", " . $continente;

    echo $titulo . "<br>";

    $poblacion = 10000000;

    echo "La ciudad tiene " . $poblacion . " habitantes.";
    ?>
    <hr>
</body>
</html>