<?php

    //Fazer a conexão do php com o MySQL

    $hostname = 'localhost';
    $port = 3307;
    $username = 'root';
    $password = '';
    $database = 'Lista7';

    $con = mysqli_connect($hostname, $username, $password, $database, $port);
    if(mysqli_connect_errno()){
        printf("Erro ao conectar ao banco de dados: %s\n", mysqli_connect_error());
        exit;
    }

?>