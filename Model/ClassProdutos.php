<?php 
class ClassProdutos{
    private $idProduto;
    private $nomeProduto;
    private $preco;
    private $quantidade;

    function getIdProduto()
    {
        return $this->idProduto;
    }

    function getPreco()
    {
        return $this->preco;
    }

    function getNomeProduto()
    {
        return $this->nomeProduto;
    }

    function getQuantidade()
    {
        return $this->quantidade;
    }


    function setIdProduto($idProduto)
    {
        $this->idProduto = $idProduto;
    }

    function setPreco($preco)
    {
        $this->preco = $preco;
    }

    function setNomeProduto($nomeProduto)
    {
        $this->nomeProduto = $nomeProduto;
    }

    function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }
}
?>