<?php
//Sessão
session_start();
// iniciando conexão
require_once 'db_connect.php';

if (isset($_POST['btn-deletar'])) :
   
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM cliente WHERE id = '$id'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cliente Excluido com Sucesso!";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao Excluir Cliente.";
        header('Location: ../index.php');
    endif;
endif;
