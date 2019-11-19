// desenhar o grafico
	google.charts.load('current', {'packages':['corechart']});
	window.drawChart function(box){
		var data = new google.visualization.DataTable();
		data.addColumn('string', 'Frequência');
		data.addColumn('number', 'Decibeis');
		var graf= box;
		for(var i=0;i<db.length;i++){
			data.addRow([freq[i].toString(),parseInt(db[i])]);
		}
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
		var chart = new google.visualization.AreaChart(graf);
		chart.draw(data,options);
	}
