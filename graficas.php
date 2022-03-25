<?php

if( isset($_POST["iniciar"]) )
  $periodo = $_POST['periodo'];
else
  $periodo = "M21";



  $conn = new mysqli("localhost", "root", "1234", "desercionpcausa");
  //$conn = new mysqli("localhost:3307", "root", "dasnivdra", "desercionPcausa");
	$conn->set_charset("utf8");
  /*
  $sqlp = "SELECT periodo FROM desercion WHERE periodo = '".$periodo."' AND carrera = '1'";
	$result1 = $conn->query($sql1);
  $row1 = $result1->fetch_array();
  */
	$sql1 = "SELECT *, COUNT(*) elementos FROM desercion WHERE periodo = '".$periodo."' AND carrera = '1'";
	$result1 = $conn->query($sql1);
  $row1 = $result1->fetch_array();
  
  $sql2 = "SELECT *, COUNT(*) elementos FROM desercion WHERE periodo = '".$periodo."' AND carrera = '2'";
	$result2 = $conn->query($sql2);
  $row2 = $result2->fetch_array();
  
  $sql3 = "SELECT *, COUNT(*) elementos FROM desercion WHERE periodo = '".$periodo."' AND carrera = '3'";
	$result3 = $conn->query($sql3);
  $row3 = $result3->fetch_array();
  
  $sql4 = "SELECT *, COUNT(*) elementos FROM desercion WHERE periodo = '".$periodo."' AND carrera = '4'";
	$result4 = $conn->query($sql4);
  $row4 = $result4->fetch_array();
  
  $sql5 = "SELECT *, COUNT(*) elementos FROM desercion WHERE periodo = '".$periodo."' AND carrera = '5'";
	$result5 = $conn->query($sql5);
  $row5 = $result5->fetch_array();
  
  $sql6 = "SELECT *, COUNT(*) elementos FROM desercion WHERE periodo = '".$periodo."' AND carrera = '6'";
	$result6 = $conn->query($sql6);
  $row6 = $result6->fetch_array();
  
  $sql7 = "SELECT *, COUNT(*) elementos FROM desercion WHERE periodo = '".$periodo."' AND carrera = '7'";
	$result7 = $conn->query($sql7);
  $row7 = $result7->fetch_array();
  
  $sql8 = "SELECT *, COUNT(*) elementos FROM desercion WHERE periodo = '".$periodo."' AND carrera = '8'";
	$result8 = $conn->query($sql8);
  $row8 = $result8->fetch_array();
  
  $sql9 = "SELECT *, COUNT(*) elementos FROM desercion WHERE periodo = '".$periodo."' AND carrera = '9'";
	$result9 = $conn->query($sql9);
  $row9 = $result9->fetch_array();
  
  $sql10 = "SELECT *, COUNT(*) elementos FROM desercion WHERE periodo = '".$periodo."' AND carrera = '10'";
	$result10 = $conn->query($sql10);
  $row10 = $result10->fetch_array();
  
  if($row1['elementos'] != 0)
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

  if($row2['elementos'] != 0)
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
   
   if($row3['elementos'] != 0)
   $puntos3 = '
			{ label: "Deserción", y: ' . $row3[3] . ' },
			{ label: "Expectativas", y: ' . $row3[4] . ' },
			{ label: "Reprobación", y: ' . $row3[5] . ' },
			{ label: "Económicos", y: ' . $row3[6] . ' },
			{ label: "Personales", y: ' . $row3[7] . ' },
			{ label: "Distancia", y: ' . $row3[8] . ' },
			{ label: "Trabajo", y: ' . $row3[9] . ' },
			{ label: "Cambio UT", y: ' . $row3[10] . ' },
			{ label: "Cambio Carrera", y: ' . $row3[11] . ' },
			{ label: "Reglamento", y: ' . $row3[12] . ' },
			{ label: "Otras", y: ' . $row3[13] . ' }';
   
   if($row4['elementos'] != 0)
   $puntos4 = '
			{ label: "Deserción", y: ' . $row4[3] . ' },
			{ label: "Expectativas", y: ' . $row4[4] . ' },
			{ label: "Reprobación", y: ' . $row4[5] . ' },
			{ label: "Económicos", y: ' . $row4[6] . ' },
			{ label: "Personales", y: ' . $row4[7] . ' },
			{ label: "Distancia", y: ' . $row4[8] . ' },
			{ label: "Trabajo", y: ' . $row4[9] . ' },
			{ label: "Cambio UT", y: ' . $row4[10] . ' },
			{ label: "Cambio Carrera", y: ' . $row4[11] . ' },
			{ label: "Reglamento", y: ' . $row4[12] . ' },
			{ label: "Otras", y: ' . $row4[13] . ' }';
      
   if($row5['elementos'] != 0)   
   $puntos5 = '
			{ label: "Deserción", y: ' . $row5[3] . ' },
			{ label: "Expectativas", y: ' . $row5[4] . ' },
			{ label: "Reprobación", y: ' . $row5[5] . ' },
			{ label: "Económicos", y: ' . $row5[6] . ' },
			{ label: "Personales", y: ' . $row5[7] . ' },
			{ label: "Distancia", y: ' . $row5[8] . ' },
			{ label: "Trabajo", y: ' . $row5[9] . ' },
			{ label: "Cambio UT", y: ' . $row5[10] . ' },
			{ label: "Cambio Carrera", y: ' . $row5[11] . ' },
			{ label: "Reglamento", y: ' . $row5[12] . ' },
			{ label: "Otras", y: ' . $row5[13] . ' }';
      
   if($row6['elementos'] != 0)  
   $puntos6 = '
			{ label: "Deserción", y: ' . $row6[3] . ' },
			{ label: "Expectativas", y: ' . $row6[4] . ' },
			{ label: "Reprobación", y: ' . $row6[5] . ' },
			{ label: "Económicos", y: ' . $row6[6] . ' },
			{ label: "Personales", y: ' . $row6[7] . ' },
			{ label: "Distancia", y: ' . $row6[8] . ' },
			{ label: "Trabajo", y: ' . $row6[9] . ' },
			{ label: "Cambio UT", y: ' . $row6[10] . ' },
			{ label: "Cambio Carrera", y: ' . $row6[11] . ' },
			{ label: "Reglamento", y: ' . $row6[12] . ' },
			{ label: "Otras", y: ' . $row6[13] . ' }';
      
   if($row7['elementos'] != 0)
   $puntos7 = '
			{ label: "Deserción", y: ' . $row7[3] . ' },
			{ label: "Expectativas", y: ' . $row7[4] . ' },
			{ label: "Reprobación", y: ' . $row7[5] . ' },
			{ label: "Económicos", y: ' . $row7[6] . ' },
			{ label: "Personales", y: ' . $row7[7] . ' },
			{ label: "Distancia", y: ' . $row7[8] . ' },
			{ label: "Trabajo", y: ' . $row7[9] . ' },
			{ label: "Cambio UT", y: ' . $row7[10] . ' },
			{ label: "Cambio Carrera", y: ' . $row7[11] . ' },
			{ label: "Reglamento", y: ' . $row7[12] . ' },
			{ label: "Otras", y: ' . $row7[13] . ' }';
   
   if($row8['elementos'] != 0)   
   $puntos8 = '
			{ label: "Deserción", y: ' . $row8[3] . ' },
			{ label: "Expectativas", y: ' . $row8[4] . ' },
			{ label: "Reprobación", y: ' . $row8[5] . ' },
			{ label: "Económicos", y: ' . $row8[6] . ' },
			{ label: "Personales", y: ' . $row8[7] . ' },
			{ label: "Distancia", y: ' . $row8[8] . ' },
			{ label: "Trabajo", y: ' . $row8[9] . ' },
			{ label: "Cambio UT", y: ' . $row8[10] . ' },
			{ label: "Cambio Carrera", y: ' . $row8[11] . ' },
			{ label: "Reglamento", y: ' . $row8[12] . ' },
			{ label: "Otras", y: ' . $row8[13] . ' }';
   
   if($row9['elementos'] != 0)   
   $puntos9 = '
			{ label: "Deserción", y: ' . $row9[3] . ' },
			{ label: "Expectativas", y: ' . $row9[4] . ' },
			{ label: "Reprobación", y: ' . $row9[5] . ' },
			{ label: "Económicos", y: ' . $row9[6] . ' },
			{ label: "Personales", y: ' . $row9[7] . ' },
			{ label: "Distancia", y: ' . $row9[8] . ' },
			{ label: "Trabajo", y: ' . $row9[9] . ' },
			{ label: "Cambio UT", y: ' . $row9[10] . ' },
			{ label: "Cambio Carrera", y: ' . $row9[11] . ' },
			{ label: "Reglamento", y: ' . $row9[12] . ' },
			{ label: "Otras", y: ' . $row9[13] . ' }';
   if($row10['elementos'] != 0)
   $puntos10 = '
			{ label: "Deserción", y: ' . $row10[3] . ' },
			{ label: "Expectativas", y: ' . $row10[4] . ' },
			{ label: "Reprobación", y: ' . $row10[5] . ' },
			{ label: "Económicos", y: ' . $row10[6] . ' },
			{ label: "Personales", y: ' . $row10[7] . ' },
			{ label: "Distancia", y: ' . $row10[8] . ' },
			{ label: "Trabajo", y: ' . $row10[9] . ' },
			{ label: "Cambio UT", y: ' . $row10[10] . ' },
			{ label: "Cambio Carrera", y: ' . $row10[11] . ' },
			{ label: "Reglamento", y: ' . $row10[12] . ' },
			{ label: "Otras", y: ' . $row10[13] . ' }';
     
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Deserci&oacute;n</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-static/">

    

    <!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Favicons -->
