<?php
include("conexion.php");
$con=conectar();

$Nombre=$_POST['Nombre'];
$Apellidos=$_POST['Apellidos'];
$FNacimiento=$_POST['FNacimiento'];
$Correo=$_POST['Correo'];
$Pass=$_POST['Pass'];
$id=$_POST['id'];

$sql="UPDATE tabla SET Nombre='$Nombre',Apellidos='$Apellidos',FNacimiento='$FNacimiento',Correo='$Correo' WHERE id='$id'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: registro.php");
}else{

}
?>