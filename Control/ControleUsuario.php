<?php 
require_once '../Model/ClassUsuario.php';
require_once '../Model/DAO/ClassUsuarioDAO.php';

$id = @$_POST['idex'];
$email = @$_POST['email'];
$nome = @$_POST['nome'];
$senha = @$_POST['senha'];
$acao = $_GET['ACAO'];

$novoUsuario = new ClassUsuario();
$novoUsuario->setIdUsuario($id);
$novoUsuario->setEmail($email);
$novoUsuario->setNome($nome);
$novoUsuario->setSenha($senha);

$classUsuarioDAO = new ClassUsuarioDAO();

switch($acao){
    case "cadastrarUsuario":
        $usuario = $classUsuarioDAO->cadastrar($novoUsuario);
	    if($usuario >= 1){
            header('Location:../index.php?&MSG= Cadastro realizado com sucesso!');
        } else {
            header('Location:../index.php?&MSG= Não foi possivel realizar o cadastro!');
        }
        break;

    case "LoginUsuario":
        $usuario = $classUsuarioDAO->login($novoUsuario);
	    if($usuario >= 1){
            header('Location:../view/Usuario.php?&MSG= Cadastro realizado com sucesso!');
        } else {
            header('Location:../view/Usuario.php?&MSG= Não foi possivel realizar o cadastro!');
        }
        break;

    case "excluirUsuario":{
        if (isset($_GET['idex'])) {
            $idUsuario = $_GET['idex'];
            $ClassUsuarioDAO = new ClassUsuarioDAO();
            $us = $ClassUsuarioDAO->excluirUsuario($idUsuario);
            if ($us == TRUE) {
                header('Location:../view/Usuario.php?&MSG= Produto foi excluido com sucesso!');
            } else {
                header('Location:../view/Usuario.php?&MSG=Não foi possivel realizar a exclusão do Usurio!');
            }
        }
    }

    case 'alterarUsuario':
         $usuario = $classUsuarioDAO->alterarUsuario($novoUsuario);
         if($usuario == 1){
             header('Location:../view/Usuario.php?&MSG= Cadastro atualizado com sucesso!');
         } else {
             header('Location:../view/Usuario.php?&MSG= Não foi possivel realizar a atualização!');
         }
  
        break;
}
?>