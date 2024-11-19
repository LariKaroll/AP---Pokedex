<?php
session_start();
include('../Model/DAO/conexaoLogin.php');

if(empty($_POST['nome']) || empty($_POST['senha'])) {
	header('Location:../index.php');
	exit();
}

$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$NomeUsuario = $_POST['nome'];
$_SESSION['NomeUsuario'] = $NomeUsuario;

$query = "select nome from usuarios where nome = '{$nome}' and senha = '{$senha}'";

$result = mysqli_query($conexao, $query);


$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['nome'] = $nome;
	header('Location:../view/Usuario.php?&MSG=login realizado com sucesso!');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location:../index.php?&MSG=Invalido!!!');
	exit();
}
?>