<?php
// ini_set('display_errors', 0 );
// error_reporting(0);
include("conexao.php");
$user =mysqli_real_escape_string($conexao,$_GET['user']);
$query = "select email from usuario where user='{$user}'";

$result = mysqli_query($conexao, $query);
$email = mysqli_fetch_row($result)[0];

$query = "delete from usuario where user='{$user}'";
$result = mysqli_query($conexao, $query);
echo mysqli_error($conexao)."<br>";

$query = "delete from grafico where email='{$email}'";
$result = mysqli_query($conexao, $query);

echo mysqli_error($conexao);
if(mysqli_error($conexao)){
header("location: editarUsuario.php?user=".$user);
}
header("location: index.php");
?>