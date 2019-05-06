<?php

require_once '../utils/Conexao.php';

if($_POST){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $sql = "INSERT INTO usuarios 
    (nome, email, senha) 
    VALUES ('$nome', '$email', '$senha')";
    
    if($connect->query($sql) === TRUE){
        echo "Inserido com sucesso";
    }

    $connect->close();
}

?>