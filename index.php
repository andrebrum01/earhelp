<!DOCTYPE html>
<html>
<head>
	<title>EAR HELP</title>
</head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<body>
	<section class="firstView">
	<div class="caixaLogin">
				<!-- ******************LOGIN******************* -->
		<div id="caixa1">
		<span id="palavra">login</span>
		<form id="frm1"class="login" action="login.php" method="POST">
			<!-- sucesso -->
			<?php
				if(isset($_GET['criado'])){
			?>
			<div class="sucesso">Criado com Sucesso !</div>
			<?php
				}
				if(isset($_GET['naocriado'])){
			?>
			<div class="erroMessage">Usuário já existe !</div>
			<?php
				}				
			?>
			<!-- autenticacao -->
			<?php
				if(isset($_GET['nao_autenticado'])&&empty($_GET['criado'])&&empty($_GET['naocriado'])){
			?>
			<div class="erroMessage">Usuario ou senha errado !</div>
			<?php
				}else if(empty($_GET['criado'])&&empty($_GET['naocriado'])){
			?>
			<div class="space"></div>
			<?php
			}
			?>
			<div class="inputagem"><label for="email"><img src="img/user.png"></label><input type="text" name="email" id="email" placeholder="Username/Email" required /></div>
			<div class="inputagem"><label for="senha"><img src="img/olho.png"></label><input type="password" name="senha" id="senha" placeholder="Password"required/></div>
			<button class="btlogin">Login</button>
		</form>
		</div>
		<!-- ******************NOVO**LOGIN******************* -->
		<div id="caixa2">
		<span id="palavra">Novo login</span>
		<form id="frm2"class="addlogin" action="new_login.php" method="POST">
			<div class="inputagem"><label for="user"><img src="img/user.png"></label><input type="text" name="user" id="user" placeholder="Username" required/></div>
			<div class="inputagem"><label for="email"><img src="img/user.png"></label><input type="email" name="email" id="email" placeholder="Email" required/></div>
			<div class="inputagem"><label for="senha" required><img src="img/olho.png"></label><input type="password" name="senha" id="senha" placeholder="Password"/></div>
			<div class="inputagem"><label for="denovo" required><img src="img/olho.png"></label><input type="password" name="denovo" id="denovo" placeholder="Confirm Password"/></div>
			<button class="btlogin">Novo Login</button>
		</form>
		</div>
	</div>
	<!-- login or logout -->
	<button id="sel">a</button>
	<label for="sel">
	<div class="escolha">
		<div id="clickLogin" class="selecionado">Sign In</div>
		<div id="clickLogout" class="selecionado naoSelecionado">Sign Out</div>
	</div>
	</label>
	</section>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
    </script>
<script type="text/javascript" src="js/actions.js"></script>
</body>

</html>