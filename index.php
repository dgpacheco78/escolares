<?php
  $conn = new mysqli("localhost", "root", "1234", "desercionpcausa");
  //$conn = new mysqli("localhost:3307", "root", "dasnivdra", "desercionPcausa");
	$conn->set_charset("utf8");
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
    <link href="navbar-top.css" rel="stylesheet">
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
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div-->
  </div>
</nav>


<main class="container">
  <div class="bg-light p-5 rounded">
    <h1>Servicios Escolares</h1>
    <p class="lead">Deserción por carrera</p>
    <a class="btn btn-lg btn-primary" href="graficas.php" role="button">Ver graficas</a>
  </div>
  
  <form action='guardar.php' method='POST' name='frmapa' enctype='multipart/form-data'>
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
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Programa Educativo</label>
      <select name="carrera" style="width: 600px" class="form-select">
        <?php
          $sql = "SELECT * FROM carreras";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()) {
              echo '<option value="'.$row['idC'].'">'.$row['carrera'].'</option>\n';
            }
        ?>
      </select>
    </div>
    
    <table class="table table-striped">
      <tbody>
        <tr>
          <td><label for="exampleFormControlInput1" class="form-label">Deserción sin causa conocida</label>
              <input name="dato0" class="form-control me-2" type="number" value="0" min="0" max="20" style="width: 70px">
          </td>
          <td><label for="exampleFormControlInput1" class="form-label">Incumplimiento de Expectativas</label>
              <input name="dato1" class="form-control me-2" type="number" value="0" min="0" max="20" style="width: 70px">
          </td>
          <td><label for="exampleFormControlInput1" class="form-label">Reprobación</label>
              <input name="dato2" class="form-control me-2" type="number" value="0" min="0" max="20" style="width: 70px">
          </td>
        </tr>
        <tr>
          <td><label for="exampleFormControlInput1" class="form-label">Problemas Económicos</label>
              <input name="dato3" class="form-control me-2" type="number" value="0" min="0" max="20" style="width: 70px">
          </td>
          <td><label for="exampleFormControlInput1" class="form-label">Motivos personales</label>
              <input name="dato4" class="form-control me-2" type="number" value="0" min="0" max="20" style="width: 70px">
          </td>
          <td><label for="exampleFormControlInput1" class="form-label">Distancia de la UT</label>
              <input name="dato5" class="form-control me-2" type="number" value="0" min="0" max="20" style="width: 70px">
          </td>
        </tr>
        <tr>
          <td><label for="exampleFormControlInput1" class="form-label">Problemas de trabajo</label>
              <input name="dato6" class="form-control me-2" type="number" value="0" min="0" max="20" style="width: 70px">
          </td>
          <td><label for="exampleFormControlInput1" class="form-label">Cambio de UT</label>
              <input name="dato7" class="form-control me-2" type="number" value="0" min="0" max="20" style="width: 70px">
          </td>
          <td><label for="exampleFormControlInput1" class="form-label">Cambio de carrera</label>
              <input name="dato8" class="form-control me-2" type="number" value="0" min="0" max="20" style="width: 70px">
          </td>
        </tr>
        <tr>
          <td><label for="exampleFormControlInput1" class="form-label">Faltas al reglamento escolar</label>
              <input name="dato9" class="form-control me-2" type="number" value="0" min="0" max="20" style="width: 70px">
          </td>
          <td><label for="exampleFormControlInput1" class="form-label">Otras causas</label>
              <input name="dato10" class="form-control me-2" type="number" value="0" min="0" max="20" style="width: 70px">
          </td>
          <td><label for="exampleFormControlInput1" class="form-label">Causa</label>
              <input name="dato10" class="form-control me-2" type="text" style="width: 470px">
          </td>
        </tr>
        <tr>
          <td>
          </td>
          <td>
          </td>
          <td>
          <label for="exampleFormControlInput1" class="form-label"></label>
            <input type="submit" value="Guardar" class="btn btn-primary">
          </td>
        </tr>
      </tbody>
    </table>
</form>


</main>
      
  </body>
</html>
