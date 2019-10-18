// declarando variaveis
	var progress= $("#sons").children().length;
	var index = $(".select").index();
	var criancas = $("#sons");
// add as bolinhas
	for(var i=0;i<progress;i++){
	$("#caixaProgress").append("<span></span>");
	}
	$("#caixaProgress").children().eq(0).addClass('select');
// add largura no coisa
	$("#sons").css({
		width:"calc(100%*"+progress+")"
	});
// on click
	$(".ouviu").click(function(){
	$("#caixaProgress").children().eq(index).removeClass('select');
	index++;
	if(index==progress) index=0;
	$("#sons").css({
		transform: "translateX(calc(calc(-100%/"+progress+")*"+index+"))"
	});
	$("#caixaProgress").children().eq(index).addClass('select');
	});