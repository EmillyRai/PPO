<?php

if(isset($_POST['submit']))
{
    
    include_once('config.php');

    $nome = $_POST ['nome']; 
    $data_nascimento = $_POST ['data_nascimento']; 
    $cidade = $_POST ['cidade']; 
    $estado = $_POST ['estado']; 
    $endereco = $_POST ['endereco']; 
    $telefone = $_POST ['telefone']; 
    $email = $_POST ['email']; 
    $senha = $_POST ['senha']; 
    $nomePai = $_POST ['nomePai'];
    $nomeMae = $_POST ['nomeMae'];  
    $rg = $_POST ['rg']; 
    $cpf = $_POST ['cpf']; 

    
    
    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, data_nascimento, cidade, estado, endereco, telefone, email, senha, nomePai, nomeMae, rg, cpf) 
    VALUES ('$nome', '$data_nascimento', '$cidade', '$estado', '$endereco', '$telefone', '$email', '$senha','$nomePai', '$nomeMae', '$rg', '$cpf')");

    header('Location: tela-de-login.php');
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
    <a href="home.php">Voltar a Tela Inicial</a>
    <div class="box">
    <form action="formulario-cadastro.php" method="POST">
            <fieldset>
                <legend><b>Formulario de Cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text"  name="nome" id="nome_completo" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo:</label>
                </div>
                <br><br>
                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                 <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade:</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado:</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço:</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone:</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email:</label>
                </div>
                <br><br>
               
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha:</label>
                </div>
                <br><br>
                
                <div class="inputBox">
                    <input type="text"  name="nomePai" id="nomePai" class="inputUser" required>
                    <label for="nomePai" class="labelInput">Nome do Pai:</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nomeMae" id="nomeMae" class="inputUser" required>
                    <label for="nomeMae" class="labelInput">Nome da Mãe:</label>
                </div>
                <br><br>
                <legend><b>Documentação</b></legend>
                <br><br>
                <input type="text" name="rg" id="rg" class="form-control" onkeypress="$(this).mask('000.000.000-00');">
                <label for="rg" class="labelInput">RG:</label>
                <br><br>
                <input type="text" name="cpf" id="cpf" class="form-control" onkeypress="$(this).mask('00.000.000-0');">
                <label for="cpf" class="labelInput">CPF:</label>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>