
// declarando variaveis
	var audioContext = new (window.AudioContext || window.webkitAudioContext)();	
	var oscillator = audioContext.createOscillator();	
	var contextGain = audioContext.createGain();
	var progress= $("#sons").children().length;
	var index = $("#caixaProgress .select").index();
// add as bolinhas
	for(var i=0;i<progress;i++){
	$("#caixaProgress").append("<span></span>");
	}
	$("#caixaProgress").children().eq(0).addClass('select');
	index = $("#caixaProgress .select").index();
// add largura no coisa
	$("#sons").css({
		width:"calc(100%*"+progress+")"
	});
// on click no :)
	$(".ouviu").click(function(){
		$("#caixaProgress").children().eq(index).removeClass('select');
		$(".teste1 input[type='checkbox']").eq(index).prop( "checked", false );
		index++;
		if(index==progress) index=0;

		$("#sons").css({
			transform: "translateX(calc(calc(-100%/"+progress+")*"+index+"))"
		});
		$("#caixaProgress").children().eq(index).addClass('select');
		stop();
	});
// clicando nas bolinhas
	$("#caixaProgress span").click(function(){
		var selecionado = $("#caixaProgress").children().index(this);
		$("#caixaProgress").children().eq(index).removeClass('select');
		$(".teste1 input[type='checkbox']").eq(index).prop( "checked", false );
		index=selecionado;
		$("#sons").css({
			transform: "translateX(calc(calc(-100%/"+progress+")*"+index+"))"
		});
		$("#caixaProgress").children().eq(index).addClass('select');
		stop();
		
	});
// -----------------------------------------------------------------------
// declarando mais variaveis
	var progress2= $(".boxDica").children().length;
	var index2 = $(".eu").index();


// add largura no outro coisa
	$(".boxDica").css({
		width:"calc(100%*"+progress2+")"
	});
// on click no seguinte
	$(".seg").click(function(){
		$(".boxDica").children().eq(index2).removeClass('eu');
		index2++;
		if(index2==progress2) index2=0;
		$(".boxDica").css({
			transform: "translateX(calc(calc(-100%/"+progress2+")*"+index2+"))"
		});
	});
//aaaaaaaaaaaaa
	$(".buttonMais").height( $(".buttonMais").width());
	$(".buttonMenos").width( $(".buttonMais").width());
	$(".buttonMenos").height( $(".buttonMais").width());
// ocultar user
$(".userzin").click(function(){
	var pop = $(".popUser");
	// visivel
	if(pop.is(':visible')){
		pop.hide();
	}
	// invisivel
	else{
		pop.show();
	}
});
$(".popUser").mouseleave(function () { 
	setTimeout(function(){
		$(".popUser").hide();
	},300);
});
//aaaaaaaaaaaaa 	
	$(".buttonMaisExemplo").height( $(".buttonMaisExemplo").width());	
	$(".buttonMenosExemplo").width( $(".buttonMaisExemplo").width());		
	$(".buttonMenosExemplo").height( $(".buttonMaisExemplo").width());		
