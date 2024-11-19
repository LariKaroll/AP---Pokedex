<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="../img/package.png" type="image/x-icon">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,400,700" rel="stylesheet">
        <link rel="stylesheet" href="css/bulma.min.css" />
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <title>Alterar Usuario</title>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="Usuario.php">Usuario</a>
                <a class="nav-item nav-link active" href="Produtos.php">Produtos</a>
            </div>
            <a class="nav-item nav-link" href="../Model/logout.php"><img src="../img/Out.png" alt="Out"></a>
        </div>
    </nav>
        
        <section class="hero is-success is-fullheight">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Formulario de atualização de Usuario</h3>
                    <div class="box">
                        <form method="post" action="../Control/ControleUsuario.php?ACAO=alterarUsuarios" >
                            <input type="hidden" name="idex" value="<?php echo $novoUsuario->getidUsuario(); ?>">
                            <div class="field">
                                <div class="control">
                                    <input name="email" name="text" class="input is-large" placeholder="Seu email" autofocus="" value="<?php echo $novoUsuario->getemail(); ?>" >
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" type="text" placeholder="Seu nome" value=" <?php echo $novoUsuario->getnome(); ?>">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="text" placeholder="Sua senha" value="<?php echo $novoUsuario->getnome(); ?>">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth" value="Alterar">Alterar</button>
                        </form>
                    </div>
               
            </div>
        </div>
    </section>
    </body>
</html>
