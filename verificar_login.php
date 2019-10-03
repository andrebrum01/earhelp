<?php
if(!$_SESSION['email']){
    header('Location: index.php');
    exit();
}

?>