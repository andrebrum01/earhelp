<?php
session_start();
include("conexao.php");
if(empty($_POST['email'])||empty($_POST['senha'])){
    header('Location: index.php');
    exit();
}
$usuario = mysqli_real_escape_string($conexao,$_POST['email']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);
$query = "select * from usuario where email='{$usuario}' and senha = md5('{$senha}')";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);
if($row == 1){
    $_SESSION['email']= $usuario;
    header("location: painel.php");
}
else{
    header("location: index.php");
}
?>