<?php
include("conexao.php");
$query = "select * from usuario where user='{$_GET['user']}'";
$result = mysqli_query($conexao, $query);
if(!mysqli_num_rows($result) == 1){
	header('Location: index.php');
    exit();
}

?>