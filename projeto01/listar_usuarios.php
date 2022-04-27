<?php

    include('conexao.php');
    $sql = 'SELECT * FROM usuario';

    //retorna todos os dados da consulta
    $result = mysqli_query($con, $sql);

    //retorna a primeira linha
    $row = mysqli_fetch_array($result);

    

?>