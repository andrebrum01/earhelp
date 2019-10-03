<!DOCTYPE html>
<html>
<head>
	<title>EAR HELP</title>
</head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<body>
	<section class="firstView">
	<div class="caixaLogin">
	<?php
	if(isset($_SESSION['email'])):
	?>
	cadastrado
	<?php
	endif;
	?>
		<span id="palavra">login</span>
		<form id="frm"class="login" action="login.php" method="POST">
			<div id="space"></div>
			<div class="inputagem"><label for="email"><img src="img/user.png"></label><input type="email" name="email" id="email" placeholder="Username" required></div>
			<div class="inputagem"><label for="senha"><img src="img/olho.png"></label><input type="password" name="senha" id="senha" placeholder="Password"></div>
			<button class="btlogin">Login</button>
		</form>
	</div>
	<button id="sel">a</button>
	<label for="sel">
	<div class="escolha">
		<div id="clickLogin" class="selecionado">Login</div>
		<div id="clickLogout" class="selecionado naoSelecionado">Logout</div>
	</div>
	</label>
	</section>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
    </script>
<script type="text/javascript" src="js/actions.js"></script>
</script>
</body>

</html>