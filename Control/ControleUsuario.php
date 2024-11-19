<?php 
require_once '../Model/ClassUsuario.php';
require_once '../Model/DAO/ClassUsuarioDAO.php';

$id = @$_POST['idex'];
$email = @$_POST['email'];
$nome = @$_POST['nome'];
$senha = @$_POST['senha'];
$acao = $_GET['ACAO'];

$novoUsuario = new ClassUsuario();
$novoUsuario->setidUsuario($id);
$novoUsuario->setemail($email);
$novoUsuario->setnome($nome);
$novoUsuario->setsenha($senha);

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
            header('Location:../index.php?&MSG= Cadastro realizado com sucesso!');
        } else {
            header('Location:../index.php?&MSG= Não foi possivel realizar o cadastro!');
        }
        break;

}
?>