<?php
session_start();
echo $_SESSION['email'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>EAR HELP</title>
</head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<body>
<h2>Bem Vindo, <?php echo $_SESSION['email'];?></h2>
<h2><a href="/logout.php">SAIR</a></h2>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
    </script>
<script type="text/javascript" src="js/actions.js"></script>
</body>

</html>