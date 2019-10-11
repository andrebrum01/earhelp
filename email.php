<?php
include("conexao.php");
require_once("autoenvio/PHPMailerAutoload.php");

$usuario = mysqli_real_escape_string($conexao,$_POST['email']);
$query = "select email,senha,user from usuario where user='{$usuario}'";
$result = mysqli_query($conexao, $query);
if(!mysqli_num_rows($result) == 1){
	$query = "select email,senha,user from usuario where email='{$usuario}'";
	$result = mysqli_query($conexao, $query);
	if(!mysqli_num_rows($result) == 1){
		header('Location: enviaemail.php');
    	exit();
	}
}
$usuario=mysqli_fetch_row($result);
$email = $usuario[0];
$senha = $usuario[1];
$user = $usuario[2];
$mail = new PHPMailer();
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->isHTML(true);
$mail->Charset='UTF-8';
$mail->SMTPAuth = true;
$mail->SMTPSecure ='ssl';
$mail-> Host='earhelp.cleverapps.io';
$mail->Port=20;
$mail->Username='fmm.earhelp@gmail.com';
$mail->Password ='nescutoprr';
$mail->From='fmm.earhelp@gmail.com';
$mail->FromName=$user;
$mail->Subject='Recuperar senha do Ear Help';
$mail->Body="Sua senha é:$senha";
$mail->AltBody="Sua senha é:$senha";
$mail->AddAddress($email);
if($mail->Send()){
	echo "E-mail enviado com sucesso";
}else{
	echo "Erro no envio do e-mail: " . $mail->ErrorInfo;
}

?>
