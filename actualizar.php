<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM tabla WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    </head>
    <body>
        <div class="container mt-5">
            <form action="update.php" method="POST">
            
                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre']  ?>">
                <input type="text" class="form-control mb-3" name="Apellidos" placeholder="Apellidos" value="<?php echo $row['Apellidos']  ?>">
                <input type="date" class="form-control mb-3" name="FNacimiento" placeholder="Fecha de Nacimiento" value="<?php echo $row['FNacimiento']  ?>">
                <input type="email" class="form-control mb-3" name="Correo" placeholder="Correo" value="<?php echo $row['Correo']   ?>">

                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
            </form>
            
        </div>
    </body>
</html>