<?php

    //EXEMPLO DE MANIPULAÇÃO DE STRINGS identico ao slide

    $palavra = 'Ciência da Computação ';
    echo 'A variável contém: ' . strlen($palavra) . 'caracteres' . '<br>';
    $palavra = trim($palavra);
    echo 'A variável agora contém: ' . strlen($palavra) . 'caracteres';
?>