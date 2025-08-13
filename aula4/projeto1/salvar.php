<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $nome        = $_POST['nome'];
            $cpf         = $_POST['CPF'];
            $nascimento  = $_POST['nascimento'];
            $telefone    = $_POST['telefone'];
            $endereco    = $_POST['endereco'];
            $reaisHora    = $_POST['reaisHora'];
            $HorasnoMes   = $_POST['HorasnoMes'];

            $nascimento  = strtotime($nascimento);
            $nascimento_f = date("d/m/Y", $nascimento);


            $linha = "$nome|$cpf|$nascimento_f|$telefone|$endereco|$reaisHora|$HorasnoMes\n";
            file_put_contents("arquivos/registro.txt", $linha, FILE_APPEND);
            //FILE_APPEND se o arquivo não existir ele cria, e se existir ele cria uma nova linha 

        }


        ?>
        timeout = setTimeout(voltar, 0);

        function voltar() {
            location.href = "index.php";
        }
    </script>
</body>

</html>