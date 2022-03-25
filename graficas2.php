<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>grafica2</title>
    <script src="librerias/jquery-3.6.0.js"></script>
    <script src="librerias/plotly-2.9.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="panel panel-primary">
                <div class="panel panel-heading">graficas de prueba </div>
                <div class="panel panel-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div id="cargaLineal"></div>
                        </div>
                        <div class="col-sm-6">
                        <div id="cargaBarras"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p></p>
    <div class="container">
        <div class="row">
            <div class="panel panel-primary">
                <div class="panel panel-heading">graficas de prueba sistema de Escolares</div>
                <div class="panel panel-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div id="cargaLineal"></div>
                        </div>
                        <div class="col-sm-6">
                        <div id="cargaBarras"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script type= "text/javascript">
    $(document).ready(function() {
        $('#cargaLineal').load('glineal.php');
        $('#cargaBarras').load('gbarras.php');
    });
</script>