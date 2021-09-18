<?php

    $sexo=$_POST["txtsexo"];
    $altura=$_POST["txtaltura"];
    $pesomasc= (72.7 * $altura) - 58;
    $pesofem= (62.1 * $altura) - 44.7;

    if($sexo == "M"){
        echo("Seu peso ideal é $pesomasc kg.");
    }else{
        echo("Seu peso ideal é $pesofem kg.");
    }

?>