<?php
    
    include_once('config.php');

    if(isset($_POST['update']))
    {
    $id = $_POST['id'];
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

    $sqlUpdate = "UPDATE usuarios SET nome='$nome', data_nascimento='$data_nascimento', cidade='$cidade', estado='$estado', endereco='$endereco', telefone='$telefone', email='$email', senha='$senha', nomePai='$nomePai', nomeMae='$nomeMae', rg='$rg', cpf='$cpf'
    WHERE id='$id'";

    $result = $conexao->query($sqlUpdate);
    }
    header('Location: sistema.php');

?>