<meta name="theme-color" content="#7952b3">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="navbar-top.css" rel="stylesheet"></LINk>

    
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"></LINk>
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
		dataPoints: [<?php echo $puntos3; ?>]
	},
	{
		type: "line",
      	visible: false,
		showInLegend: true,
		yValueFormatString: "##",
		name: "Agro",
		dataPoints: [<?php echo $puntos4; ?>]
	},
	{
		type: "line", 
		showInLegend: true,
		yValueFormatString: "##",
		name: "Conta",
		dataPoints: [<?php echo $puntos5; ?>]
	},
	{
		type: "line", 
		showInLegend: true,
		yValueFormatString: "##",
		name: "Inglesa",
		dataPoints: [<?php echo $puntos6; ?>]
	},
	{
		type: "line", 
		showInLegend: true,
		yValueFormatString: "##",
		name: "Paramedico",
		dataPoints: [<?php echo $puntos7; ?>]
	},
          {
		type: "line", 
		showInLegend: true,
		yValueFormatString: "##",
		name: "Alimentos",
		dataPoints: [<?php echo $puntos8; ?>]
	},
          {
		type: "line", 
		showInLegend: true,
		yValueFormatString: "##",
		name: "IRD",
		dataPoints: [<?php echo $puntos9; ?>]
	},
          {
		type: "line", 
		showInLegend: true,
		yValueFormatString: "##",
		name: "DSM",
		dataPoints: [<?php echo $puntos10; ?>]
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
    
<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <div class="container-fluid">
    <!--a class="navbar-brand" href="#">Top navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" name="iniciar" type="submit">Search</button>
      </form>
    </div-->
  </div>
</nav>


<main class="container">
  <div class="bg-light p-5 rounded">
    <h1>Servicios Escolares</h1>
    <p class="lead">Deserción por carrera</p>
    <a class="btn btn-lg btn-primary" href="index.php" role="button">Agregar informaci&oacute;n</a>
  </div>
  
  <form action='graficas.php' method='POST' name='frmapa' enctype='multipart/form-data'>
      <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Periodo</label>
      <select name="periodo" style="width: 300px" class="form-select">
        <option value="E20">Enero - Abril 2020</option>
        <option value="M20">Mayo - Agosto 2020</option>
        <option value="S20">Septiembre - Diciember 2020</option>
        <option value="E21">Enero - Abril 2021</option>
        <option value="M21">Mayo - Agosto 2021</option>
        <option value="S21">Septiembre - Diciember 2021</option>
      </select>
    </div>
    <input type="submit" name="iniciar" value="Mostrar gr&aacute;fica" class="btn btn-primary">    

</form>
<br>
<section>

<?php
  echo '<div id="chartContainer" style="height: 600px; max-width: 1100px; margin: 0px auto;"></div>';
?>

</section>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<br><br>

                  <table class="table table-hover">
                    <tbody>
                    <thead>
                      <tr>
                        <th scope="col">Carrera</th>
                        <th scope="col">Desercion</th>
                        <th scope="col">Expectativa</th>
                        <th scope="col">Reprobación</th>
                        <th scope="col">Económicos</th>
                        <th scope="col">Personales</th>
                        <th scope="col">Distancia</th>
                        <th scope="col">Trabajo</th>
                        <th scope="col">Cambio UT</th>
                        <th scope="col">Cambio de carrera</th>
                        <th scope="col">Reglamento</th>
                        <th scope="col">Otras</th>
                      </tr>
                    </thead>
 <?php
//$query = sprintf("SELECT * FROM capacitaciondesarrollo where idEmpleado='$idE'", mysql_real_escape_string(""),mysql_real_escape_string(""));
$sql = "SELECT * FROM desercion WHERE periodo = '".$periodo."' ORDER BY carrera";
$result = $conn->query($sql);
                        //$result = mysql_query($query);
                        while($row = $result->fetch_assoc()) 
                        {
                            $carrera = $row['carrera'];
                            $dato0 = $row['dato0'];
                            $dato1 = $row['dato1'];
                            $dato2 = $row['dato2'];
                            $dato3 = $row['dato3'];
                            $dato4 = $row['dato4'];
                            $dato5 = $row['dato5'];
                            $dato6 = $row['dato6'];
                            $dato7 = $row['dato7'];
                            $dato8 = $row['dato8'];
                            $dato9 = $row['dato9'];
                            $dato10 = $row['dato10'];
                          
                            $sqlC = "SELECT carrera as carr FROM carreras WHERE idC = ".$carrera.'';
                            $resultC = $conn->query($sqlC);
                            $rowC = $resultC->fetch_assoc();
                            $carreraC = $rowC['carr'];
                                ?>
  <tr>
    <td><?php echo $carreraC; ?></td>
    <td><?php echo $dato0; ?></td>
    <td><?php echo $dato1; ?></td>
    <td><?php echo $dato2; ?></td>
    <td><?php echo $dato3; ?></td>
    <td><?php echo $dato4; ?></td>
    <td><?php echo $dato5; ?></td>
    <td><?php echo $dato6; ?></td>
    <td><?php echo $dato7; ?></td>
    <td><?php echo $dato8; ?></td>
    <td><?php echo $dato9; ?></td>
    <td><?php echo $dato10; ?></td>
  </tr>
                  <?php } ?>


                    </tbody>
                </table>


</main>
      
  </body>
</html>
