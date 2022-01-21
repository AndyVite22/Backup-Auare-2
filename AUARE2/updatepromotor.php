<?php

include("conexion.php");
$con=conectar();


$id=$_POST['id'];
$nombre=$_POST['nombre'];
$responsable=$_POST['responsable'];
$categoria=$_POST['categoria'];



$sql="UPDATE promotor SET  id='$id',nombre='$nombre',responsable='$responsable',categoria='$categoria' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: promotor.php");
    }
?>