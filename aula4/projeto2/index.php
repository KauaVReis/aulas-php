<?php
$arquivo = "arquivos/registro.txt";

// PROCESSA FORMULÁRIO
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $destino = "uploads/";
    $curriculo = $_FILES["curriculo"];

    if ($curriculo["error"] == UPLOAD_ERR_OK) {
        $nome_temp = $curriculo["tmp_name"];
        $nome_final = $destino . basename($curriculo["name"]);
        $nome_arquivo = basename($curriculo["name"]);

        if (!file_exists($destino)) {
            mkdir($destino, 0755, true);
        }
        if (move_uploaded_file($nome_temp, $nome_final)) {
            echo "Arquivo enviado com sucesso!";
        } else {
            echo "Falha ao mover o arquivo.";
        }
    } else {
        echo "Erro no uploud: " . $curriculo["error"];
    }
    $nome        = $_POST['nome'];
    $cpf         = $_POST['CPF'];
    $nascimento  = $_POST['nascimento'];
    $telefone    = $_POST['telefone'];
    $endereco    = $_POST['endereco'];
    $reaisHora   = $_POST['reaisHora'];
    $HorasnoMes  = $_POST['HorasnoMes'];
    $Curriculo   = $_POST['curriculo'];

    $nascimento_f = date("d/m/Y", strtotime($nascimento));

    $linha = "$nome|$cpf|$nascimento_f|$telefone|$endereco|$reaisHora|$HorasnoMes|$nome_final|$nome_arquivo\n";
    file_put_contents($arquivo, $linha, FILE_APPEND);

    // Redireciona para evitar reenvio ao dar F5
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário e Registros</title>
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

        .box2 {
            max-width: 60%;
            background-color: var(--platinum);
            width: 90%;
            margin: 5% auto;
            padding: 20px;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
            border-radius: 10px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
            text-align: center;
            font-size: 20px;

            box-shadow:
                inset 2px 2px 5px rgba(74, 78, 105, 0.3),
                inset -2px -2px 5px rgba(255, 255, 255, 0.5);
            overflow: auto;
            height: 80vh;
        }

        body {
            background-color: var(--platinum);
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        input {
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
                inset 2px 2px 6px rgba(74, 78, 105, 0.4),
                /* sombra escura da direita/baixo */
                inset -2px -2px 6px rgba(255, 255, 255, 0.5);
            /* luz suave da esquerda/cima */
        }


        select {
            width: 80%;
            padding: 10px;
            border: none;
            border-radius: 8px;
            background-color: var(--platinum);
            font-size: 24px;
            margin-bottom: 15px;
            color: var(--space-cadet);
            text-align: center;

            /* efeito de sombra interna dupla */
            box-shadow:
                inset 2px 2px 6px rgba(74, 78, 105, 0.4),
                /* sombra escura da direita/baixo */
                inset -2px -2px 6px rgba(255, 255, 255, 0.5);
            /* luz suave da esquerda/cima */
        }

        p {
            font-size: 30px;
        }

        input[type="submit"] {
            background-color: var(--french-gray);
            color: var(--space-cadet);
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow:
                4px 4px 8px rgba(74, 78, 105, 0.3),
                /* sombra inferior direita */
                -4px -4px 8px rgba(255, 255, 255, 0.5);
            /* brilho superior esquerdo */
        }

        input[type="submit"]:hover {
            background-color: var(--french-gray-2);
            box-shadow:
                inset 2px 2px 5px rgba(74, 78, 105, 0.3),
                inset -2px -2px 5px rgba(255, 255, 255, 0.5);
        }

        table,
        tr,
        td,
        th {
            box-shadow:
                inset 2px 2px 5px rgba(74, 78, 105, 0.3),
                inset -2px -2px 5px rgba(255, 255, 255, 0.5);

            background-color: var(--seasalt);
            padding: 5px;
        }

        pre {
            margin: 0 auto;
            width: 30%;
            padding: 20px;
            border: none;
            border-radius: 8px;
            background-color: var(--seasalt);
            font-size: 15px;
            color: var(--space-cadet);

            /* efeito de sombra interna dupla */
            box-shadow:
                inset 2px 2px 6px rgba(74, 78, 105, 0.4),
                /* sombra escura da direita/baixo */
                inset -2px -2px 6px rgba(255, 255, 255, 0.5);
            /* luz suave da esquerda/cima */

            overflow: auto;
            height: 60vh;
            margin-bottom: 25px;
        }

        hr {
            background-color: var(--seasalt);
            box-shadow:
                inset 2px 2px 6px rgba(74, 78, 105, 0.4),
                /* sombra escura da direita/baixo */
                inset -2px -2px 6px rgba(255, 255, 255, 0.5);
            /* luz suave da esquerda/cima */
            height: 6px;
            width: 99%;

        }

        #curriculo {
            display: none;
        }

        /* Botão fake no estilo neumórfico */
        .label-file {
            display: inline-block;
            padding: 12px 24px;
            background-color: var(--platinum);
            border-radius: 8px;
            font-size: 18px;
            color: #333;
            cursor: pointer;
            box-shadow:
                4px 4px 8px var(--shadow-dark),
                -4px -4px 8px var(--shadow-light);
            transition: all 0.3s ease;
        }

        .label-file:hover {
            box-shadow:
                inset 2px 2px 6px rgba(74, 78, 105, 0.4),
                /* sombra escura da direita/baixo */
                inset -2px -2px 6px rgba(255, 255, 255, 0.5);
        }

        /* Texto do arquivo */
        #file-name {
            display: block;
            margin-left: 12px;
            font-size: 14px;
            color: #333;
            font-weight: bold;
            margin: 6px 0px 6px 0px;
        }
    </style>
