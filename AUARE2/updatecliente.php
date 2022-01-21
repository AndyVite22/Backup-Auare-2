<?php

include("conexion.php");
$con=conectar();


$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$password=$_POST['password'];
$category=$_POST['category'];
$priority=$_POST['priority'];
$tipo_usuario=$_POST['tipo_usuario'];

$sql="UPDATE users SET  id='$id',nombre='$nombre',apellido='$apellido',email='$email',telefono='$telefono',password='$password',category='$category',priority='$priority',tipo_usuario='$tipo_usuario' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: clientes.php");
    }
?>