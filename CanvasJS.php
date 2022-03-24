<?php
	$periodo = "Septiembre - Diciembre 2020";

	
	$conn = new mysqli("localhost", "root", "1234", "desercionpcausa");
  //$conn = new mysqli("localhost:3307", "root", "dasnivdra", "desercionPcausa");
	$conn->set_charset("utf8");
	$sql1 = "SELECT * FROM desercion WHERE periodo = '".$periodo."' AND carrera = 'dsm'";
	$result1 = $conn->query($sql1);
    $row1 = $result1->fetch_array();

    $sql2 = "SELECT * FROM desercion WHERE periodo = '".$periodo."' AND carrera = 'ird'";
	$result2 = $conn->query($sql2);
    $row2 = $result2->fetch_array();

	$puntos1 = '
			{ label: "Deserción", y: ' . $row1[3] . ' },
			{ label: "Expectativas", y: ' . $row1[4] . ' },
			{ label: "Reprobación", y: ' . $row1[5] . ' },
			{ label: "Económicos", y: ' . $row1[6] . ' },
			{ label: "Personales", y: ' . $row1[7] . ' },
			{ label: "Distancia", y: ' . $row1[8] . ' },
			{ label: "Trabajo", y: ' . $row1[9] . ' },
			{ label: "Cambio UT", y: ' . $row1[10] . ' },
			{ label: "Cambio Carrera", y: ' . $row1[11] . ' },
			{ label: "Reglamento", y: ' . $row1[12] . ' },
			{ label: "Otras", y: ' . $row1[13] . ' }';

	$puntos2 = '
			{ label: "Deserción", y: ' . $row2[3] . ' },
			{ label: "Expectativas", y: ' . $row2[4] . ' },
			{ label: "Reprobación", y: ' . $row2[5] . ' },
			{ label: "Económicos", y: ' . $row2[6] . ' },
			{ label: "Personales", y: ' . $row2[7] . ' },
			{ label: "Distancia", y: ' . $row2[8] . ' },
			{ label: "Trabajo", y: ' . $row2[9] . ' },
			{ label: "Cambio UT", y: ' . $row2[10] . ' },
			{ label: "Cambio Carrera", y: ' . $row2[11] . ' },
			{ label: "Reglamento", y: ' . $row2[12] . ' },
			{ label: "Otras", y: ' . $row2[13] . ' }';
