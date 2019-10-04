<?php
define('HOST','localhost');
define('user', 'root');
define('senha','1234');
define('db','login');
$conexao = mysqli_connect(HOST,user,senha,db) or die ('Não foi possível fazer a conexão');
?>