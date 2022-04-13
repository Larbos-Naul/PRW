<?php
    $produto = strtolower($_GET['produto']);

    $vetor = array("mouse","teclado","monitor","GPU","processador","headset,"mouse");
    $i = array_search($produto, $vetor);

    if($i === false)
        echo "Produto não encontrado";
    
    else
        echo "Produto encontrado na posição" .$i ."do vetor";
?>