<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>

    <div align="center">
        <h2>Ejercicio 6</h2>
        <h3>Suma de dos números</h3>

        <form method="POST">
            <table border="1" cellpadding="10">
                <tr>
                    <td>Número 1:</td>
                    <td><input type="number" name="numero1" required></td>
                </tr>
                <tr>
                    <td>Número 2:</td>
                    <td><input type="number" name="numero2" required></td>
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
            $numero1 = $_POST["numero1"];
            $numero2 = $_POST["numero2"];
            $suma = $numero1 + $numero2;

            echo "<h3>Resultado</h3>";
            echo "La suma es: <strong>" . $suma . "</strong>";
        }
        ?>
    </div>

</body>
</html>