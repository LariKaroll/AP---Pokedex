<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Visao/css/form.css">
    <title>Listar Usuarios</title>
    <script language="javaScript" type="text/javascript">
function checkDelete(){
    return confirm('Deseja continuar?');
}
</script>
</head>
<body>
    
<?php
    require_once '../Model/ClassProdutos.php';
    require_once '../Model/DAO/ClassProdutosDAO.php';

    $ClassProdutosDAO = new ClassProdutosDAO();
    $us = $ClassProdutosDAO->listarProdutos();
    echo "<div id='direita'>";
    echo "<table class='table'>";
    echo "  <tr>";
    echo "      <th scope='col'><p align='center'>Registrador</p></th> ";
    echo "      <th scope='col'><p align='center'>Produto</p></th> ";
    echo "      <th scope='col'><p align='center'>Quantidade</p></th>";
    echo "      <th scope='col'><p align='center'>Preco</p></th>";
    echo "      <th scope='col'><p align='center'>Exluir</p></th> ";
    echo "      <th scope='col'><p align='center'>Alterar</p></th>";
    echo "  <tr>";

    foreach ($us as $us) {
        echo "<tr>";
        echo "<td scope='col'><p align='center'>" . $us['nome'] . "</p></td>";
        echo "<td scope='col'><p align='center'>" . $us['nomeProduto'] . "</p></td>";
        echo "<td scope='col'><p align='center'>" . $us['quantidade'] . "</p></td>";
        echo "<td scope='col'><p align='center'>" . $us['preco'] . "</p></td>";
        echo "<td scope='col'><a href='../Control/ControleProduto.php?ACAO=excluirProdutos&idex=".$us["idProduto"]."' onclick='return checkDelete()'><input type='button' name='excluir' id='excluir' value='excluir' class='btn btn-danger'></a></td>";
        echo "<td scope='col'><a href='alterarProduto.php?idex=" . $us["idProduto"] . "'><input type='button' value='alterar' class='btn btn-warning'></a></td>";
        echo "</tr>"; 
    }
    echo "</table>";
    echo "<div>";  
    ?>
</body>
</html>