<?php 
class ClassProdutos{
    private $idProduto;
    private $nomeProduto;
    private $preco;
    private $quantidade;
    private $idUser;

    function getIdProduto()
    {
        return $this->idProduto;
    }

    function getIdUser()
    {
        return $this->idUser;
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

    function setIdUser()
    {
        $this->idUser = $idUser;
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