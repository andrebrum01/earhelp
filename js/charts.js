// desenhar o grafico
	var freq= Array();
	var db= Array();
	var box= Array();
	google.charts.load('current', {'packages':['corechart']});
	function drawChart(i){
		var dat = new google.visualization.DataTable();
		dat.addColumn('string', 'Frequência');
		dat.addColumn('number', 'Decibeis');
		var graf=box[i];
		var variaveldb = db[i].split("/");
		var variavelfreq = freq[i].split("/");
		for(var j=0;j<variaveldb.length;j++){
			dat.addRow([parseInt(variavelfreq[j]).toString(),parseInt(variaveldb[j])]);
		}
		$(".gravidade").eq($(".gravidade").length - i - 1).text(gravidade(parseInt(variaveldb[2]),parseInt(variaveldb[3]),parseInt(variaveldb[4])));
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
		var text = i.toString();
		var oi = document.getElementById(text);
		var chart = new google.visualization.AreaChart(oi);
		chart.draw(dat,options);
	}
	$(".box").each(function(index) {
		var invert = $(".box").length - index - 1;
		freq.push($(".freq").eq(invert).text());
		db.push($(".db").eq(invert).text());
        box.push($(".grafico").eq(invert));
	});
	$(window).load(function() { 
     carregar();
  });
 $(window).resize(function(){
		var count=box.length;
		if(count!=0)
	 		carregar();
	 });
 function carregar(){
 	for(var i=0;i<$(".box").length;i++){
     var invert = $(".box").length - i - 1;
    	drawChart(invert);
    }
 }
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