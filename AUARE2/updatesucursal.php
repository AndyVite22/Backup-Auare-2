<?php

include("conexion.php");
$con=conectar();


$id=$_POST['id'];
$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];


$sql="UPDATE sucursal SET  id='$id',nombre='$nombre',direccion='$direccion',telefono='$telefono' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: sucursal.php");
    }
?>