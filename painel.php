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
			<section id="btPlay" class="btPlay">
				<label for="next">
				<img src="img/play.png"></img>
				</label>
			</section>
			<section id="teste1" class="teste1">
				<label for="next">
					<div class="back"><img src="img/back.png"></img></div>
				</label>
				<input type="checkbox" id="close" class="close">
				<div class="full">
					<label for="close">
						<div class="fecha"><img src="img/close.png"></img></div>
						<h1>Verifique se os fones de ouvido estão colocados corretamente</h1>
					</label>
				</div>
				<div id="sons">
					<div></div>
					<div></div>
					<div id="select"></div>
				</div>
				<div id="caixaProgress">
				</div>
			</section>
		</div>
	</div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="js/progress.js"></script>
</body>

</html>