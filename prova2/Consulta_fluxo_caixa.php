<?php
include('conexao.php');
$tipo = $_POST['tipo'];

if ($tipo == 'entrada') {
    
    $sql = "SELECT SUM(valor) valor FROM fluxo_caixa WHERE tipo = 'entrada'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    echo "Total entrada: R$".($row['valor']) ;

} else if ($tipo == 'saida') {

    $sql = "SELECT SUM(valor) valor FROM fluxo_caixa WHERE tipo = 'saida'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    echo "Total saída: R$".($row['valor']) ;

} else if ($tipo == 'saldo') {

    $sql = "SELECT  SUM(CASE WHEN tipo = 'entrada' THEN valor ELSE 0 END) -
                    SUM(CASE WHEN tipo = 'saida' THEN valor ELSE 0 END) AS valor FROM fluxo_caixa";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    echo "Total: R$".($row['valor']) ;

}

?>

<br><br><a href="index.php">Voltar</a>