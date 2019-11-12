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
var db = [];			
divs= $( ".db" ).get();	
function atualizaArray(){	
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
	    alert(db[pos].toString());	
	    stop();	
	    startBeep((pos+1)*225,db[pos].toString());	
	}		
});	
// click menos	 
$('div .buttonMenos').click(function(){		
    var pos= $(this).index('.buttonMenos');			
    if(divs[pos].innerHTML>0){		
	    divs[pos].innerHTML=parseInt(divs[pos].innerHTML)-5;	
	    db[pos]=divs[pos].innerHTML;	
	    atualizaArray();	
	   	alert(db[pos].toString());	
	   	stop();	
	    startBeep((pos+1)*225,db[pos].toString());	
	}	
});	
// start sons	
function startBeep(freq,deb){	
  	oscillator = audioContext.createOscillator();	
	contextGain = audioContext.createGain();	
	oscillator.connect(contextGain);	
	contextGain.connect(audioContext.destination);	
	contextGain.gain.value=(deb/10000);	
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
			startBeep((i+1)*225,db[i].toString())	
		}	
	}	
}	
stop();