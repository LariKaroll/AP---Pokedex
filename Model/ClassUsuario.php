<?php  
class ClassUsuario{
    private $idUsuario;
    private $email;
    private $nome;
    private $senha;

    function getIdUsuario()
    {
        return $this->idUsuario;
    }

    function getEmail()
    {
        return $this->email;
    }

    function getNome()
    {
        return $this->nome;
    }

    function getSenha()
    {
        return $this->senha;
    }


    function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function setSenha($senha)
    {
        $this->senha = $senha;
    }

    
}
?>