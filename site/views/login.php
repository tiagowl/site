<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
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

<form action="../controllers/entrar.php" method="post">
    <div class="form-group" >
        <label>email</label>
        <input type="email" name="email" id="email" class="form-control">
        <br>
        <label>Senha</label>
        <input type="password" name="senha" id="senha" class="form-control">
        <br>
        <input type="submit" value="Entrar" class="btn btn-success">
    </div>
</form>

<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/popper.js"></script>
</body>
</html>