<?php
  $conn = new mysqli("localhost", "root", "1234", "desercionpcausa");
  //$conn = new mysqli("localhost:3307", "root", "dasnivdra", "desercionPcausa");
	$conn->set_charset("utf8");
    $sql1 = "SELECT fechaVenta, montoVenta FROM ventastemp order by fechaVenta";
	$result1 = $conn->query($sql1);
    $valoresY = array(); //montos
    $valoresX = array();//fechas

    while ($ver=mysqli_fetch_row($result1)) {
       $valoresY[]=$ver[1];
       $valoresX[]=$ver[0];
    }

    $datosX=json_encode($valoresX);
    $datosY=json_encode($valoresY);
?>

<div id = "cargaLineal"></div>

<script type =  "text/javascript">

function crearCadenaLineal(json) {
    var parsed = JSON.parse(json);
    var arr = [];
for (var X in parsed) {
    arr.push(parsed[X]);
    
}
    return arr;
}
</script>

<script type =  "text/javascript">

datosX = crearCadenaLineal('<?php echo $datosX ?>');
datosY = crearCadenaLineal('<?php echo $datosY ?>');
    var trace1 = {

x: datosX,

y: datosY,

type: 'scatter'

};
var trace2 = {

x: datosX,

y: datosY,

type: 'scatter'

};
var trace2 = {

x: datosX,

y: datosY,

type: 'scatter'

};

var data = [trace1, trace2, trace3];


Plotly.newPlot('cargaLineal', data);
Plotly.newPlot('cargaLineal', data);
</script>