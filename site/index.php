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
    <nav class="nav navbar-nav navbar-expand-md bg-danger justify-content-center" style="height: 170px;" >
        <form class="form-inline" action="/action_page.php" style="position: absolute; margin-top: 50px;" >
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-dark" type="submit">Search</button>
        </form>

        <a href="views/login.php" style="margin-right: 10px" >Login</a>

        
            <h1 style="margin-left: -980px;margin-top: 40px;" >Elite</h1>
            <h3 style="margin-top: 44px; color:white " >Games</h3>

    </nav>
</header>


<div class="row">
  <div class="col-md-4" style=" height: 300px" >
        <div class="btn-group-vertical" >
                <button type="button" class="btn btn-outline-danger" style="width: 200px;background-color: black;"  >Playstation 4</button>
                <button type="button" class="btn btn-outline-danger" style="width: 200px;background-color: black;"  >Xbox One</button>
                <button type="button" class="btn btn-outline-danger" style="width: 200px;background-color: black;"  >PC</button>
                <button type="button" class="btn btn-outline-danger" style="width: 200px;background-color: black;"  >Nintendo Switch</button>
                <button type="button" class="btn btn-outline-danger" style="width: 200px;background-color: black;"  >Playstation 3</button>
            </div>
  </div>
  <div class="col-md-8">
  <div class="game" style="margin-left: 100px;" >

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
               echo "<div class='media border'>";
               echo "<img src='img/".$row['imagem']."' style='width:100px;height:130px;position:relative'>";
               echo "<div class='media-body'>";
               echo "<h4 style='margin-left: 50px;position: relative;' >".$row['nome']."</h4>";
               echo "<p style='margin-left: 50px;' >".$row['categoria']."</p>";
               echo "<p style='margin-left: 50px;' >".$row['preco']."</p>";
               echo"<a href='views/item.php?id=".$row['id']."' class='btn btn-primary' style='margin-left: 60px;' >Comprar</a>";
               echo "</div>";
               echo "</div>";
    }

    ?>
  </div>

  

</div>









<script src="./js/jquery-3.3.1.min.js"></script>
<script src="./js/popper.js"></script>
<script src="./js/bootstrap.min.js"></script>
</body>
</html>
