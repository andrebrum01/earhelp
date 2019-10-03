<?php
session_start();
include("verificar_login.php");
?>

<h2>Bem Vindo, <?php echo $_SESSION['email'];?></h2>
<h2><a href="logout.php">SAIR</a></h2>