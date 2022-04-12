<?php

    //Exercício 2 da lista 3

    $palavra = "socorro"; //Palavra escolhida
    $partes = explode("o", $palavra); //Retira-se as vogais (no exemplo, apenas o "o")

    //Separação da palavra em partes, armazenada em vetores
    $parte1 = $partes[0];
    $parte2 = $partes[1];
    $parte3 = $partes[2];
    $parte4 = $partes[3];

    /*Exibição da palavra obtida a partir da substituição das vogais
    que tiveram seus lugares tomados pela concatenação de "x" */
    
    $palavra2 = $parte1."X".$parte2."X".$parte3.$parte4."X";
    echo $palavra2;


?>