<?php

$localhost = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "db_games";

// Criando a conexao
$connect = new Mysqli($localhost, $username, $password, $dbname);

// Verificando status da conexao
if($connect->connect_error){
    die("Falhar ao conectar no banco de dados. ".$connect->connect_error);
}

?>