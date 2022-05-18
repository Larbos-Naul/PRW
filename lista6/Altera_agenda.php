<?php
   include('Conexao.php');
   $id_agenda = $_GET['id_agenda'];
   $sql = 'SELECT * FROM agenda where id_agenda='.$id_agenda;
   $result = mysqli_query($con, $sql);
   $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Agendas</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <h1>Cadastro de Agendas - IFSP</h1>
    <div id="teste">
        <form method="post" action="Altera_agenda_exe.php">
            <fieldset>
                <legend>Cadastro</legend>
                <div class="form-item">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" value="<?php echo $row['nome']?>" placeholder="Digite o nome ">
                </div>
                <div class="form-item">
                    <label for="apelido">Apelido:</label>
                    <input type="apelido" id="apelido" name="apelido" value="<?php echo $row['apelido']?>" placeholder="Digite o apelido ">
                </div>
                <div class="form-item">
                    <label for="end">Endereço:</label>
                    <input type="text" id="end" name="end" value="<?php echo $row['endereco']?>" placeholder="Digite o Endereço ">
                </div>
                <div class="form-item">
                    <label for="bairro">Bairro:</label>
                    <input type="text" id="bairro" name="bairro" value="<?php echo $row['bairro']?>" placeholder="Digite o Bairro ">
                </div>
                <div class="form-item">
                    <label for="cidade">Cidade:</label>
                    <input type="text" id="cidade" name="cidade" value="<?php echo $row['cidade']?>" placeholder="Digite a Cidade ">
                </div>
                <div class="form-item">
                    <label for="estado">Estado:</label>
                    <input type="text" id="estado" name="estado" value="<?php echo $row['estado']?>" placeholder="Digite o Estado ">
                </div>
                <div class="form-item">
                    <label for="tel">Telefone:</label>
                    <input type="text" id="tel" name="tel" value="<?php echo $row['telefone']?>" placeholder="Digite o Telefone ">
                </div>
                <div class="form-item">
                    <label for="cel">Celular:</label>
                    <input type="text" id="cel" name="cel" value="<?php echo $row['celular']?>" placeholder="Digite o Celular ">
                </div>
                <div class="form-item">
                    <label for="email">E-mail:</label>
                    <input type="text" id="email" name="email" value="<?php echo $row['email']?>" placeholder="Digite o Email">
                </div>
                <div class="form-item">
                    <input id="btn" type="submit" value="Enviar">
                    <a href='index.php'>Voltar</a>
                </div>
                <input name="id_agenda" type="hidden" value="<?php echo $row['id_agenda']?>">
            </fieldset>
        </form>
    </div>
</body>
</html>