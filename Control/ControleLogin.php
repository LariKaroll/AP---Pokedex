<?php
session_start();
include('../Model/DAO/conexaoLogin.php');

if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location:../index.php');
	exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select email from usuarios where email = '{$email}' and senha = '{$senha}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['email'] = $email;
	header('Location:../view/logado.php?&MSG=login realizado com sucesso!');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location:../index.php?&MSG=Invalido!!!');
	exit();
}
?>