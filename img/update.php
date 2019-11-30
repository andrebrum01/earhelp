<?php
ini_set('display_errors', 0 );
error_reporting(0);
include("conexao.php");
$trueUser =mysqli_real_escape_string($conexao,$_GET['trueUser']);
$user = mysqli_real_escape_string($conexao,$_POST['user']);
$email = mysqli_real_escape_string($conexao,$_POST['email']);
$lastpassword = mysqli_real_escape_string($conexao,$_POST['senha']);
$newpassword = mysqli_real_escape_string($conexao,$_POST['denovo']);
$confnewpassword = mysqli_real_escape_string($conexao,$_POST['confdenovo']);

$query = "select senha,email from usuario where user='{$trueUser}'";
$result = mysqli_query($conexao, $query);
$array=mysqli_fetch_row($result);
if($array[0]==md5($lastpassword)){
	// usuario
if($user){
$query = "update usuario set user = '{$user}' where user='{$trueUser}' ";
$trueUser =$user;
$result = mysqli_query($conexao, $query);
}
// email
if($email){
$query = "update usuario set email = '{$email}' where user='{$trueUser}' ";
$result = mysqli_query($conexao, $query);
$query = "update grafico set email = '{$email}' where email='{$array[1]}' ";
$result = mysqli_query($conexao, $query);
}
// new password
if($newpassword && $newpassword==$confnewpassword){
$query = "update usuario set senha = md5('{$newpassword}') where user='{$trueUser}' ";
$result = mysqli_query($conexao, $query);
}

header("location: editarUsuario.php?user=$trueUser&senha=true");
}
// se a senha não condiz
else{
	header("location: editarUsuario.php?user=$trueUser&senha=false");
}
?>