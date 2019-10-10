<?php
include("conexao.php");
if(empty($_POST['email'])||empty($_POST['senha'])){
    header('Location: index.php');
    exit();
}
$usuario = mysqli_real_escape_string($conexao,$_POST['email']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);
$user;

$query = "select user,email,senha from usuario where email='{$usuario}' and senha = md5('{$senha}')";
$result = mysqli_query($conexao, $query);

if(mysqli_num_rows($result) == 1){
	$user=mysqli_fetch_row($result);
}
$query = "select user,email,senha from usuario where user='{$usuario}' and senha = md5('{$senha}')";
$result = mysqli_query($conexao, $query);

if(mysqli_num_rows($result) == 1){
	$user=mysqli_fetch_row($result);
}

if($user[0]!=null){
    header("location: painel.php?user=$user[0]");
}
else{
    header("location: index.php?nao_autenticado=true");
}
?>