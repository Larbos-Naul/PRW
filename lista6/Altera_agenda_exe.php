<?php
    include('Conexao.php');
    $id_agenda = $_POST['id_agenda'];
    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $endereco = $_POST['end'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $telefone = $_POST['tel'];
    $celular = $_POST['cel'];
    $email = $_POST['email'];
    
    echo "<h1> Alteração de dados </h1>";
    echo "<p> Nome da Agenda: " . $nome . "<p>";
    
	
	$sql = "UPDATE usuario SET
            nome ='".$nome."',
            email='".$email."',
            telefone='".$telefone."',
            celular='".$celular."',
            endereco='".$endereco."',
            bairro='".$bairro."',
            cidade='".$cidade."',
            estado='".$estado."',
            apelido='".$apelido."',
            WHERE agenda=".$id_agenda;
	    
	$result = mysqli_query($con, $sql);
	if($result)
		echo "Dados alterados com sucesso <br>";
	else
		echo "Erro ao alterar no banco de dados: ".mysqli_error($con)."<br>";

?>

<a href='index.php'> Voltar </a>