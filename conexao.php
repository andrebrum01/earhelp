<?php
define('HOST','localhost');
define('user', 'root');
define('senha','');
define('db','login');
$conexao = mysqli_connect(HOST,user,senha,db) or die ('Não foi possível fazer a conexão');
?>