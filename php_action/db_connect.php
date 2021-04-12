<?php
//conexão com banco de dados
$servername = "localhost";
$username = "root";
$password = "root";
$db_name = "dtb-clientes-php";

$connect = mysqli_connect($servername, $username, $password, $db_name);

if(mysqli_connect_error()):
    echo "Erro ao conectar com banco de dados: ".mysqli_connect_error();
endif;
