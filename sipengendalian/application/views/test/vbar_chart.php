<!doctype html>
<html>
	<head>
		<title>Bar Chart</title>
                <script src="<?php echo base_url('assets/chart/js/Chart.js') ?>"></script>
	</head>
	<body>
		<table>
			<tr>
				<td style="padding-left:20px; background-color:rgba(110,110,110,0.5)"></td>
				<td>Cipta Karya</td>
				<td style="padding-left:20px"></td>
				<td style="padding-left:20px; background-color:rgba(151,187,205,0.5)"></td>
				<td>Bina Marga</td>
				<td style="padding-left:20px"></td>
				<td style="padding-left:20px; background-color:rgba(50,220,50,0.5)"></td>
				<td>Sumber Daya Air</td>
				<td style="padding-left:20px"></td>
				<td style="padding-left:20px; background-color:rgba(151,100,105,0.5)"></td>
				<td>Perumahan Rakyat</td>
				<td style="padding-left:20px"></td>
			</tr>
		</table>
		<div style="width: 50%">
			<canvas id="canvas" height="450" width="600"></canvas>
		</div>


	<script>
	var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

	var barChartData = {
		labels : ["2015 Fisik","2015 Dana","2016 Fisik","2016 Dana","2017 Fisik","2017 Dana"],
		datasets : [
			{
				fillColor : "rgba(110,110,110,0.5)",
				strokeColor : "rgba(110,110,110,0.8)",
				highlightFill: "rgba(110,110,110,0.75)",
				highlightStroke: "rgba(110,110,110,1)",
				data : [13,randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
			},
			{
				fillColor : "rgba(151,187,205,0.5)",
				strokeColor : "rgba(151,187,205,0.8)",
				highlightFill : "rgba(151,187,205,0.75)",
				highlightStroke : "rgba(151,187,205,1)",
				data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
			},
			{
				fillColor : "rgba(50,220,50,0.5)",
				strokeColor : "rgba(50,220,50,0.8)",
				highlightFill: "rgba(50,220,50,0.75)",
				highlightStroke: "rgba(50,220,50,1)",
				data : [13,randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
			},
			{
				fillColor : "rgba(151,100,105,0.5)",
				strokeColor : "rgba(151,100,105,0.8)",
				highlightFill : "rgba(151,100,105,0.75)",
				highlightStroke : "rgba(151,100,105,1)",
				data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
			}
		]

	}
	window.onload = function(){
		var ctx = document.getElementById("canvas").getContext("2d");
		window.myBar = new Chart(ctx).Bar(barChartData, {
			responsive : true
		});
	}

	</script>
	</body>
</html>
