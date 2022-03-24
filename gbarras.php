<?php
  $conn = new mysqli("localhost", "root", "1234", "desercionpcausa");
  //$conn = new mysqli("localhost:3307", "root", "dasnivdra", "desercionPcausa");
	$conn->set_charset("utf8");
    $sql1 = "SELECT fechaVenta, montoVenta FROM ventastemp";
	$result1 = $conn->query($sql1);
    $valoresY=array();
    $valoresX=array();

    while ($ver=mysqli_fetch_row($result1)) {
       $valoresY[]=$ver[1];
       $valoresX[]=$ver[0];
    }

    $datosX=json_encode($valoresX);
    $datosY=json_encode($valoresY);
?>

<div id = "graficabarras"></div>
<script type =  "text/javascript">
function crearCadenaBarras(json) {
    var parsed = JSON.parse(json);
    var arr = [];
for (var x in parsed) {
    arr.push(parsed[X]);
    
}
    return arr;
}
</script>

<script type =  "text/javascript">
  
  datosX=crearCadenaBarras('<?php echo $datosX ?>');
  datosY=crearCadenaBarras('<?php echo $datosY ?>');
  
  
  
  
  
   var data = [

{

  x: datosX,

  y: datosY,

  type: 'bar'

}

];

Plotly.newPlot('graficabarras', data);

</script>