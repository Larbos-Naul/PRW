<?php

    //EXEMPLO DE MANIPULAÇÃO DE STRINGS identico ao slide

    $palavra = 'Ciência da Computação           ';
    echo 'A variável contém: ' . strlen($palavra) . ' caracteres' . '<br>'; //strlen = tamanho da string

    $palavra = trim($palavra); //trim = tamanho sem os espaços
    echo 'A variável agora contém: ' . strlen($palavra) . ' caracteres';
?>