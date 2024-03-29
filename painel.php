<?php
include("verificar_login.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>EAR HELP</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf8">
</head>
<link rel="stylesheet" type="text/css" href="css/style2.css">
<link rel="icon" type="imagem/png" href="img/earhelp.png">

<body>
	<div class="alerta">
		<div class="conteudo"></div>
	</div>
	<input type="checkbox" id="next">
	<!-- boas praticas -->
	<input type="checkbox" id="close">
	<section class="boas">
		<label for="close">
			<div class="fecha"><img src="img/close.png"></img></div>
		</label>
		<div class="boxDica">
			<div class="primeira eu">
				<h1>Coloque seu fones de ouvidos</h1>
				<div class="imgExemplo"><img src="img/fone.png"></img>
				</div>
				<div class="seg">Seguinte ></div>
			</div>
			<div class="primeira">
				<h1>Configure o volume do seu dispositivo para 100%</h1>
				<div class="imgExemplo"><img src="img/som.png"></img>
				</div>
				<div class="seg">Seguinte ></div>
			</div>
			<div class="primeira">
				<h1>Certifique-se de que esteja em um ambiente calmo</h1>
				<div class="imgExemplo"><img src="img/silent.png"></img>
				</div>
				<div class="seg">Seguinte ></div>	
			</div>	
			<div class="primeira">	
				<h1>Para regular o som utilize os botões</h1>	
				<div class="caixaButton">	
					<div class="buttonMenosExemplo">-</div>	
					<div class="buttonMaisExemplo">+</div>	
				</div>	
				<div class="seg">Seguinte ></div>	
			</div>	
			<div class="primeira">	
				<h1>Quando ouvir o som click no pause</h1>	
				<div class="ouviuExemplo">Pause</div>
				<label for="close">
					<div class="lab">Pronto</div>
				</label>
			</div>
		</div>
	</section>
	<!-- navigation bar -->
	<div class="nav">
		<div class="nameUser">Bem Vindo, <?php echo $_GET['user'];?></div>
		<div class="caixaUser">
			<img class="userzin" src="img/usuario.png"></img>
			<div class="popUser">
				<div class="pop resultados">Resultados</div>
				<div class="pop alterar">Conta</div>
				<div class="pop"><a class="sair" href="logout.php">SAIR</a></div>
			</div>
			
		</div>
	</div>
	<!-- first view -->
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

	<!-- area de testes -->
	<section class="teste1">
		<label for="next">
			<div class="back"><img src="img/back.png"></img></div>
		</label>
		<div id="sons">
			<!-- 125 -->
			<div id="boxFrequencia">
				<input type="checkbox" id="f125" onclick="start()">
				<h1>Frequência de 125</h1>
				<label class="start125" for="f125">
						<img  class="imgPlay"src="img/play.png"></img>
				</label>
				<div class="comecou125">
					<div class="db">0</div>
					<div class="buttonMenos">-</div>
					<div class="ouviu">Pause</div>
					<div class="buttonMais">+</div>
				</div>
			</div>
			<!-- 250 -->
			<div id="boxFrequencia">
				<input type="checkbox" id="f250" onclick="start()">
				<h1>Frequência de 250</h1>
				<label class="start250" for="f250">
						<img  class="imgPlay"src="img/play.png"></img>
				</label>
				<div class="comecou250">
					<div class="db">0</div>
					<div class="buttonMenos">-</div>
					<div class="ouviu">Pause</div>
					<div class="buttonMais">+</div>
				</div>
			</div>
			<!-- 500 -->
			<div id="boxFrequencia">
				<input type="checkbox" id="f500" onclick="start()">
				<h1>Frequência de 500</h1>
				<label class="start500" for="f500">
						<img  class="imgPlay"src="img/play.png"></img>
				</label>
				<div class="comecou500">
					<div class="db">0</div>
					<div class="buttonMenos">-</div>
					<div class="ouviu">Pause</div>
					<div class="buttonMais">+</div>
				</div>
			</div>
			<!-- 1000 -->
			<div id="boxFrequencia">
				<input type="checkbox" id="f1000" onclick="start()">
				<h1>Frequência de 1000</h1>
				<label class="start1000" for="f1000">
						<img  class="imgPlay"src="img/play.png"></img>
				</label>
				<div class="comecou1000">
					<div class="db">0</div>
					<div class="buttonMenos">-</div>
					<div class="ouviu">Pause</div>
					<div class="buttonMais">+</div>
				</div>
			</div>
			<!-- 2000 -->
			<div id="boxFrequencia">
				<input type="checkbox" id="f2000" onclick="start()">
				<h1>Frequência de 2000</h1>
				<label class="start2000" for="f2000">
						<img  class="imgPlay"src="img/play.png"></img>
				</label>
				<div class="comecou2000">
					<div class="db">0</div>
					<div class="buttonMenos">-</div>
					<div class="ouviu">Pause</div>
					<div class="buttonMais">+</div>
				</div>
			</div>
			<!-- 4000 -->
			<div id="boxFrequencia">
				<input type="checkbox" id="f4000" onclick="start()">
				<h1>Frequência de 4000</h1>
				<label class="start4000" for="f4000">
						<img  class="imgPlay"src="img/play.png"></img>
				</label>
				<div class="comecou4000">
					<div class="db">0</div>
					<div class="buttonMenos">-</div>
					<div class="ouviu">Pause</div>
					<div class="buttonMais">+</div>
				</div>
			</div>
			<!-- grafico -->
			<section class="caixaGrafico">
				<div class="carrega">Carregar resultado</div>
				<div class="gravidade"></div>
				<div class="grafico" id="graf"></div>
				<div class="salvar"></div>
			</section>
		</div>
		<div id="caixaProgress"/>
	</section>
	<div class="user"><?php echo $_GET['user'];?></div>
	<!-- jquery and Js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="js/progress.js"></script>
</body>
</html>