<?php

$email = $_POST['email'];
$senha = $_POST['senha'];

include_once '../models/UsuarioModel.php';

$usuario = Usuario::logar($email, $senha);

session_start();

$_SESSION['logado'] = TRUE;
$_SESSION['id'] = $usuario->id;
$_SESSION['nome'] = $usuario->nome;

if($_SESSION['nome'] == 'Tiago'){
    header("Location: ../views/games.php");
}else{
    header("Location: ../index.php");
}

?>