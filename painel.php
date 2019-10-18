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
	<!-- navigation bar -->
	<div class="nav">
		<div class="nameUser">Bem Vindo, <?php echo $_GET['user'];?></div>
		<div class="btsair"><a class="btsair" href="logout.php">SAIR</a></div>
	</div>
	<!-- first view -->
	<input type="checkbox" id="next">
	<section class="firstView">
		<div class="caixa">
			<div class="titulo">Bem-vindo ao Ear Help</div>
			<div class="conteudo">Faça o teste para verificar sua audição.</div>
			<section id="btPlay" class="btPlay">
			<label for="next">
			<img src="img/play.png"></img>
			</label>
		</div>
	</section>
	<!-- boas praticas -->
	<input type="checkbox" id="close">
	<section class="boas">
		<label for="close">
			<div class="fecha"><img src="img/close.png"></img></div>
		</label>
		<div class="boxDica">
			<div class="primeira eu">
				<h1>Coloque seu fones de ouvidos</h1>
				<div><img src="img/fone.png"></img>
				</div>
				<div class="seg">Seguinte ></div>
			</div>
			<div class="primeira">
				<h1>Configure o volume do seu dispositivo para 50%</h1>
				<div><img src="img/som.png"></img>
				</div>
				<div class="seg">Seguinte ></div>
			</div>
			<div class="primeira">
				<h1>Certifique-se de que esteja em um ambiente calmo</h1>
				<div><img src="img/silent.png"></img>
				</div>
				<label for="close">
					<div class="seg">Pronto</div>
				</label>
			</div>
		</div>
	</section>

	<!-- area de testes -->
	<section class="teste1">
		<label for="next">
			<div class="back"><img src="img/back.png"></img></div>
		</label>
		<div id="sons">
			<div id="blue">
				<div class="ouviu">:)</div>
			</div>
			<div id="red">
				<div class="ouviu">:)</div>
			</div>
			<div id="purple">
				<div class="ouviu">:)</div>
			</div>
		</div>
		<div id="caixaProgress"/>
	</section>
	<!-- jquery and Js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="js/progress.js"></script>
</body>
</html>