</head>

<body>
    <div class="box">
        <h1>Formulario PHP</h1>
        <form method="post" action="" enctype="multipart/form-data">
            <label for="nome">Digite o seu nome:</label>
            <input type="text" name="nome" id="nome" required>

            <label for="CPF">Digite o seu CPF:</label>
            <input type="text" name="CPF" id="CPF" required><br>

            <label for="nascimento">Data Nascimento:</label>
            <input type="date" name="nascimento" id="nascimento" required>

            <label for="telefone">Digite o seu Telefone:</label>
            <input type="tel" name="telefone" id="telefone" required>

            <label for="endereco">Digite o seu Endereço:</label>
            <input type="text" name="endereco" id="endereco" required>

            <div style="display: flex; width: 80%; margin: 0 auto;">
                <div>
                    <label for="reaisHora">Reais por hora</label>
                    <input type="number" name="reaisHora" step="0.01">
                </div>
                <div>
                    <label for="HorasnoMes">Horas no mês</label>
                    <input type="number" name="HorasnoMes">
                </div>
            </div>
            <label for="" class="teste">Seu Curriculo</label>
            <label for="curriculo" class="label-file">📄 Selecionar Currículo</label>
            <input type="file" name="curriculo" id="curriculo">
            <span id="file-name">Nenhum arquivo selecionado</span>
            <input type="submit" value="Enviar">
        </form>
    </div>

    <?php
    // EXIBE OS REGISTROS
    if (file_exists($arquivo)) {
        $linhas = file($arquivo);
        $qtdPessoas = count($linhas);

        echo "<div class='box2'>";
        echo "<h2>Registros Salvos</h2>";
        echo "<h4>Existem $qtdPessoas registros</h4>";
        echo "<table style='width:100%'>
        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Data Nascimento</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Reais por hora</th>
            <th>Total horas no mês</th>
            <th>Ver curriculo</th>
            <th>Nome do arquivo</th>
        </tr>";

        foreach ($linhas as $linha) {
            $dados = explode("|", trim($linha));
            echo "<tr>";
            foreach ($dados as $indice => $valor) {
                if ($indice === 7 && !empty($valor)) { // índice 7 é o arquivo
                    $ext = strtolower(pathinfo($valor, PATHINFO_EXTENSION)); // pega a extensão
                    if (in_array($ext, ['png', 'jpg', 'jpeg', 'gif'])) {
                        echo "<td><a href='" . htmlspecialchars($valor, ENT_QUOTES) . "' target='_blank'><img src='" . htmlspecialchars($valor, ENT_QUOTES) . "' style='max-width:100px; max-height:100px;'></a></td>";
                    } else {
                        echo "<td><a href='" . htmlspecialchars($valor, ENT_QUOTES) . "' target='_blank'>Abrir arquivo</a></td>";
                    }
                } else {
                    echo "<td>" . htmlspecialchars($valor, ENT_QUOTES) . "</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
    }
    ?>
</body>
<script>
    document.getElementById('curriculo').addEventListener('change', function() {
        let fileName = this.files.length > 0 ? this.files[0].name : "Nenhum arquivo selecionado";
        document.getElementById('file-name').textContent = fileName;
    });
</script>

</html>

<?php
// $target_dir = "uploads/";
// $target_file = $target_dir . basename($_FILES["curriculo"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// // Check if file already exists
// if (file_exists($target_file)) {
//   echo "Sorry, file already exists.";
//   $uploadOk = 0;
// }

// // Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" != "txt" ) {
//   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//   $uploadOk = 0;
// }

// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//   echo "Sorry, your file was not uploaded.";
// // if everything is ok, try to upload file
// } else {
//   if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//     echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
//   } else {
//     echo "Sorry, there was an error uploading your file.";
//   }
// }
// 
?>