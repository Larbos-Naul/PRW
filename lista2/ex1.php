<?php

    //Exercício 1 da lista 2

    $num = 0;
    $somapar = 0;

    //foram usadas chaves para prevenção de quaisquer erros mas o uso destas não era fulcral

    for($num = 1; $num < 100; $num++){
        if($num % 2 == 0){$somapar = $somapar + $num;}
    }

    echo 'A soma de todos os números pares menores que 100 é igual a: ' .$somapar;
?>