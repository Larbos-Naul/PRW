<?php 

    $n1 = 3; //Números quaisquer com valores fixos nas variáveis
    $n2 = 6;

    $i = 0; //Indice do contador do for
    $soma = 0; //Variável responsável pelo produto final através de somas

    for($i; $i < $n1; $i++){
        $soma = $soma + $n2;
    }

    echo 'O produto do primeiro número pelo segundo é: ' .$soma;
?>