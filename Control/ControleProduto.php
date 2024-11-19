<?php 
require_once '../Model/ClassProdutos.php';
require_once '../Model/DAO/classProdutosDAO.php';

$id = @$_POST['idex'];
$preco = @$_POST['preco'];
$nomeProduto = @$_POST['nomeProduto'];
$quantidade = @$_POST['quantidade'];
$acao = $_GET['ACAO'];

$novoProduto = new ClassProdutos();
$novoProduto->setIdProduto($id);
$novoProduto->setPreco($preco);
$novoProduto->setNomeProduto($nomeProduto);
$novoProduto->setQuantidade($quantidade);

$classProdutosDAO = new classProdutosDAO();

switch($acao){
    case "cadastrarProduto":
        $Produtos = $classProdutosDAO->cadastrarProduto($novoProduto);
	    if($Produtos >= 1){
            header('Location:../view/Produtos.php?&MSG= Cadastro realizado com sucesso!');
        } else {
            header('Location:../view/Produtos.php?&MSG= Não foi possivel realizar o cadastro!');
        }
        break;

    case "excluirProdutos":{
        if (isset($_GET['idex'])) {
            $idProdutos = $_GET['idex'];
            $ClassProdutosDAO = new classProdutosDAO();
            $us = $classProdutosDAO->excluirProdutos($idProdutos);
            if ($us == TRUE) {
                header('Location:../view/Produtos.php&MSG= Produto foi excluido com sucesso!');
            } else {
                header('Location:../view/Produtos.php&MSG= Não foi possivel realizar a exclusão do Usurio!');
            }
        }
    }

    case 'alterarProdutos':
         $Produtos = $classProdutosDAO->alterarProdutos($novoProduto);
         if($Produtos == 1){
             header('Location:../view/Produtos.php?&MSG= Alteracao feita com sucesso!');
         } else {
             header('Location:../view/Produtos.php?&MSG= Não foi possivel realizar a atualização!');
         }
  
        break;
}
?>