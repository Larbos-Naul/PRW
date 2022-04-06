<?php

    //Exercício 1 da lista 2

    $num = 0;
    $divisor = 0;
    $primo = true;

    for($num = 1; $num < 200; $num++){ //Repetição dos números a serem verificados

        for($divisor = 2; $divisor <= $num; $divisor++){ //Verificar se o número não é primo, exibe se "não não for primo"
            if($num % $divisor == 0){
                break;
            }
            else {echo "$num <br>";}
            
        }
        
    }
?>