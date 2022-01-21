<?php
include("conexion.php");
$con=conectar();


//$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$password=$_POST['password'];
$category=$_POST['category'];
$priority=$_POST['priority'];
$tipo_usuario=$_POST['tipo_usuario'];


$sql="INSERT INTO users VALUES('$id','$nombre','$apellido','$email','$telefono','$password','$category','$priority','$tipo_usuario')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: clientes.php");
    
}else {
}
?>