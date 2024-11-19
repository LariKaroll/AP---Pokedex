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
            $sql = "SELECT id, email, nome FROM usuarios WHERE idUsuario  =:idUsuario LIMIT 1";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':idUsuario', $idUsuario);

            $stmt->execute();
            $usuarioAssoc = $stmt->fetch(PDO::FETCH_ASSOC);

            $usuarios->setidUsuario($usuarioAssoc['idUsuario']);
            $usuarios->setemail($usuarioAssoc['email']);
            $usuarios->setnome($usuarioAssoc['nome']);

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
            $pdo = conexao::getInstance();
            $sql = "UPDATE usuarios SET email=?, nome=? WHERE idUsuario  =? ";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $alterarUsuario->getemail());
            $stmt->bindValue(2, $alterarUsuario->getnome());
            $stmt->bindValue(3, $alterarUsuario->getidUsuario());
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
            $sql = "DELETE FROM usuarios WHERE idUsuario  =:idUsuario ";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':idUsuario', $idUsuario );
            $stmt->execute();
            return TRUE;
        } catch (PDOException $exc) {
            echo $ex->getMessage();
        }
    }
}
?>