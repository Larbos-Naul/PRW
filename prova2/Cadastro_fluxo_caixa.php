<?php

    include('Conexao.php');

    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];

    echo "data do cadastro: ".$data."<br>"
    ."Tipo : ".$tipo."<br>"
    ."Valor : ".$valor."<br>"
    ."Histórico: ".$historico."<br>"
    ."Cheque : ".$cheque."<br>";

    $sql = "INSERT INTO  fluxo_caixa (data, tipo, valor, historico, cheque)
                VALUES ('".$data."', '".$tipo."', '".$valor."', '".$historico."', '".$cheque."')";

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