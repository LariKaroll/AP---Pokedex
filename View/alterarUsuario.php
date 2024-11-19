<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="../img/package.png" type="image/x-icon">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Alterar Usuario</title>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="logado.php">Home</a>
                <a class="nav-item nav-link" href="Usuario.php">Usuario</a>
                <a class="nav-item nav-link active" href="Produtos.php">Produtos</a>
            </div>
        </div>
    </nav>
        
            <h1>Formulario de atualização de Produto</h1>
            <hr>
        </div>
		
        <?php
            require '../Model/ClassUsuario.php';
            require '../Model/DAO/ClassUsuarioDAO.php';
			$id = @$_GET['idex'];
            $novoUsuario = new ClassUsuario();
            $usuarioDAO = new ClassUsuarioDAO();
            $novoUsuario = $usuarioDAO->buscarUsuario($id);

        ?>
        <form method="post" action="../Control/ControleUsuario.php?ACAO=alterarUsuarios" >
                <input type="hidden" name="idex" value="<?php echo $novoUsuario->getidUsuario(); ?>">
                Email:<input type="text" name="email" size="50" value="<?php echo $novoUsuario->getemail(); ?>" /><br>
                Nome:<input type="text" id="nome" name="nome" size="40" value="<?php echo $novoUsuario->getnome(); ?>"/>
                <br>
				<button type="submit" value="Alterar">Alterar</button> 
				<button  type="reset" value="Limpar">Limpar</button>
            </div>
        </form>
    </body>
</html>
