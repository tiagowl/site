< !DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Elite Games</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>

    <body>
        <header>
            <nav class="nav navbar-nav navbar-expand-lg bg-danger "><button class="navbar-toggler" type="button"
                    data-toggle="collapse" data-target="#navbar"></button><span class="navbar-toggler-icon"></span>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a href="../index.php" class="nav-link">
                                <h5><img src="../img/outline-home-24px.svg"></h5>
                            </a></li>
                    </ul>
                </div>
            </nav>
        </header><br><br><br><?php $id=$_REQUEST['id'];
$servername="localhost";
$username="root";
$password="";
$dbname="db_games";
// Create connection
$conn=new mysqli($servername, $username, $password, $dbname);
$sql='SELECT * from games where id='.$id;

$result=mysqli_query($conn, $sql);

while($row=mysqli_fetch_assoc($result)) {
    echo "<h1 style='margin-left: 500px; margin-top: -60px; font-size: 50px' >".$row['nome']."</h1>";
    echo "<label style='margin-top: 60px; position: absolute;margin-left:500px;font-size: 20px ' >".$row['categoria']."</label>";
    echo "<img src='../img/".$row['imagem']."' style='width:320px;height:370px;position:absolute; margin-left: 100px;margin-top: -40px;'>";
    echo "<label style='margin-left: 500px; position: absolute; font-size: 30px; margin-top: 10px'> R$ ".$row['preco']."</label>";
    echo "<button class='btn btn-success' style='margin-left: 500px;margin-top: 240px; position:absolute; height: 50px;width: 200px' >Comprar</button>";
}

?><div class="descricao" style="margin-top: 400px">
            <h3>Descrição</h3>
        </div>
        <script src="../js/jquery-3.3.1.min.js"></script>
        <script src="../js/popper.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>

    </html>