?>
<!DOCTYPE HTML>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	theme:"light3",
	animationEnabled: true,
	title:{
		text: "Deserción por Causa :: <?php echo $periodo; ?>"
	},
	axisY :{
		title: "Numero de Alumnos",
		suffix: ""
	},
	toolTip: {
		shared: "true"
	},
	legend:{
		cursor:"pointer",
		itemclick : toggleDataSeries
	},
	data: [{
		type: "line",
		visible: true,
		showInLegend: true,
		yValueFormatString: "##",
		name: "Admon",
		dataPoints: [<?php echo $puntos1; ?>]
	},
	{
		type: "line", 
		showInLegend: true,
		visible: false,
		yValueFormatString: "##",
		name: "Capital",
		dataPoints: [<?php echo $puntos2; ?>]
	},
	{
		type: "line",
		visible: false,
		showInLegend: true,
		yValueFormatString: "##",
		name: "Agricultura",
		dataPoints: [
			{ label: "Reprobacion", y: 4.37 },
			{ label: "Cambio de Carrera", y: 4.27 },
			{ label: "Ep. 3", y: 4.72 },
			{ label: "Ep. 4", y: 4.87 },
			{ label: "Ep. 5", y: 5.35 },
			{ label: "Ep. 6", y: 5.50 },
			{ label: "Ep. 7", y: 4.84 },
			{ label: "Ep. 8", y: 4.13 },
			{ label: "Ep. 9", y: 5.22 },
			{ label: "Ep. 10", y: 5.39 }
		]
	},
	{
		type: "line",
      	visible: false,
		showInLegend: true,
		yValueFormatString: "##",
		name: "Agro",
		dataPoints: [
			{ label: "Reprobacion", y: 6.64 },
			{ label: "Cambio de Carrera", y: 6.31 },
			{ label: "Ep. 3", y: 6.59 },
			{ label: "Ep. 4", y: 6.95 },
			{ label: "Ep. 5", y: 7.16 },
			{ label: "Ep. 6", y: 6.40 },
			{ label: "Ep. 7", y: 7.20 },
			{ label: "Ep. 8", y: 7.17 },
			{ label: "Ep. 9", y: 6.95 },
			{ label: "Ep. 10", y: 7.09 }
		]
	},
	{
		type: "line", 
		showInLegend: true,
		yValueFormatString: "##",
		name: "Conta",
		dataPoints: [
			{ label: "Reprobacion", y: 8 },
			{ label: "Cambio de Carrera", y: 6.81 },
			{ label: "Ep. 3", y: 6.71 },
			{ label: "Ep. 4", y: 6.82 },
			{ label: "Ep. 5", y: 6.56 },
			{ label: "Ep. 6", y: 6.24 },
			{ label: "Ep. 7", y: 5.40 },
			{ label: "Ep. 8", y: 7.01 },
			{ label: "Ep. 9", y: 7.14 },
			{ label: "Ep. 10", y: 8.11 }
		]
	},
	{
		type: "line", 
		showInLegend: true,
		yValueFormatString: "##",
		name: "Inglesa",
		dataPoints: [
			{ label: "Reprobacion", y: 7.94 },
			{ label: "Cambio de Carrera", y: 7.29 },
			{ label: "Ep. 3", y: 7.28 },
			{ label: "Ep. 4", y: 7.82 },
			{ label: "Ep. 5", y: 7.89 },
			{ label: "Ep. 6", y: 6.71 },
			{ label: "Ep. 7", y: 7.80 },
			{ label: "Ep. 8", y: 7.60 },
			{ label: "Ep. 9", y: 7.66 },
			{ label: "Ep. 10", y: 8.89 }
		]
	},
	{
		type: "line", 
		showInLegend: true,
		yValueFormatString: "##",
		name: "Paramedico",
		dataPoints: [
			{ label: "Reprobacion", y: 10.11 },
			{ label: "Cambio de Carrera", y: 9.27 },
			{ label: "Ep. 3", y: 9.25 },
			{ label: "Ep. 4", y: 10.17 },
			{ label: "Ep. 5", y: 10.72 },
			{ label: "Ep. 6", y: 10.24 },
			{ label: "Ep. 7", y: 12.07 }
		]
	},
          {
		type: "line", 
		showInLegend: true,
		yValueFormatString: "##",
		name: "Alimentos",
		dataPoints: [
			{ label: "Reprobacion", y: 11.76 },
			{ label: "Cambio de Carrera", y: 10.29 },
			{ label: "Ep. 3", y: 12.02 },
			{ label: "Ep. 4", y: 11.80 },
			{ label: "Ep. 5", y: 12.48 },
			{ label: "Ep. 6", y: 12.48 },
			{ label: "Ep. 7", y: 13.61 }
		]
	},
          {
		type: "line", 
		showInLegend: true,
		yValueFormatString: "##",
		name: "IRD",
		dataPoints: [
			{ label: "Reprobacion", y: 11.76 },
			{ label: "Cambio de Carrera", y: 10.29 },
			{ label: "Ep. 3", y: 12.02 },
			{ label: "Ep. 4", y: 11.80 },
			{ label: "Ep. 5", y: 12.48 },
			{ label: "Ep. 6", y: 12.48 },
			{ label: "Ep. 7", y: 13.61 }
		]
	},
          {
		type: "line", 
		showInLegend: true,
		yValueFormatString: "##",
		name: "DSM",
		dataPoints: [
			{ label: "Reprobacion", y: 11.76 },
			{ label: "Cambio de Carrera", y: 10.29 },
			{ label: "Ep. 3", y: 12.02 },
			{ label: "Ep. 4", y: 11.80 },
			{ label: "Ep. 5", y: 12.48 },
			{ label: "Ep. 6", y: 12.48 },
			{ label: "Ep. 7", y: 13.61 }
		]
	}]
});
chart.render();

function toggleDataSeries(e) {
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible ){
		e.dataSeries.visible = false;
	} else {
		e.dataSeries.visible = true;
	}
	chart.render();
}

}
</script>
</head>
<body>
	<section>
<div id="chartContainer" style="height: 600px; max-width: 1100px; margin: 0px auto;"></div>
</section>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>