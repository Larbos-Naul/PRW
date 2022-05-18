<?php

    include('Conexao.php'); //Inserir a esse programa as funionalidades de outro informado entre parênteses

    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $tel = $_GET['telefone'];
    $cel = $_GET['celular'];
    $apelido = $_GET['email'];
    $end = $_GET['endereco'];
    $bairro = $_GET['bairro'];
    $cidade = $_GET['cidade'];
    $estado = $_GET['estado'];

    echo "Nome do usuário: ".$nome."<br>"
    ."Apelido: ".$apelido."<br>"
    ."Endereço: ".$end."<br>"
    ."Bairro: ".$bairro."<br>"
    ."Cidade: ".$cidade."<br>"
    ."Estado: ".$estado."<br>"
    ."Telefone: ".$tel."<br>"
    ."Celular: ".$cel."<br>"
    ."Email: ".$email."<br>";

    $sql = "INSERT INTO  agenda (nome, apelido, endereco, bairro, cidade, estado, telefone, celular, email)
            VALUES ('".$nome."', '".$apelido."', '".$end."','".$bairro."','".$cidade."','".$estado."','".$tel."','".$cel."','".$email."')";

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