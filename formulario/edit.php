<?php

if(!empty($_GET['id']))
{
    
    include_once('config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0)
    {
        while($user_data = mysqli_fetch_assoc($result))
        {
            $nome = $user_data['nome']; 
            $data_nascimento = $user_data['data_nascimento']; 
            $cidade = $user_data['cidade']; 
            $estado = $user_data['estado']; 
            $endereco = $user_data['endereco']; 
            $telefone = $user_data['telefone']; 
            $email = $user_data['email']; 
            $senha = $user_data['senha']; 
            $nomePai = $user_data['nomePai'];
            $nomeMae = $user_data['nomeMae'];  
            $rg = $user_data['rg']; 
            $cpf = $user_data['cpf']; 
        }
    }
    else 
    {
        header('Location: sistema.php');
    }
}
    else
    {
        header('Location: sistema.php'); 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Cadastro</title>
</head>
<body>
    <a href="sistema.php">Voltar a Tela Inicial</a>
    <div class="box">
    <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Formulario de Cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text"  name="nome" id="nome_completo" class="inputUser" value = "<?php echo $nome ?>" required>
                    <label for="nome" class="labelInput">Nome completo:</label>
                </div>
                <br><br>
                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="date" name="data_nascimento" id="data_nascimento" value = "<?php echo $data_nascimento ?>" required>
                <br><br><br>
                 <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" value = "<?php echo $cidade ?>" required>
                    <label for="cidade" class="labelInput">Cidade:</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" value = "<?php echo $estado ?>" required>
                    <label for="estado" class="labelInput">Estado:</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" value = "<?php echo $endereco ?>" required>
                    <label for="endereco" class="labelInput">Endereço:</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" value = "<?php echo $telefone ?>" required>
                    <label for="telefone" class="labelInput">Telefone:</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" value = "<?php echo $email ?>" required>
                    <label for="email" class="labelInput">Email:</label>
                </div>
                <br><br>
               
                <div class="inputBox">
                    <input type="text" name="senha" id="senha" class="inputUser" value = "<?php echo $senha ?>" required>
                    <label for="senha" class="labelInput">Senha:</label>
                </div>
                <br><br>
                
                <div class="inputBox">
                    <input type="text"  name="nomePai" id="nomePai" class="inputUser" value = "<?php echo $nomePai ?>" required>
                    <label for="nomePai" class="labelInput">Nome do Pai:</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nomeMae" id="nomeMae" class="inputUser" value = "<?php echo $nomeMae ?>" required>
                    <label for="nomeMae" class="labelInput">Nome da Mãe:</label>
                </div>
                <br><br>
                <legend><b>Documentação</b></legend>
                <br><br>
                <input type="text" name="rg" id="rg" class="form-control" value = "<?php echo $rg ?>" onkeypress="$(this).mask('000.000.000-00');">
                <label for="rg" class="labelInput">RG:</label>
                <br><br>
                <input type="text" name="cpf" id="cpf" class="form-control" value = "<?php echo $cpf ?>" onkeypress="$(this).mask('00.000.000-0');">
                <label for="cpf" class="labelInput">CPF:</label>
                <br><br>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" name="update" id="update">
            </fieldset>
        </form>
    </div>
</body>
</html>