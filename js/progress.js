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
// on click no "ouviu"
	$(".ouviu").click(function(){
		$("#caixaProgress").children().eq(index).removeClass('select');
		$(".teste1 input[type='checkbox']").eq(index).prop( "checked", false );
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
$('.buttonMais').click(function(){
    var pos= $(this).index(this);
    if(divs[pos].innerHTML<100){
	    divs[pos].innerHTML=parseInt(divs[pos].innerHTML)+5;
	    db[pos]=divs[pos].innerHTML;
	    atualizaArray();
	}
    alert(db[pos]);
});
// click menos
$('.buttonMenos').click(function(){
    var pos= $(this).index(this);
    if(divs[pos].innerHTML>0){
	    divs[pos].innerHTML=parseInt(divs[pos].innerHTML)-5;
	    db[pos]=divs[pos].innerHTML;
	    atualizaArray();
	}
    alert(db[pos]);
});
// divs[0].innerHTML=parseInt(divs[0].innerHTML)+5;
