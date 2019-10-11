<?php
include("verificar_login.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>EAR HELP</title>
</head>
<link rel="stylesheet" type="text/css" href="css/style2.css">
<body>
	<div class="nav">
		<div class="nameUser">Bem Vindo, <?php echo $_GET['user'];?></div>
		<div class="btsair"><a class="btsair" href="logout.php">SAIR</a></div>
	</div>
<section class="firstView">
	<div class="caixa">
		<div class="titulo">Bem-vindo ao Ear Help</div>
		<div class="conteudo">Faça o teste para verificar sua audição.</div>
		<div id ="teste"class="teste">
			<input type="checkbox" id="next" class="next">
			<div id="btPlay" class="btPlay">
			<label for="next">
			<img src="img/play.png"></img>
			</label>
			</div>
			<div id="teste1" class="teste1">
			<label for="next">
			
			</label>
			</div>
		</div>
	</div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="js/actions.js"></script>
</body>

</html>