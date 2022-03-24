<?php
$conn = new mysqli("localhost", "root", "1234", "desercionpcausa")

  //$conn = new mysqli("localhost:3307", "root", "dasnivdra", "desercionpcausa");
  $conn->set_charset("utf8");

  $periodo = $_POST['periodo'];
  $carrera = $_POST['carrera'];
  $dato0 = $_POST['dato0'];      
  $dato1 = $_POST['dato1'];
  $dato2 = $_POST['dato2'];
  $dato3 = $_POST['dato3'];
  $dato4 = $_POST['dato4'];
  $dato5 = $_POST['dato5'];
  $dato6 = $_POST['dato6'];
  $dato7 = $_POST['dato7'];
  $dato8 = $_POST['dato8'];
  $dato9 = $_POST['dato9'];
  $dato10 = $_POST['dato10'];
  
  $sql = "INSERT INTO desercion (carrera, periodo, dato0, dato1, dato2, dato3, dato4, dato5, dato6, dato7, dato8, dato9, dato10) 
                         VALUES ('$carrera', '$periodo', '$dato0', '$dato1', '$dato2', '$dato3', '$dato4', '$dato5', '$dato6', '$dato7', '$dato8', '$dato9', '$dato10')";
  //echo $sql;
  $conn->query($sql);

  header( "refresh:1; url=index.php" );
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
    
<!--nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Top navbar</a>
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
    </div>
  </div>
</nav-->
<nav></nav>
<main class="container">
  <div class="bg-light p-5 rounded">
    <h1>Servicios Escolares</h1>
    <p class="lead">Deserci&oacute;n por carrera</p>
    <!--a class="btn btn-lg btn-primary" href="/docs/5.0/components/navbar/" role="button">View navbar docs &raquo;</a-->
  </div>
    <div class="alert alert-success" role="alert">
      Registro almacenado
    </div>
</main>
      
  </body>
</html>
