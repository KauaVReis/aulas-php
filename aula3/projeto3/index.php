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
            max-width: 100vh;
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
            /* tira a borda para dar o efeito limpo */
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

        .input {
            width: 300px;
            text-align: left;
            display: inline-block;
        }

        .scroll {
            overflow: auto;
            width: 100%;
            height: 80%;
        }
    </style>
</head>

<body>
    <div class="box">
        <h1>Formulario PHP</h1>
        <form action="" method="post">
            <div class="input">
                <label for="nome">Digite o seu nome:</label>
                <input type="text" name="nome" id="nome" required>
            </div>
            <div class="input">
                <label for="CPF">Digite o seu CPF:</label>
                <input type="text" name="CPF" id="CPF" required>
            </div>
            <div class="input">
                <label for="nascimento">Data Nascimento:</label>
                <input type="date" name="nascimento" id="nascimento" required>
            </div>
            <div class="input">
                <label for="email">Digite o seu Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="input">
                <label for="telefone">Digite o seu Telefone:</label>
                <input type="tel" name="telefone" id="telefone" required>
            </div>
            <div class="input">
                <label for="genero">Escolha o seu genero:</label>
                <select name="genero" id="genero">
                    <option value="homem">Homem</option>
                    <option value="mulher">Mulher</option>
                    <option value="outro">Outro</option>
                </select>
            </div>
            <div class="input">
                <label for="estado">Escolha o seu estado:</label>
                <select id="estado" name="estado">
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                    <option value="EX">Estrangeiro</option>
                </select>
            </div>
            <div class="input">
                <label for="cidade">Digite o nome da sua cidade:</label>
                <input type="text" name="cidade" id="cidade" required>
            </div>
            <div class="input">
                <label for="nomePai">Digite o nome do seu Pai:</label>
                <input type="text" name="nomePai" id="nomePai" required>
            </div>
            <div class="input">
                <label for="nomeMae">Digite o nome da sua Mãe:</label>
                <input type="text" name="nomeMae" id="nomeMae" required>
            </div>
            <input type="submit" value="Enviar" onclick="recarregar()">
        </form>
        <script>
            function recarregar() {
                window.location.reload();
            }
        </script>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nome        = $_POST['nome'];
        $cpf         = $_POST['CPF'];
        $nascimento  = $_POST['nascimento'];
        $email       = $_POST['email'];
        $telefone    = $_POST['telefone'];
        $genero      = $_POST['genero'];
        $cidade      = $_POST['cidade'];
        $nomeMae     = $_POST['nomeMae'];
        $nomePai     = $_POST['nomePai'];
        $estado      = $_POST['estado'];

        $nascimento  = strtotime($nascimento);
        $nascimento_f = date("d/m/Y", $nascimento);


        $linha = "$nome|$cpf|$nascimento_f|$email|$telefone|$genero|$estado|$cidade|$nomePai|$nomeMae\n";
        file_put_contents("arquivos/registro.txt", $linha, FILE_APPEND);
        //FILE_APPEND se o arquivo não existir ele cria, e se existir ele cria uma nova linha 

    }

    // EXIBIR TODOS OS DADOS SALVOS
    $arquivo = "arquivos/registro.txt";

    if (file_exists($arquivo)) {
        $linhas = file($arquivo); // Lê todas as linhas do arquivo como um array
        $qtdPessoas = count($linhas);
        $dados_linha = [];
        $max_campos = 0;
        //max_campos professor passou sem for dentro de outro 
        // echo"<pre>";
        // var_dump($linhas);
        // echo"</pre>";

        echo "<div class='box2'>";
        echo "<h2>Registros Salvos</h2>";
        echo "<h4>Existem $qtdPessoas registros</h4>";
        echo "<div class='scroll'>";
        echo "<table style='width:100%'>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Data Nascimento</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Gênero</th>
                <th>Estado</th>
                <th>Cidade</th>
                <th>Nome do seu pai</th>
                <th>Nome da sua mãe</th>
            </tr>";

        foreach ($linhas as $linha) {
            $dados = explode("|", trim($linha)); // Separa os dados e remove \n por causa do trim
            $dados_linha[] = $dados;
            //Sempre que tive | ele vai separar
            // echo "<script>console.log(" . json_encode($dados) . ");</script>";

            if ($max_campos < count($dados)) {
                $max_campos = count($dados);
            }
            echo "<tr>";
            foreach ($dados as $valor) {
                //htmlspecialchars Converta os caracteres predefinidos "<" (menor que) e ">" (maior que) em entidades HTML:
                echo "<td>" . htmlspecialchars($valor) . "</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
        echo "</div>";
        echo "</div>";
        echo "<hr>";
        echo "<pre> <h1>Array dos dados</h1><p>Maximo de campos em um array $max_campos</p>";
        var_dump($dados_linha);
        echo "</pre>";
        echo "<hr>";
        echo "<pre> <h1>JSON do array</h1>";
        $json = json_encode($dados_linha, JSON_PRETTY_PRINT);
        echo ($json . PHP_EOL);
        echo "</pre>";
        echo "";
        
    }
    ?>
</body>
<script>
</script>

</html>