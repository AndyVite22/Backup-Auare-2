<?php

include("conexion.php");
$con=conectar();


$id=$_POST['id'];
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$puesto=$_POST['puesto'];


$sql="UPDATE trabajador SET  id='$id',nombre='$nombre',telefono='$telefono',correo='$correo',puesto='$puesto' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: trabajador.php");
    }
?>











