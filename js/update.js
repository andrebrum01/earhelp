$(".resultados").click(function(){
	var user = $(".user").text();
	window.location = "resultados.php?user="+user;
});