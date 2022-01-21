<?php
include("conexion.php");
$con=conectar();


$id=$_POST['id'];
$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];



$sql="INSERT INTO sucursal VALUES('$id','$nombre','$direccion','$telefono')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: sucursal.php");
    
}else {
}
?>