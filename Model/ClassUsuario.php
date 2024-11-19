<?php 
class ClassUsuario{
    private $idUsuario;
    private $email;
    private $nome;
    private $senha;

    function getidUsuario()
    {
        return $this->idUsuario;
    }

    function getemail()
    {
        return $this->email;
    }

    function getnome()
    {
        return $this->nome;
    }

    function getsenha()
    {
        return $this->senha;
    }


    function setidUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    function setemail($email)
    {
        $this->email = $email;
    }

    function setnome($nome)
    {
        $this->nome = $nome;
    }

    function setsenha($senha)
    {
        $this->senha = $senha;
    }
}
?>