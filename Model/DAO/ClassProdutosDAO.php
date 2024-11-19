<?php 
require_once 'conexao.php';
class ClassProdutosDAO{

    public function cadastrarProduto(ClassProdutos $cadastrarProdutos)
    {
        try {
            $pdo = conexao::getInstance();
            $sql = "INSERT INTO produto (nomeProduto,preco,quantidade) values (?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $cadastrarProdutos->getNomeProduto());
            $stmt->bindValue(2, $cadastrarProdutos->getPreco());
            $stmt->bindValue(3, $cadastrarProdutos->getQuantidade());
            $stmt->execute();
            return TRUE;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function buscarProdutos($idProduto)
    {
        try {
            $produto = new ClassProdutos();
            $pdo = conexao::getInstance();
            $sql = "SELECT idProduto, nomeProduto, preco, quantidade FROM produto WHERE idProduto =:id LIMIT 1";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':id', $idProduto);

            $stmt->execute();
            $produtoAssoc = $stmt->fetch(PDO::FETCH_ASSOC);

            $produto->setIdProduto($produtoAssoc['idProduto']);
            $produto->setNomeProduto($produtoAssoc['nomeProduto']);
            $produto->setPreco($produtoAssoc['preco']);
            $produto->setQuantidade($produtoAssoc['quantidade']);
            
            return $produto;
        } catch (PDOException $ex) {
            return $ex->getMessage();
        }
    }
	

    public function listarProdutos()
    {
        try {
            $pdo = conexao::getInstance();
            $sql = "SELECT * FROM produto";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $Produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $Produtos;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }


    public function alterarProduto(ClassProdutos $alterarProdutos)
    {
        try {
            $pdo = Conexao::getInstance();
            $sql = "UPDATE produto SET nomeProduto=?, preco=?,quantidade=? WHERE idProduto=? ";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $alterarProdutos->getNomeProduto());
            $stmt->bindValue(2, $alterarProdutos->getPreco());
            $stmt->bindValue(3, $alterarProdutos->getQuantidade());
            $stmt->bindValue(4, $alterarProdutos->getIdProduto());
            return $stmt->rowCount();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    public function excluirProdutos($idProduto)
    {
        try {
            $pdo = Conexao::getInstance();
            $sql = "DELETE FROM produto WHERE idProduto  =:id ";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':id', $idProduto );
            $stmt->execute();
            return TRUE;
        } catch (PDOException $exc) {
            echo $ex->getMessage();
        }
    }
}
?>