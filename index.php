<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>EAR HELP</title>
</head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<body>
	<section class="firstView">
	<div class="caixaLogin">
		<div id="caixa1">
		<span id="palavra">login</span>
		<form id="frm1"class="login" action="login.php" method="POST">
			<!-- sucesso -->
			<?php
				if(isset($_SESSION['criado'])){
			?>
			<div class="sucesso">Criado com Sucesso !</div>
			<?php
				}
				if(isset($_SESSION['naocriado'])){
			?>
			<div class="ruim">Usuário já existe !</div>
			<?php
				}				
			?>
			<!-- autenticacao -->
			<?php
				if(isset($_SESSION['nao_autenticado'])&&empty($_SESSION['criado'])&&empty($_SESSION['naocriado'])){
			?>
			<div class="erroMessage">Usuario ou senha errado !</div>
			<?php
				}else if(empty($_SESSION['criado'])&&empty($_SESSION['naocriado'])){
			?>
			<div class="space"></div>
			<?php
			}
			unset($_SESSION['nao_autenticado']);
			unset($_SESSION['criado']);
			unset($_SESSION['naocriado'])
			?>
			<div class="inputagem"><label for="email"><img src="img/user.png"></label><input type="email" name="email" id="email" placeholder="Username" required></div>
			<div class="inputagem"><label for="senha"><img src="img/olho.png"></label><input type="password" name="senha" id="senha" placeholder="Password"></div>
			<button class="btlogin">Login</button>
		</form>
		</div>
		<div id="caixa2">
		<span id="palavra">Novo login</span>
		<form id="frm2"class="login" action="new_login.php" method="POST">
			<!-- sucesso -->
			<?php
				if(isset($_SESSION['criado'])){
			?>
			<div class="sucesso">Criado com Sucesso !</div>
			<?php
				}
				if(isset($_SESSION['naocriado'])){
			?>
			<div class="ruim">Usuário já existe !</div>
			<?php
				}				
			?>
			<!-- autenticacao -->
			<?php
				if(isset($_SESSION['nao_autenticado'])&&empty($_SESSION['criado'])&&empty($_SESSION['naocriado'])){
			?>
			<div class="erroMessage">Usuario ou senha errado !</div>
			<?php
				}else if(empty($_SESSION['criado'])&&empty($_SESSION['naocriado'])){
			?>
			<div class="space"></div>
			<?php
			}
			unset($_SESSION['nao_autenticado']);
			unset($_SESSION['criado']);
			unset($_SESSION['naocriado'])
			?>
			<div class="inputagem"><label for="email"><img src="img/user.png"></label><input type="email" name="email" id="email" placeholder="Username" required></div>
			<div class="inputagem"><label for="senha" required><img src="img/olho.png"></label><input type="password" name="senha" id="senha" placeholder="Password"></div>
			<button class="btlogin">Novo Login</button>
		</form>
		</div>
	</div>
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