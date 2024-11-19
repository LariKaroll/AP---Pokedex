<?php 
require_once 'conexao.php';
class ClassUsuarioDAO{

    public function cadastrar(ClassUsuario $cadastrarUsuario)
    {
        try {
            $pdo = conexao::getInstance();
            $sql = "INSERT INTO usuarios (email, nome,senha) values (?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $cadastrarUsuario->getemail());
            $stmt->bindValue(2, $cadastrarUsuario->getnome());
            $stmt->bindValue(3, $cadastrarUsuario->getsenha());
            $stmt->execute();
            return TRUE;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function login($email, $senha){
        try {
            $pdo = conexao::getInstance();
            $sql = "SELECT email, senha FROM usuarios WHERE email = ? and senha = ?";
            $stmt->bindValue(1, $email->getemail());
            $stmt->bindValue(2, $senha->getnome());
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
}
?>