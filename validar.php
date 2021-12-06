<?php
include('conexion.php');
$con=conectar();
$Mail=$_GET['Mail'];
$Pass=$_GET['Pass'];
session_start();
$_SESSION['Mail']=$Mail;



$consulta="SELECT*FROM tabla where Mail='$Mail' and Pass='$Pass'";
$resultado=mysqli_query($con,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("Location: bienvenidos.html");

}else{
    ?>
    <?php
    include("index.php");

  ?>
  <?php
}
