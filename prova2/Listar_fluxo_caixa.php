<?php

    include('Conexao.php');
    $sql = 'SELECT * FROM fluxo_caixa';

    //retorna todos os dados da consulta
    $result = mysqli_query($con, $sql);

    //retorna a primeira linha
    $row = mysqli_fetch_array($result);

    //printr($row);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listagem de Fluxo de Caixa</title>
</head>
<body>
    <h1>Listagem de Fluxo de Caixa</h1>
    <table align="center" border="1" width=500>

        <!-- tr>th*quantidade desejada de colunas -->
        <tr>
            <th>Código</th>
            <th>Data</th>
            <th>Tipo</th>
            <th>Valor</th>
            <th>Historico</th>
            <th>Cheque</th>
            <th>Excluir</th>
        </tr>
    
    <!-- Criação dinâmica de linhas e colunas -->
    <?php
        while ($row = mysqli_fetch_array($result)) {
            echo '<tr>';
            echo '<td>' .$row['id'] .'</td>';
            echo '<td>'.$row['data']."</a></td>";
            echo '<td>' .$row['tipo'] .'</td>';
            echo '<td>' .$row['valor'] .'</td>';
            echo "<td><a href='Altera_fluxo_caixa.php?id=".$row['id']."'>".$row['historico']."</a></td>";
            echo '<td>' .$row['cheque'] .'</td>';
            echo "<td><a href=Excluir_fluxo_caixa.php?id=" .$row['id']."'>Excluir</a></td>";
            echo '</tr>';
        }
    ?>
    </table>
</body>
</html>