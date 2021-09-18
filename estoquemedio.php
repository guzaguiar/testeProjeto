<?php

    $est_min=$_POST["txtest_min"];
    $est_max=$_POST["txtest_max"];

    $media=($est_min+$est_max)/2;

    echo("Quantidade mínima: $est_min<br>");
    echo("Quantidade máxima: $est_max<br>");

    $resultado=($media); 
    echo("O estoque médio é de $resultado.");

?>