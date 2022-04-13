<?php 

    $salario = 300; //Valor do salário

    //Algoritmo do reajuste salarial
    if($salario <= 300)
        echo "O salário reajustado resulta em: R$" .$salario+($salario*(50/100));
    else
        echo "O salario reajustado resulta em: R$" .$salario+($salario*(30/100));
?>