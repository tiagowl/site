<?php

require_once '../utils/Conexao.php';

if($_POST){
    $nome = $_POST['nome'];
    $console = $_POST['console'];
    $categoria = $_POST['categoria'];
    $preco = $_POST['preco'];
    $desenvolvedora = $_POST['desenvolvedora'];
    $imagem = $_FILES['imagem'];
    $descricao = $_POST['descricao'];

    if(isset($_FILES['imagem'])){
        $extensao = strtolower(substr($_FILES['imagem']['name'], -4)); //pega a extensao do arquivo
        $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
        $diretorio = "../img/"; //define o diretorio para onde enviaremos o arquivo
        move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome); //efetua o upload

    $sql = "INSERT INTO games 
    (nome, console, categoria, preco, desenvolvedora, imagem, descricao) 
    VALUES ('$nome', '$categoria', '$console', '$preco', '$desenvolvedora', '$novo_nome', '$descricao')";
    
    if($connect->query($sql) === TRUE){
        echo 'inserido com sucesso';
    }
   
    $connect->close();
}

}

?>