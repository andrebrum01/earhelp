$(".userzin").height($(".userzin").width());
$(".excluir").height($(".excluir").width());
$(".boxAlerta").hide();
$(".escolha").width($(".caixao").width())

$(window).resize(function(){

	$(".userzin").height($(".userzin").width());
	$(".excluir").height($(".excluir").width());
	$(".escolha").width($(".caixao").width())
});

$(".excluir").click(function(){
	$(".boxAlerta").show();
	$(".escolha").width($(".caixao").width())
});
$(".no").click(function(){
	$(".boxAlerta").hide();
});
$(".yes").click(function(){
	var user = $(".user").text();
	window.location = "delete.php?user="+user;
});