//pegar  o db		
var db;			
divs= $( ".db" ).get();	
function atualizaArray(){	
	db = [];
	for ( var i = 0; i < divs.length; i++ ) {	
	    db.push( divs[ i ].innerHTML );	
	}		
}		
atualizaArray();
//click mais			
$('div .buttonMais').click(function(){	
    var pos= $(this).index('.buttonMais');	
    if(divs[pos].innerHTML<100){	
	    divs[pos].innerHTML=parseInt(divs[pos].innerHTML)+5;	
	    db[pos]=divs[pos].innerHTML;	
	    atualizaArray();	
	    stop();	
	    startBeep((125*(2**pos)),db[pos].toString());	
	}		
});	
// click menos	 
$('div .buttonMenos').click(function(){		
    var pos= $(this).index('.buttonMenos');			
    if(divs[pos].innerHTML>0){		
	    divs[pos].innerHTML=parseInt(divs[pos].innerHTML)-5;	
	    db[pos]=divs[pos].innerHTML;	
	    atualizaArray();	
	   	stop();	
	    startBeep((125*(2**pos)),db[pos].toString());	
	}	
});	
// start sons	
function startBeep(freq,deb){	
  	oscillator = audioContext.createOscillator();	
	contextGain = audioContext.createGain();	
	oscillator.connect(contextGain);	
	contextGain.connect(audioContext.destination);	
	contextGain.gain.value=(deb/1000);	
	oscillator.type = 'sine';	
	oscillator.frequency.setValueAtTime(freq, audioContext.currentTime); // value in hertz	
	oscillator.start(audioContext.currentTime);	
}	
function stop(){	
	oscillator.stop(audioContext.currentTime);	
}	
function start(){	
	for(var i =0;i<$(".teste1 input[type='checkbox']").length;i++){	
		if($(".teste1 input[type='checkbox']").eq(i).prop("checked")){	
			startBeep((125*(2**i)),db[i].toString())	
		}	
	}	
}	
//-----------------chart google------------------------
google.charts.load('current', {'packages':['corechart']});
function drawChart(){
	$(".salvar").show();
	var data = new google.visualization.DataTable();
	data.addColumn('string', 'Frequência');
	data.addColumn('number', 'Decibeis');
	for(var i=0;i<db.length;i++){
		data.addRow([(125*(2**i)).toString(),parseInt(db[i])]);
	}
	$(".gravidade").text(gravidade(parseInt(db[2]),parseInt(db[3]),parseInt(db[4])));
	alert($(".gravidade").text());
	var graf= $(".grafico");
	var options ={
		'width':graf.width(),
		'height':graf.height(),
		legend: 'none',
		backgroundColor:'transparent',
		pointSize:4,
		colors: ['#3de6af'],
		vAxis:{ 
			maxValue:100,
			minValue:0,
			direction:-1,
			gridlines:{
				color:'#082336'
			},
			color:'#082336'
		},
		hAxis:{
			color:'#082336'
		}
	};
	var chart = new google.visualization.AreaChart(document.getElementById('graf'));
	chart.draw(data,options);
}
$(window).resize(function(){
	var count=0;
	for(var i=0;i<db.length;i++){
		if(db[i]==0){ 
			count++;
		}
	}
	if(count==0)
		drawChart();
});
//-------------------caregar-o-baguio----------------------
$('.carrega').click(function(){		
	var palavras="Você não realizou o teste de frequência (s):<br>";
	var count=0;
	for(var i=0;i<db.length;i++){
		if(db[i]==0){
			palavras +=" "+(125*(2**i)).toString()+" "; 
			count++;
		}
	}
	if(count!=0) {
		$(".alerta .conteudo").html(palavras.toString());
		$(".alerta").show();
		setTimeout(function(){
			$(".alerta").hide();
		},5000);
	}
	else
		drawChart();
});	
$(".alerta").hide();
// onclick no salvar mn
$(".salvar").click(function(){
	var user = $(".user").text();
	var vetor = "";
	for(var i=0;i<db.length;i++){
		if(i<db.length-1)vetor+="vetor[]="+db[i]+"&";
		else vetor+="vetor[]="+db[i];
	}
	vetor+="&user="+user;
	window.location = "salvar.php?"+vetor;
});
// onclick no resultado
$(".resultados").click(function(){
	var user = $(".user").text();
	window.location = "resultados.php?user="+user;
});
// onclick no conta
$(".alterar").click(function(){
	var user = $(".user").text();
	window.location = "editarUsuario.php?user="+user;
});

// saber a gravidade
function gravidade(val1,val2,val3){
 	var text;
 	var media=(val1+val2+val3)/3;
 	if(media <= 25)
 		text = "Audição Normal";
 	else if(media <=40)
 		text= "Perda Leve"
 	else if(media <=60)
 		text = "Perda Moderada"
 	else if(media <=80)
 		text = "Perda Severa"
 	else if(media > 80)
 		text = "Perda Profunda"
 	else
 		text = "Erro no Resultado"

 	return text;
 }