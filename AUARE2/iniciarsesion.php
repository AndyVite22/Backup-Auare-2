<?php
	
	$servidor="ftp.utdgrupoti.com";
    $usuario="u646610080_viteandy";
    $clave="Utd_2020";
    $BaseDeDatos="u646610080_viteandy";


    $conexion=mysqli_connect($servidor,$usuario, $clave, $BaseDeDatos);
	
	
	session_start();
	
	if($_POST){
		
		$email = $_POST['email'];
		$password = $_POST['password'];
		//$tipo_usuario=$_POST['tipo_usuario'];
		
		$sql = "SELECT id, email,password, tipo_usuario FROM users WHERE email='$email' /* && tipo_usuario='1' */";
		//echo $sql;
		$resultado = $conexion->query($sql);
		$num = $resultado->num_rows;		
		
		if($num>0){
			$row = $resultado->fetch_assoc();
			$password_bd = $row['password'];			
			$pass_c = ($password);			
			if($password_bd == $pass_c){
				
				$_SESSION['id'] = $row['id'];
				$_SESSION['email'] = $row['email'];
				/* $_SESSION['tipo_usuario'] = $row['tipo_usuario']; */
				

				header("Location: admin.php");
				
			} else {			
				
			echo "<script> alert('La contraseña es incorrecta')</script>";	
			echo "<a href='iniciarsesion.html'>Regresar</a><br>";		
			}			
			} else {				
			echo "<script> alert('El usuario ingresado no existe');";		
		}
		
		
		
	}
	

	
	
	
	
?>