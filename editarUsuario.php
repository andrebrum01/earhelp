<?php 
ini_set('display_errors', 0 );
error_reporting(0);
$user= $_GET['user'];
$autenticado= $_GET['senha'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>EAR HELP</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf8">
</head>
<link rel="icon" type="imagem/png" href="img/earhelp.png">
<link rel="stylesheet" type="text/css" href="css/style4.css">
<body>
	<div class="boxAlerta">
		<div class="caixao">
			<div class="alerta">DESEJA EXCLUIR A SUA CONTA ?</div>
			<div class="escolha">
				<div class="no">NÃO</div>
				<div class="yes">SIM</div>
			</div>
		</div>
	</div>
<div class="user"><?php echo $user;?></div>
<!-- back to painel -->
<a class="back" href="painel.php?user=<?php echo $user?>"></a>
<!-- formulario -->
<div class="caixaForm">
	<div class="userzin"></div>
	<form class="updateLogin" action="update.php?trueUser=<?php echo $user?>" method="POST">
			<?php 
			$autenticado= $_GET['senha'];
			if( $autenticado!=null && $autenticado=='true'){
			?>
			<!-- senha correta e td ok -->
			<div class="sucesso">Alterado com Sucesso !</div>
			<?php
			} else if($autenticado!=null && $autenticado=='false'){
			?>
			<!-- senha errada-->
			<div class="error">Senha Errada!</div>
			<?php
			}
			?>
			<!-- user -->
			<div class="inputagem"><label for="user"><img src="img/user.png"></label><input type="text" name="user" id="user" placeholder="New Username"/></div>
			<!-- email -->
			<div class="inputagem"><label for="email"><img src="img/user.png"></label><input type="email" name="email" id="email" placeholder="New Email"/></div>
			<!-- confirm senha -->
			<div class="inputagem"><label for="senha" required><img src="img/olho.png"></label><input type="password" name="senha" id="senha" placeholder="Confirm Password" required/></div>
			<!-- nova senha -->
			<div class="inputagem"><label for="denovo" required><img src="img/olho.png"></label><input type="password" name="denovo" id="denovo" placeholder="New  Password"/></div>
			<!-- repetir nova senha -->
			<div class="inputagem"><label for="confdenovo" required><img src="img/olho.png"></label><input type="password" name="confdenovo" id="confdenovo" placeholder="Confirm New Password"/></div>
			<button class="btlogin">Atualizar</button>
		</form>
		<div class="excluir"></div>
	</div>
	
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="js/update.js"></script>
</html>