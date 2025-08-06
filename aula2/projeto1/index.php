<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <style>
        .teste{
            padding: 0;
            margin: 0 auto;
            margin-top: 5%;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
            text-align: center;
            width: 20%;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div class="teste">
    <form action="index.php" method="post">
        <label for="numero">Digite um número:</label>
        <input type="text" name="numero" id="numero">
        <input type="submit" value="Enviar">
    </form>
    </div>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $numero = $_POST['numero'];
}
if (!empty($numero)) {
echo"<div class='teste''>";
echo"<h1>Tabuada do $numero</h1>";
for ($i=1; $i < 11; $i++) { 
    echo("<div>");
        echo"$numero x $i = ". $numero*$i;
        echo"<br>";
    echo"</div>";
    //  echo"<br>";
}
}
echo"</div>"
?>