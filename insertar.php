<?php
include("conexion.php");
$con=conectar();

$Nombre=$_POST['Nombre'];
$Apellidos=$_POST['Apellidos'];
$FNacimiento=$_POST['FNacimiento'];
$Correo=$_POST['Correo'];
$Pass=$_POST['Pass'];
$id=$_POST['id'];

$sql="INSERT INTO tabla VALUES ('$Nombre','$Apellidos','$FNacimiento','$Correo','$Pass','$id')";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: registro.php");
}else{

}
?>