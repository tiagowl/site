<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Elite Games</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <nav class="nav navbar-nav navbar-expand-lg bg-danger" >
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" ></button>
        <span class="navbar-toggler-icon" ></span>
        <div class="collapse navbar-collapse" id="navbar" >
            <ul class="navbar-nav mr-auto" >
                <li class="nav-item" >
                    <a href="../index.php" class="nav-link" ><h5>
                        <img src="../img/outline-home-24px.svg">
                    </h5></a>
                </li>
            </ul>
        </div>
        <h3 style="color: white; margin-right: 500px; " >Login</h3>
    </nav>
    
</header>
<br>
<br>
<br>

<table class="table" >
<thead class="thead-light" >
<tr>
<th scope="col" >Produto</th>
<th scope="col" >Preço Unitário</th>
<th scope="col" >Quantidade</th>
<th scope="col" >Total</th>
<th scope="col" >Excluir</th>
</tr>
</thead>
<tbody>
<?php

               $id = $_REQUEST['id'];
               $servername = "localhost";
               $username = "root";
               $password = "";
               $dbname = "db_games";
               // Create connection
               $conn = new mysqli($servername, $username, $password, $dbname);
               $sql = 'SELECT * from games where id='.$id;

               $result = mysqli_query($conn, $sql);
               while($row = mysqli_fetch_assoc($result)) {
                   echo "<tr>";
                   echo "<td>".$row['imagem']."</td>";
                   echo "<td>".$row['preco']."</td>";
                   echo "<td>1</td>";
                   echo "<td>".$row['preco']."</td>";
                   echo "<td><button type='button' class='btn btn-danger' >Excluir</button></td>";
                   echo "</tr>";
               }

?>
</tbody>
</table>

<script src="./js/jquery-3.3.1.min.js"></script>
<script src="./js/popper.js"></script>
<script src="./js/bootstrap.min.js"></script>
</body>
</html>