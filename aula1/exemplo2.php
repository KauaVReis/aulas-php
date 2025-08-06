
<?php
echo"<div style = '
            padding: 0;
            margin: 0 auto;
            margin-top: 15%;
            box-sizing: border-box;
            font-family: Arial, sans-serif
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
            text-align: center;
            width: 80%;
            font-size: 24px;
'>";
echo"<h1>Tabuada 1 a 10</h1>";
for ($i=1; $i < 11; $i++) { 
    echo("<div style='width: 150px; display: inline-block;'>");
    for ($j=1; $j <11 ; $j++) { 
        echo"$j x $i = ". $j*$i;
        echo"<br>";
    }
    echo"</div>";
    //  echo"<br>";
}
echo"</div>"
?>