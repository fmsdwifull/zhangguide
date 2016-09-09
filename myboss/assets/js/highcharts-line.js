$(function () {
	var chart; 
		chart = new Highcharts.Chart({   
			chart: {   
				renderTo: 'right_box_butoom', //图表放置的容器，DIV   
				defaultSeriesType: 'line', //图表类型line(折线图),   
			},   
			credits: {   
				enabled: true   //右下角不显示LOGO   
			},   
			title: {   
				text: '' //图表标题   
			},   
			subtitle: {   
				text: ''  //副标题   
			},   
			xAxis: {  //x轴   
				categories: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月','11月', '12月'], //x轴标签名称   
				gridLineWidth: 1, //设置网格宽度为1   
				lineWidth: 2,  //基线宽度   
				labels:{y:26}  //x轴标签位置：距X轴下方26像素   
			},   
			yAxis: {  //y轴   
				title: {text: ''}, //标题   
				lineWidth: 2 //基线宽度   
			},   

			legend: {  //图例   
				layout: 'horizontal',  //图例显示的样式：水平（horizontal）/垂直（vertical）   
				backgroundColor: '#ffc', //图例背景色   
				align: 'left',  //图例水平对齐方式   
				verticalAlign: 'top',  //图例垂直对齐方式   
				x: 100,  //相对X位移   
				y: 60,   //相对Y位移   
				floating: true, //设置可浮动   
				shadow: true  //设置阴影   
			},   
			exporting: {   
				enabled: false  //设置导出按钮不可用   
			},   
			series: [  
			{  //数据列   
				name: '',   
				data: [ - 4.6, -2.2, 4.5, 13.1, 19.8, 24.0, 25.8, 24.4, 19.3, 12.4, 4.1, -2.7]   
			}]   
	
});
});
