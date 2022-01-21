<?php
include("conexion.php");
$con=conectar();


$id=$_POST['id'];
$nombre=$_POST['nombre'];
$responsable=$_POST['responsable'];
$categoria=$_POST['categoria'];




$sql="INSERT INTO promotor VALUES('$id','$nombre','$responsable','$categoria')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: promotor.php");
    
}else {
}
?>