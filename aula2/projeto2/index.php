<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <style>
        /* Usei um tutorial para fazer as sombras estilo neumorfico */
        /* paleta de cor site
            https://coolors.co/f8f9fa-e9ecef-dee2e6-ced4da-adb5bd-6c757d-495057-343a40-212529
        */
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

        input[type="number"] {
            width: 80%;
            padding: 10px;
            border: none;
            border-radius: 8px;
            background-color: var(--platinum);
            font-size: 20px;
            margin-bottom: 15px;
            color: var(--space-cadet);

            /* efeito de sombra interna dupla */
            box-shadow:
                inset 2px 2px 6px rgba(74, 78, 105, 0.4),     /* sombra escura da direita/baixo */
                inset -2px -2px 6px rgba(255, 255, 255, 0.5); /* luz suave da esquerda/cima */
            }


        select {
            width: 80%;
            padding: 5px;
            border: none;
            border-radius: 8px;
            background-color: var(--platinum);
            font-size: 24px;
            margin-bottom: 15px;
            color: var(--space-cadet);
            text-align: center;

            /* efeito de sombra interna dupla */
            box-shadow:
                inset 2px 2px 6px rgba(74, 78, 105, 0.4),     /* sombra escura da direita/baixo */
                inset -2px -2px 6px rgba(255, 255, 255, 0.5); /* luz suave da esquerda/cima */
        }

        p {
            font-size: 30px;
        }

        input[type="submit"] {
            background-color: var(--french-gray);
            color: var(--space-cadet);
            border: none; /* tira a borda para dar o efeito limpo */
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow:
                4px 4px 8px rgba(74, 78, 105, 0.3),    /* sombra inferior direita */
                -4px -4px 8px rgba(255, 255, 255, 0.5); /* brilho superior esquerdo */
            }

        input[type="submit"]:hover {
        background-color: var(--french-gray-2);
        box-shadow:
            inset 2px 2px 5px rgba(74, 78, 105, 0.3),
            inset -2px -2px 5px rgba(255, 255, 255, 0.5);
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
            <input type="number" name="n2" id="numero" required>
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
                        } else {
                            $res = $n1 / $n2;
                        }
                        break;
                    case '**':
                        $res = $n1 ** $n2;
                        $operacao = ' elevado a ';
                        break;
                    case 'raiz':
                        $res = pow($n1, 1.0 / $n2);
                        $operacao = ' raiz de ';
                        break;
                    default:
                        $res = 'ERRO';
                        break;
                }
                if ($res != 'ERRO') {
                    echo ("<p>$n1$operacao$n2 = $res</p>");
                } else {
                    echo ("<p>Digite um valor valido</p>");
                }
            }
        }
        ?>
    </div>
</body>

</html>