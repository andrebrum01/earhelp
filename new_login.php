<?php
session_start();
include("conexao.php");
if(empty($_POST['email'])||empty($_POST['senha'])){
    header('Location: index.php');
    exit();
}
$usuario = mysqli_real_escape_string($conexao,$_POST['email']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);
$query = "insert into usuario values ('{$usuario}',md5('{$senha}'))";
if (mysqli_query($conexao, $query)) {
    $_SESSION["email"]= $usuario;
    // header('Location: index.php');
} else {
    // header('Location: index.php');
}
?>