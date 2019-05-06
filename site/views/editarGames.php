<?php

include_once '../models/GameModel.php';

$id = $_REQUEST['id'];

$game = Game::getProdutoById($id);

$nome = $game->nome;
$console = $game->console;
$categoria = $game->categoria;
$preco = $game->preco;
$desenvolvedora = $game->desenvolvedora;
$action = "editar_game.php?id=".$id;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Game</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<header>
    <nav class="nav navbar-nav navbar-expand-lg bg-info " >
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" ></button>
        <span class="navbar-toggler-icon" ></span>
        <div class="collapse navbar-collapse" id="navbar" >
            <ul class="navbar-nav mr-auto" >
                <li class="nav-item" >
                    <a href="../index.php" class="nav-link" ><h5>
                        <img src="../img/outline-home-24px.svg">
                    </h5></a>
                </li>
                <li class="nav-item" >
                    <a href="#" class="nav-link" ><h5>
                        Games
                    </h5></a>
                </li>
                <li class="nav-item" >
                    <a href="#" class="nav-link" ><h5>
                       Usuarios
                    </h5></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<br>
<br>
<br>

<form action="../controllers/<?php echo $action ?>" method="post" enctype="multipart/form-data">
    <div class="form-group" >
        <label>Nome</label>
        <input type="text" name="nome" value="<?php echo $nome ?>" id="nome" class="form-control">
        <br>
        <label>Console</label>
        <input type="text" name="console" value="<?php echo $console ?>" id="console" class="form-control">
        <br>
        <label>Categoria</label>
        <input type="text" name="categoria" value="<?php echo $console ?>" id="categoria" class="form-control">
        <br>
        <label>Preço</label>
        <input type="text" name="preco" value="<?php echo $preco ?>" id="preco" class="form-control">
        <br>
        <label>Desenvolvedora</label>
        <input type="text" name="desenvolvedora" value="<?php echo $desenvolvedora ?>" id="desenvolvedora" class="form-control">
        <br>
        <label>Imagem</label>
        <input type="file" name="imagem" id="imagem" class="form-control">
        <br>
        <input type="submit" value="Cadastrar" class="btn btn-success">
    </div>
</form>



<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/popper.js"></script>
</body>
</html>