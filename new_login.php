<?php
session_start();
include("conexao.php");
if(empty($_POST['user'])||empty($_POST['email'])||empty($_POST['senha'])||$_POST['senha']!=$_POST['denovo']){
    header('Location: index.php');
    exit();
}
$usuario = mysqli_real_escape_string($conexao,$_POST['email']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);
$user = mysqli_real_escape_string($conexao,$_POST['user']);
$query = "insert into usuario(email,senha,user) values ('{$usuario}',md5('{$senha}'),'{$user}')";
if (mysqli_query($conexao, $query)) {
    $_SESSION["criado"]= true;
    header('Location: index.php');
} else {
	$_SESSION["naocriado"]= true;
    header('Location: index.php');
}
?>