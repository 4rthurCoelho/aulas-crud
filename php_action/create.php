<?php
//conexão
require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['e-mail']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);
    
    $sql = "INSERT INTO clientes (`nome`, `sobrenome`, `e-mail`, `idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";
    //$sql = "INSERT INTO clientes SET `nome`='$nome', `sobrenome`='$sobrenome', `e-mail`='$email', `idade`='$idade';";
    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro no cadastro!";
        header('Location: ../index.php');
    endif;
endif;