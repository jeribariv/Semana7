<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>

    <div align="center">
        <h2>Ejercicio 8</h2>
        <h3>Área de un círculo</h3>

        <form method="POST">
            <table border="1" cellpadding="10">
                <tr>
                    <td>Radio:</td>
                    <td><input type="number" step="0.01" name="radio" required></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="calcular" value="Calcular">
                    </td>
                </tr>
            </table>
        </form>

        <?php
        if (isset($_POST["calcular"])) {
            $radio = $_POST["radio"];
            $pi = 3.14159;

            $area = $pi * $radio * $radio;

            echo "<h3>Resultado</h3>";
            echo "Radio: " . $radio . "<br>";
            echo "Área del círculo: <strong>" . $area . "</strong>";
        }
        ?>
    </div>

</body>
</html>