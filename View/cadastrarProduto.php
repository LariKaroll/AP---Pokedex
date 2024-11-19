<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/package.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <section class="hero is-success is-fullheight">

            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Registrar Produtos</h3>
                    <div class="box">
                        <form action="../Control/ControleProduto.php?ACAO=cadastrarProduto" method="post">
                            <div class="field">
                                <div class="control">
                                    <input name="nomeProduto" name="text" class="input is-large" placeholder="Nome" autofocus="">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="preco" type="text" class="input is-large" type="text" placeholder="Preco">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="quantidade" class="input is-large" type="text" placeholder="Qantidade">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Registrar</button>
                        </form>
                    </div>
               
            </div>
        </div>
    </section>
    
</body>
</html>