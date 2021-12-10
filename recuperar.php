<?php 
    include("conexion.php");
    $con=conectar();

$Mail=$_GET['id'];

$sql="SELECT * FROM tabla WHERE Nombre='$Mail'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="..." type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />

    <title>&#129386 Recupera tu contraseña</title>
  </head>
<body>
	    <!--Navbar-->
		<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="img/logo.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
        Comida Facilita
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="formulario.html">Registro ✍</a>
            <a class="nav-link" href="#">Contacto ☎</a>
            <a class="nav-link" href="index.html">Home 🏠</a>
            <a class="nav-link" href="nosotros.html">Nosotros 🍽</a>
          </div>
        </div>
      </div>
    </nav>


  <!--Seccion-->
  <div class="container-fluid p-5 bg-primary text-white text-center bg-info bg-opacity-90">
    <img src="img/Imagen1.png" height="200px">
        <p class="fw-bolder text-white-50 fs-5">Cómete el mundo</p> 
  </div>

  <div class="container">
  <div class="row ">


    <div class="container text-center">
        <h1 class="display-1">Recuperar Contraseña</h1>
    </div>

    <div class="col-md-12">
<style>
    #centrar{
        margin-left: auto;
        margin-right: auto;
    }
</style>

<div class="container border-primary shadow p-3 mb-5 bg-body rounded" id="centrar" style="width: 300px" >
    <div class="row" id="centrar">
        <div class="col" id="centrar">
            
          <form action="" method="get" id="centrar">
          <div class="mb-3">
                          <h2>Recuperar Contraseña</h2>
                          <hr><br>
                          
                          <input type="email" class="form-control" id="Mail" name="busqueda" placeholder="Email">
                          <input type="text" class="form-control" id="Nombre" name="busqueda1" placeholder="Nombre">
          </div>
              <br>
              <hr>
            <a class="btn btn-success" href="index.php" >Volver</a>
            <input class="btn btn-success" type="submit" name="enviar" value="Recuperar">
          </form> 
      
        </div>
    </div>

        <?php

        if(isset($_GET['enviar'])){
            
            $busqueda=$_GET['busqueda'];
            $busqueda1=$_GET['busqueda1'];
            
            $consulta=$con->query("SELECT * FROM tabla WHERE Mail LIKE '$busqueda'");
            $consulta1=$con->query("SELECT * FROM tabla WHERE Nombre LIKE BINARY '$busqueda1'");

            if($row=$consulta->fetch_array() and $row=$consulta1->fetch_array()){
                echo "Su contraseña es: ";
                echo $row['Pass'];
            }
            else{
                echo "Error: Datos no corresponden a usuario registrado";
            }
        }
        ?>
</div>
    </div>

  </div>
</div>

  <!--Footer-->

<div class="container my-5">

  <footer class="bg-light text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a
          class="btn btn-primary btn-floating m-1"
          style="background-color: #3b5998;"
          href="#!"
          role="button"
          ><i class="fab fa-facebook-f"></i
        ></a>

        <!-- Twitter -->
        <a
          class="btn btn-primary btn-floating m-1"
          style="background-color: #55acee;"
          href="#!"
          role="button"
          ><i class="fab fa-twitter"></i
        ></a>

        <!-- Google -->
        <a
          class="btn btn-primary btn-floating m-1"
          style="background-color: #dd4b39;"
          href="#!"
          role="button"
          ><i class="fab fa-google"></i
        ></a>

        <!-- Instagram -->
        <a
          class="btn btn-primary btn-floating m-1"
          style="background-color: #ac2bac;"
          href="#!"
          role="button"
          ><i class="fab fa-instagram"></i
        ></a>

        <!-- Linkedin -->
        <a
          class="btn btn-primary btn-floating m-1"
          style="background-color: #0082ca;"
          href="#!"
          role="button"
          ><i class="fab fa-linkedin-in"></i
        ></a>
        <!-- Github -->
        <a
          class="btn btn-primary btn-floating m-1"
          style="background-color: #333333;"
          href="#!"
          role="button"
          ><i class="fab fa-github"></i
        ></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2021 Copyright:
      <a class="text-white" href="...">XAVA.lab</a>
    </div>
    <!-- Copyright -->
  </footer>
    
  </div>
  <!-- End of .container -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>