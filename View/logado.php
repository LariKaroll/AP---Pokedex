<?php
session_start();
include('../Model/verifica_login.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/pokeball.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Bem vindo</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="../index.php">Home</a>
                <a class="nav-item nav-link" href="login.php">Login</a>
                <a class="nav-item nav-link active" href="cadastro.php">Cadastro</a>
            </div>
        </div>
    </nav>
    <h2>Olá, <?php echo $_SESSION['email'];?></h2>
    <h2><a href="Model/logout.php">Sair</a></h2>
</body>
</html>