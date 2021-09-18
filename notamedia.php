<?php

    $nome=$_POST["txtnomedoaluno"];
    $curso="DS - 2º Módulo";
    $cursando=true;
    $nota01=$_POST["txtnota01"];
    $nota02=$_POST["txtnota02"];
    $nota03=$_POST["txtnota03"];
    $nota04=$_POST["txtnota04"];

    $media=($nota01+$nota02+$nota03+$nota04)/4;

    echo("Boletim de $nome<br>$curso<br>");
    echo("1º bimestre: $nota01<br>");
    echo('2º bimestre: '.$nota02.'<br>'); //outro modo de fazer
    echo("3º bimestre: $nota03<br>");
    echo("4º bimestre: $nota04<br>");
    echo("Média: $media<br>");

    if($media >= 6) {
        echo("Prof. Augusto perdeu! Aluno(a) aprovado!");
    }else{
        echo("Prof. Augusto ganhou! Aluno(a) reprovado!");
    }
    
    $resultado=($media >= 6)? "<br>Prof. Augusto perdeu! Aluno(a) aprovado!": "Prof. Augusto ganhou! Aluno(a) reprovado!";
    echo($resultado);
    //estrutura ternário: outro modo de fazer if/else

?>