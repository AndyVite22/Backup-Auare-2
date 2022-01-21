<?php

include("conexion.php");
$con=conectar();


$id=$_POST['id'];
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];



$sql="UPDATE propietario SET  id='$id',nombre='$nombre',telefono='$telefono',correo='$correo' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: propietario.php");
    }
?>