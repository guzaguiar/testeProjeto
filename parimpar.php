<?php

    $num=$_POST["txtnum"];

    if($num % 2 == 0) {
        echo("O número é par.");
    }else{
        echo("O número é ímpar.");
    }

?>