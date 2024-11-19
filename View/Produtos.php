<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/package.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="Usuario.php">Usuario</a>
                <a class="nav-item nav-link active" href="Produtos.php">Produtos</a>
            </div>
            <a class="nav-item nav-link" href="../Model/logout.php"><img src="../img/Out.png" alt="Out"></a>
        </div>
    </nav>
    <!-- ................. -->
    <?php session_start();
    echo $_SESSION['idUsua'];
    include 'listarProduto.php'; 
    echo "<br><br>";
    include 'cadastrarProduto.php';   
    ?>
</body>
</html>