<?php
//Sessão
session_start();
// iniciando conexão
require_once 'db_connect.php';

if (isset($_POST['btn-cadastrar'])) :
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

    $sql = "INSERT INTO cliente (nome, data_nascimento, sexo, endereco, numero, complemento, bairro, cidade, estado, cep,celular, email)
            VALUES ('$nome', '$data_nascimento', '$sexo', '$endereco', '$numero', '$complemento', '$bairro', '$cidade', '$estado', '$cep', '$celular', '$email')";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cliente Cadastrado com Sucesso!";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao Cadastrar Cliente.";
        header('Location: ../index.php');
    endif;
endif;
