<?php

    require_once '../utils/Conexao.php';

    if($_POST){
        $id = $_POST['id'];

        $sql = "DELETE FROM games
                WHERE id = {$id}";
        if($connect->query($sql) === TRUE){
            echo "Excluído com sucesso";
        }
    }

?>