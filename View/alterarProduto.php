<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="../img/package.png" type="image/x-icon">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,400,700" rel="stylesheet">
        <link rel="stylesheet" href="css/bulma.min.css" />
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <meta charset="UTF-8">
        <title>Alterar Produto</title>
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
		
        <?php
            require_once '../Model/ClassProdutos.php';
            require_once '../Model/DAO/ClassProdutosDAO.php';
			$id =@$_GET['idex'];
            $novoProduto = new ClassProdutos();
            $produtosDAO = new ClassProdutosDAO();
            $novoProduto = $produtosDAO->buscarProdutos($id);

        ?>
        <section class="hero is-success is-fullheight">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Formulario de atualização de Usuario</h3>
                    <div class="box">
                        <form method="post" action=".../Control/ControleProduto.php?ACAO=alterarProdutos" >
                            <input type="hidden" name="idex" value="<?php echo $novoProduto->getIdProduto(); ?>">
                            <div class="field">
                                <div class="control">
                                    <input name="nomeProduto" name="text" class="input is-large" placeholder="Nome" autofocus="" value="<?php echo $novoProduto->getNomeProduto(); ?>" >
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="preco" type="text" class="input is-large" type="text" placeholder="Preco" value=" <?php echo $novoProduto->getPreco(); ?>">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="quantidade" class="input is-large" type="text" placeholder="Quantidade" value="<?php echo $novoProduto->getQuantidade(); ?>">
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