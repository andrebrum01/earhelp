<!DOCTYPE html>
<html>
<head>
	<title>EAR HELP</title>
</head>
<link rel="stylesheet" type="text/css" href="css/style3.css">
<link rel="icon" type="imagem/png" href="img/earhelp.png">

<?php
include("conexao.php");
$user = $_GET['user'];
$query = "select email from usuario where user= '$user'";
$result = mysqli_query($conexao, $query);
$email;
if(mysqli_num_rows($result) != 0){
    $email = mysqli_fetch_row($result);
    $email = $email[0];

$query = "select DISTINCT grupo from grafico where email= '$email'";
$result = mysqli_query($conexao, $query);

if(mysqli_num_rows($result)!=0){
    $grupos=mysqli_fetch_all($result);
    $freq=array(array());
    $dec=array(array());
    for($i=0;$i<count($grupos);$i++){
    	$thisGroup= $grupos[$i][0];
        $query = "select frequencia,decibeis,grupo from grafico where email= '$email' and grupo= '$thisGroup'";
        $result = mysqli_query($conexao, $query);
        if($result){
        	for($j=0;$j<mysqli_num_rows($result);$j++){
	            $conteudo=mysqli_fetch_row($result);
	            $freq[$i][$j]=$conteudo[0];
	            $dec[$i][$j]=$conteudo[1];
        	}
        }
        else{
            echo "<br> you have some problem";
        }
        
    }
    
}
else{
	echo "<div>Sem Resultados</div>";
	ini_set('display_errors', 0 );
	error_reporting(0);
    
}
}
?>

<body>
	
	<section class="caixa">
		<a class="back" href="painel.php?user=<?php echo $user?>"></a>
		<?php 
			for($i=count($freq)-1;$i>=0;$i--){
		?>
		<div class='box'>
			<div class="number"><?php echo $i+1 ?>°</div>
			<div class="freq"><?php echo implode("/", $freq[$i]); ?></div>
			<div class="db"><?php echo implode("/", $dec[$i]); ?></div>
			<div class="gravidade">
				
			</div>
			<div id="<?php echo $i ?>" class="grafico">

			</div>
		</div>
	<?php
		}//<-------i
	?>
	</section>

<!-- js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="js/charts.js"></script>
</body>
</html>