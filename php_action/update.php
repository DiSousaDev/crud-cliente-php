<?php
//Sessão
session_start();
// iniciando conexão
require_once 'db_connect.php';

if (isset($_POST['btn-editar'])) :
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $data_nascimento = mysqli_escape_string($connect, $_POST['data_nascimento']);
    $sexo = mysqli_escape_string($connect, $_POST['sexo']);
    $endereco = mysqli_escape_string($connect, $_POST['endereco']);
    $numero = mysqli_escape_string($connect, $_POST['numero']);
    $complemento = mysqli_escape_string($connect, $_POST['complemento']);
    $bairro = mysqli_escape_string($connect, $_POST['bairro']);
    $cidade = mysqli_escape_string($connect, $_POST['cidade']);
    $estado = mysqli_escape_string($connect, $_POST['estado']);
    $cep = mysqli_escape_string($connect, $_POST['cep']);
    $celular = mysqli_escape_string($connect, $_POST['celular']);
    $email = mysqli_escape_string($connect, $_POST['email']);

    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE cliente SET nome = '$nome', data_nascimento = '$data_nascimento', sexo = '$sexo', endereco = '$endereco', numero = '$numero', 
                   complemento = '$complemento', bairro = '$bairro', cidade = '$cidade', estado = '$estado', cep = '$cep', celular = '$celular', email = '$email' 
                   WHERE id = '$id'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cliente Alterado com Sucesso!";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao Alterar Cliente.";
        header('Location: ../index.php');
    endif;
endif;
