<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <style>
        .box {
            max-width: 400px;
            width: 90%;
            margin: 5% auto;
            padding: 20px;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
            border-radius: 10px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
            text-align: center;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="box">
        <h1>Calculadora PHP</h1>
        <form action="" method="post">
            <label for="numero">Digite um número:</label>
            <input type="number" name="numero" id="numero" required>
            <input type="submit" value="Enviar">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $numero = $_POST['numero'];
            if (!is_numeric($numero)) {
                echo "<p>Digite um número válido.</p>";
            } else {
                $numero = $numero;
                echo "<h2>Tabuada do $numero</h2>";
                for ($i = 1; $i <= 10; $i++) {
                    echo "<div>$numero x $i = " . ($numero * $i) . "</div>";
                }
            }
        }
        ?>
    </div>
</body>
</html>
