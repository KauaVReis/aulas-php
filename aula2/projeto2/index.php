<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <style>
        :root {
            --seasalt: #f8f9faff;
            --antiflash-white: #e9ecefff;
            --platinum: #dee2e6ff;
            --french-gray: #ced4daff;
            --french-gray-2: #adb5bdff;
            --slate-gray: #6c757dff;
            --outer-space: #495057ff;
            --onyx: #343a40ff;
            --eerie-black: #212529ff;
        }

        .box {
            max-width: 400px;
            background-color: var(--seasalt);
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

        body {
            background-color: var(--platinum);
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    <div class="box">
        <h1>Calculadora PHP</h1>
        <form action="" method="post">
            <label for="n1">Digite um número:</label>
            <input type="number" name="n1" id="numero" required>
            <label for="operacao">Selecione uma Operação:</label>
            <select name="operacao" id="operacao">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
                <option value="**">Elevado</option>
                <option value="raiz"> Raiz</option>
            </select><br>
            <label for="n2">Digite um número:</label>
            <input type="n2" name="n2" id="numero" required>
            <input type="submit" value="Enviar">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $n1        = $_POST['n1'];
            $n2       = $_POST['n2'];
            $operacao = $_POST['operacao'];
            if (!is_numeric($n1) and !is_numeric($n2)) {
                echo "<p>Digite um número válido.</p>";
            } else {
                switch ($operacao) {
                    case '+':
                        $res = $n1 + $n2;
                        break;
                    case '-':
                        $res = $n1 - $n2;
                        break;
                    case '*':
                        $res = $n1 * $n2;
                        break;
                    case '/':
                        if ($n2 == 0) {
                        $res = 'ERRO';
                        }else{
                            $res = $n1 / $n2;
                        }
                        break;
                    case '**':
                        $res = $n1**$n2;
                        $operacao = ' elevado a ';
                        break;
                    case 'raiz':
                        $res = pow($n1, 1.0/$n2);
                        $operacao = ' raiz de ';
                        break;
                    default:
                        $res = 'ERRO';
                        break;
                }
                if ($res != 'ERRO') {
                   echo("<p>$n1$operacao$n2 = $res</p>");
                } else{
                    echo("<p>Digite um valor valido</p>");
                }
            }
        }
        ?>
    </div>
</body>

</html>