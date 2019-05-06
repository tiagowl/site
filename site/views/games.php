<?php require_once '../utils/Conexao.php'; 

session_start();

if($_SESSION['logado'] == TRUE && $_SESSION['nome'] == 'Tiago' )

{

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Games</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
    <header>
        <nav class="nav navbar-nav navbar-expand-lg bg-info" >
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
                        <a href="games.php" class="nav-link" ><h5>
                            Games
                        </h5></a>
                    </li>
                    <li class="nav-item" >
                        <a href="usuarios.php" class="nav-link" ><h5>
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

<img src="../img/baseline-build-24px.svg" style="height: 40px; margin-left: 30px;"/>
<br>
<br>
<br>
<div class="row">
    <div class="input-group mb-5"  >
    <div class="col-md-4" style="margin-left: 20px;" >
      <div class="input-group-prepend">
        <button class="btn btn-outline-secondary" type="button" style="margin: 5px;">Buscar</button>
      
      <input type="text"  class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" style="width=20px">
      </div>
    </div>
    </div>
    </div>

    <table class="table table-bordered">
        <thead class="thead-dark" >
          <tr>
            <th scope="col">Id</th>
            <th scope='col'>Nome</th>
            <th scope='col'>Console</th>
            <th scope='col'>Categoria</th>
            <th scope='col'>Preço</th>
            <th scope='col'>Desenvolvedora</th>
            <th scope="col" class="btn-action"></th>
            <th scope="col" class="btn-action"></th> 
          </tr>
        </thead>
        <br>
        <tbody>
            <?php
               
               $servername = "localhost";
               $username = "root";
               $password = "";
               $dbname = "db_games";
               // Create connection
               $conn = new mysqli($servername, $username, $password, $dbname);
               $sql = 'SELECT * from games';

               $result = mysqli_query($conn, $sql);

               while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                            <td>".$row['id']."</td>
                            <td>".$row['nome']."</td>
                            <td>".$row['console']."</td>
                            <td>".$row['categoria']."</td>
                            <td>".$row['preco']."</td>
                            <td>".$row['desenvolvedora']."</td>
                            <td scope='col' class='btn-action' >
                            <a href='editarGames.php?id=".$row['id']."'><button type='button' class='btn btn-info'>Edit</button></a>
                            </td>
                            <td scope='col' class='btn-action' >
                            <a href='../controllers/excluir_game.php?id=".$row['id']."'><button type='button' class='btn btn-danger'>Remove</button></a>
                            </td>
                            </tr>";
                    }    
            ?>
        </tbody>
    </table>

    <script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/popper.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</body>
</html>

<?php
}
?>