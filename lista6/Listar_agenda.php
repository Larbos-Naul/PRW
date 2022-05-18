<?php

    include('Conexao.php');
    $sql = 'SELECT * FROM agenda';

    //retorna todos os dados da consulta
    $result = mysqli_query($con, $sql);

    //retorna a primeira linha
    $row = mysqli_fetch_array($result);

    //printr($row);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Listagem de Agendas</title>
</head>
<body>
    <h1>Listagem de Agendas</h1>
    <table align="center" border="1" width=500>

        <!-- tr>th*quantidade desejada de colunas -->
        <tr>
            <th>CODIGO</th>
            <th>NOME</th>
            <th>APELIDO</th>
            <th>ENDEREÇO</th>
            <th>BAIRRO</th>
            <th>CIDADE</th>
            <th>ESTADO</th>
            <th>TELEFONE</th>
            <th>CELULAR</th>
            <th>EMAIL</th>
        </tr>
    
    <!-- Criação dinâmica de linhas e colunas -->
    <?php
        while ($row = mysqli_fetch_array($result)) {
            echo '<tr>';
            echo '<td>' .$row['id_agenda'] .'</td>';
            echo "<td><a href='Altera_agenda.php?id_agenda=".$row['id_agenda']."'>".$row['nome']."</a></td>";
            echo '<td>' .$row['endereco'] .'</td>';
            echo '<td>' .$row['bairro'] .'</td>';
            echo '<td>' .$row['cidade'] .'</td>';
            echo '<td>' .$row['estado'] .'</td>';
            echo '<td>' .$row['telefone'] .'</td>';
            echo '<td>' .$row['celular'] .'</td>';
            echo '<td>' .$row['email'] .'</td>';
            echo "<td><a href=Excluir_agenda.php?id_agenda=" .$row['id_agenda'].">Excluir</a></td>";
            echo '</tr>';
        }
    ?>
    </table>
</body>
</html>