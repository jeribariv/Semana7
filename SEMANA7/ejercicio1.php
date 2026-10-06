<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h3>Ficha de producto</h3>
    <?php
    $codigo = 101;
    $precio = 25.50;
    $nombre = "Teclado";
    $disponible = true;

    echo "Código del producto: " . $codigo;
    echo "<br>";
    echo "Precio: S/ " . $precio;
    echo "<br>";
    echo "Nombre del producto: " . $nombre;
    echo "<br>";
    echo "Disponible en stock: " . $disponible;
    ?>
    <hr>
</body>
</html>