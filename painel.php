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
			<input type="checkbox" id="close" class="close">
			<section id="boas" class="boas">
				<label for="close">
					<div class="fecha"><img src="img/close.png"></img></div>
				</label>
				<div class="primeira">
					<h1>Coloque seu fones de ouvidos</h1>
					<img></img>
					<div class="sel">></div>
				</div>
			</section>

			<section id="btPlay" class="btPlay">
				<label for="next">
				<img src="img/play.png"></img>
				</label>
			</section>

			<section id="teste1" class="teste1">
				<label for="next">
					<div class="back"><img src="img/back.png"></img></div>
				</label>
				<div id="sons">
					<div class="cx blue"></div>
					<div class="cx red"></div>
					<div class="cx purple"></div>
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