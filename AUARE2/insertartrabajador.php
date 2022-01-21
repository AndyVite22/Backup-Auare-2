<?php
include("conexion.php");
$con=conectar();


$id=$_POST['id'];
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$puesto=$_POST['puesto'];



$sql="INSERT INTO trabajador VALUES('$id','$nombre','$telefono','$correo','$puesto')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: trabajador.php");
    
}else {
}
?>