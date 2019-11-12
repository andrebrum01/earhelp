// declarando variaveis
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
		index++;
		if(index==progress) index=0;

		$("#sons").css({
			transform: "translateX(calc(calc(-100%/"+progress+")*"+index+"))"
		});
		$("#caixaProgress").children().eq(index).addClass('select');
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
	},500);
});