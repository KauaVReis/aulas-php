<?php
    echo"<h1>do while</h1> <br>";
    $arrayNumero = [];
    $c = 0;
    do{
        echo++$c ."x1 = ". 1*$c ."<br>";
        $arrayNumero[] = $c;
    }
    while($c < 10);
    //Array para texto, muito bom para decrescnte e crescente
    //rsort decrescente
    //asort crescente
    rsort($arrayNumero);
    $arrayTexto = implode(', ', $arrayNumero);
    echo($arrayTexto);
?>