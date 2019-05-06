<?php

require_once '../utils/Conexao.php';

if($_POST){
    $nome = $_POST['nome'];
    $console = $_POST['console'];
    $categoria = $_POST['categoria'];
    $preco = $_POST['preco'];
    $desenvolvedora = $_POST['desenvolvedora'];
    $imagem = $_POST['imagem'];

    $id = $_REQUEST['id'];

$sql = "UPDATE games SET
nome = '$nome', console = '$console', categoria = '$categoria', preco = '$preco', desenvolvedora = '$desenvolvedora', imagem = '$imagem' 
WHERE id = {$id}";

if($connect->query($sql) === TRUE){
    header("Location: ../index.php");
}else{
    echo "Erro ao editar";
}

}

?>