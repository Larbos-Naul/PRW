<?php

    include('conexao.php'); //Inserir a esse programa as funionalidades de outro informado entre parênteses

    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $tel = $_GET['telefone'];

    echo "Nome do usuário: ".$nome."<br>"
    ."Email: ".$email."<br>"
    ."Telefone: ".$tel;

    $sql = "INSERT INTO  usuario (nome_usuario, email_usuario, telefone_usuario)
                VALUES ('".$nome."', '".$email."', '".$tel."')";

    $result = mysqli_query($con, $sql);

    if($result)
    {
        echo "<br><br>Dados inseridos com sucesso!";
    }
    else
    {
        echo "<br><br>Erro ao inserir oo banco de dados: ".mysqli_error($con);
    }


?>