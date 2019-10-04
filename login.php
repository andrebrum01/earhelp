<?php
session_start();
include("conexao.php");
if(empty($_POST['email'])||empty($_POST['senha'])){
    header('Location: index.php');
    exit();
}
$usuario = mysqli_real_escape_string($conexao,$_POST['email']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);
$query = "select email,senha from usuario where email='{$usuario}' and senha = md5('{$senha}')";
$result = mysqli_query($conexao, $query);
$row1 = mysqli_num_rows($result);
$query = "select user,senha from usuario where user='{$usuario}' and senha = md5('{$senha}')";
$result = mysqli_query($conexao, $query);
$row2 = mysqli_num_rows($result);
if($row1 == 1){
    $_SESSION['user']= $row1['user'];
    header("location: painel.php");
}
else if(||$row2 == 1){
    $_SESSION['user']= $row2['user'];
    header("location: painel.php");

}
else{
	$_SESSION['nao_autenticado']=true;
    header("location: index.php");
}
?>