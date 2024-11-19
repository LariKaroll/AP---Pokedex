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

    public function buscarUsuario($idUsuario)
    {
        try {
            $usuarios = new ClassUsuario();
            $pdo = Conexao::getInstance();
            $sql = "SELECT idUsuario, email, nome, senha FROM usuarios WHERE idUsuario  =:id LIMIT 1";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':id', $idUsuario);

            $stmt->execute();
            $usuarioAssoc = $stmt->fetch(PDO::FETCH_ASSOC);

            $usuarios->setIdUsuario($usuarioAssoc['idUsuario']);
            $usuarios->setEmail($usuarioAssoc['email']);
            $usuarios->setNome($usuarioAssoc['nome']);
            $usuarios->setSenha($usuarioAssoc['senha']);

            return $usuarios;
        } catch (PDOException $ex) {
            return $ex->getMessage();
        }
    }
	

    public function listarUsuario()
    {
        try {
            $pdo = conexao::getInstance();
            $sql = "SELECT * FROM usuarios";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }


    public function alterarUsuario(ClassUsuario $alterarUsuario)
    {
        try {
            $pdo = Conexao::getInstance();
            $sql = "UPDATE usuarios SET nome=?, email=?,senha =? WHERE idUsuario=? ";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $alterarUsuario->getNome());
            $stmt->bindValue(2, $alterarUsuario->getEmail());
            $stmt->bindValue(3, $alterarUsuario->getSenha());
            $stmt->bindValue(4, $alterarUsuario->getIdUsuario());
            $stmt->execute();
            return $stmt->rowCount();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    public function excluirUsuario($idUsuario )
    {
        try {
            $pdo = Conexao::getInstance();
            $sql = "DELETE FROM usuarios WHERE idUsuario  =:id ";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':id', $idUsuario );
            $stmt->execute();
            return TRUE;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
}
?>