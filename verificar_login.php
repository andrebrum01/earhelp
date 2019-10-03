<?php
print_r($_SESSION['email']);

if(!$_SESSION['email']){
    header('Location: index.php');
    exit();
}

?>