<?php
include("conexao.php");

$user = mysqli_real_escape_string($conexao,$_GET['user']);



$query = "update usuario set email = '' where email='{$usuario}'";
$result = mysqli_query($conexao, $query);

if(mysqli_num_rows($result) == 1){
	$user=mysqli_fetch_row($result);
}

if($user[0]!=null){
    header("location: painel.php?user=$user[0]");
}

?>