<?php
include("conexion.php");
$con=conectar();


$id=$_POST['id'];
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];




$sql="INSERT INTO propietario VALUES('$id','$nombre','$telefono','$correo')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: propietario.php");
    
}else {
}
?>