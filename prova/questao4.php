<?php

    //Informações do formulário a serem processadas
    $nome   = $_GET['nome'];
    $cpf    = $_GET['cpf'];
    $rg     = $_GET['rg'];
    $estado = $_GET['SelEstado'];
    $sexo   = $_GET['OptSexo'];
    $saldo  = $_GET['saldo'];
    $total  = $_GET['total'];

    //Exibição de todos os dados cadastrados
    echo 'Nome: '.$nome .'<br>';
    echo 'CPF: '.$cpf .'<br>';
    echo 'RG: '.$rg .'<br>';
    echo 'Estado: ' .$estado .'<br>';
    echo 'Sexo: ' .$sexo .'<br>';
    echo 'Saldo do cartão: ' .$saldo .'<br>';
    echo 'Total da compra: ' .$total .'<br><br><br>';


    //Verificar se nem o nome, nem o RG, nem o CPF estão em branco
    if(empty($nome) or empty($rg) or empty($cpf)){
        echo 'O nome, o RG e o CPF devem estar preenchidos!';
    }

    //Verificar se é possível fazer a compra e, se sim, realizá-la.
    if($saldo < $total){
        echo 'Saldo insuficiente para concluir compra!';
    } else { echo $saldo-$total; }
?>