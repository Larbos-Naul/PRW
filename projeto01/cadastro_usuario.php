<?php

    include('conexao.php'); //Inserir a esse programa as funionalidades de outro informado entre parênteses

    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $tel = $_GET['telefone'];

    echo $nome .'<br>' .$email .'<br>' .$tel;


?>