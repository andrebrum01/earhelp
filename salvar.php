<?php
include("conexao.php");
$vetor= $_GET['vetor'];
$user = $_GET['user'];
$query = "select email from usuario where user= '$user'";
$result = mysqli_query($conexao, $query);
if(mysqli_num_rows($result) != 0){
    $email = mysqli_fetch_row($result);
    $email = $email[0];
    $query = "select Max(grupo) from grafico where email= '$email'";
    $result = mysqli_query($conexao, $query);
    $miniArray =mysqli_fetch_row($result);
    $grupo= $miniArray[0]+1;
    for($i=0;$i<count($vetor);$i++){
        $freq= 125*(2**$i);
        $db = $vetor[$i];
        $query = "insert into grafico (frequencia,decibeis,grupo,email) values ('$freq','$db','$grupo','$email')";
        $result = mysqli_query($conexao, $query);
        echo $query."<br>";
    }
        if($result){
            echo "Salvo com Sucesso";
            header("Location: resultados.php?user=$user");
        }
        else{
            header('Location: painel.php?$user');
            exit();
        }
}

?>