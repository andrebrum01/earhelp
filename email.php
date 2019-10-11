<?php
include("conexao.php");
$usuario = mysqli_real_escape_string($conexao,$_POST['email']);
$query = "select email,senha,user from usuario where user='{$usuario}'";
$result = mysqli_query($conexao, $query);
if(!mysqli_num_rows($result) == 1){
	$query = "select email,senha,user from usuario where email='{$usuario}'";
	$result = mysqli_query($conexao, $query);
	if(!mysqli_num_rows($result) == 1){
		header('Location: index.php');
    	exit();
	}
}
if(mysqli_num_rows($result) == 1){
	$usuario=mysqli_fetch_row($result);
	$email = $usuario[0];
	$senha = $usuario[1];
	$usuario = $usuario[2];
	$headers = "MIME-Version: 1.1\r\n";
	$headers .= "Content-type: text/html; charset=UTF-8\r\n";
	$headers .= "From: fmm.earhelp@gmail.com\r\n"; // remetente
	$envio=mail($email,"Esqueceu a senha do EAR HELP?","Caro <b>$usuario</b> sua senha é $senha",$headers);
	if($envio)
	 	echo "Mensagem enviada com sucesso";
	else
	 	echo "A mensagem não pode ser enviada";
	}
?>