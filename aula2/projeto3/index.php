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


    </style>
</head>

<body>
    <div class="box">
        <h1>Tipos de dados</h1>
        <?php
        date_default_timezone_set('America/Sao_Paulo');
            //Inteiro
            $idade = 19;
            //Float
            $altura = 1.75;
            //String
            $nome = "Kauã";
            //Boolean
            $aprovado = true;
            //Array
            $frutas = ["maça", "banana", "laranja"];
            //NULL
            $semValor = null;

            echo"Eu tenho $idade anos e meu nome é $nome tenho $altura e gosto de Programar<br>";
            echo '<pre style="background-color: black; color: white;">';
            print_r($frutas);
            echo "</pre>";
            echo("$semValor <br> $aprovado <br>");
            echo('Hoje é dia: '. date("d/m/y") ."<br>");
            echo('Hora atual: '. date("H:i:s") ."<br>");

            $amanha = new DateTime();
            $amanha->modify("+1 day");
            echo("Amanhã será: ". $amanha->format("d/m/y") ."<br>");
            $timestamp = strtotime("last Friday");
            echo("Ultima sexta-feira foi: ". date("d/m/Y", $timestamp))            
        ?>
    </div>
</body>

</html>