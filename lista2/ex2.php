<?php

    //Exercício 2 da lista 2
    //Exibir por extenso o mês referente ao valor da variável $mês

    $mes = 1;

    if($mes < 12 and $mes > 0)
        switch ($mes){
            case 1: echo 'O mês é janeiro'; break;
            case 2: echo 'O mês é fevereiro'; break;
            case 3: echo 'O mês é março'; break;
            case 4: echo 'O mês é abril'; break;
            case 5: echo 'O mês é maio'; break;
            case 6: echo 'O mês é junho'; break;
            case 7: echo 'O mês é julho'; break;
            case 8: echo 'O mês é agosto'; break;
            case 9: echo 'O mês é setembro'; break;
            case 10: echo 'O mês é outubro'; break;
            case 11: echo 'O mês é novembro'; break;
            case 12: echo 'O mês é dezembro'; break;
        }
    else
        echo 'O número do mês não é válido! Deve estar entre 1 e 12!'
?>