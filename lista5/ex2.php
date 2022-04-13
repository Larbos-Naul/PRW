<?php
    $produto = strtolower($_GET['produto']);

    $vetor = array("mouse","teclado","monitor","GPU","processador","headset");
    $vetor["mouse"]="R$10";
    $vetor["teclado"]="R$300";
    $vetor["monitor"]="R$1400";
    $vetor["GPU"]="R$700";
    $vetor["processador"]="R$9000";
    $vetor["headset"]="R$30";

    $i = array_search($produto, $vetor);

    if($i === false){
        echo "Elemento não encontrado";
    }
    else{
        echo "Elemento encontrado na posição " .$i ."do vetor<br>";
        echo "O produto: ";
        print_r($produto);
        echo " custa ";
            if(($vetor[$produto]) == $_GET['preco']){
                print_r($vetor[$produto]);
            }
            else{
                echo "preço inserido errado!!";
            }
    }
?>