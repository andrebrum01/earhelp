$(document).ready(function () {
	$('#sel').click(function(){
		$('#clickLogin').toggleClass('naoSelecionado');
		$('#clickLogout').toggleClass('naoSelecionado');
		
		if($('#palavra').text() == "login"){
		$('#palavra').empty();
		$('#palavra').append('Novo login');
		$('#caixa1').css('visibility', 'hidden');
		$('#caixa2').css('visibility', 'visible');
		}
		else{
		$('#palavra').empty();
		$('#palavra').append('login');	
		$('#caixa1').css('visibility', 'visible');
		$('#caixa2').css('visibility', 'hidden');
		}
	});
	
		
});