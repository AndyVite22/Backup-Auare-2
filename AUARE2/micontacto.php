<?php
 include("conexion.php");
 $con=conectar();
 if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $consulta=("SELECT id, email, password, tipo_usuario FROM users WHERE email ='$email' AND password='$password' ");
    $query=mysqli_query($conexion,$consulta) or die("Error al realizar la consulta");

    if($columna=mysqli_fetch_array($query)){
        $priv=$columna['tipo_usuario'];
    }

    if(mysqli_num_rows($query)>0){
        session_start();

        $_SESSION['email']=$email;
        $_SESSION['password']=$password;

        $mensaje = 'correcto';

    } else {

        $mensaje = 'incorrecto';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/main.css" />

    </head>
    <body>
        	<!-- Header -->
				<header id="header" class="alt">
                <h1><a href="admin.php"><img src="images/fabicon.png "width="110px" ></a></h1>
					<nav id="nav">
						<ul class="letra">
                        <li><a href="admin.php">Inicio</a></li>
							<li><a href="iniciarsesion.html" class="button">Cerrar Sesión</a></li>
						</ul>
						<h2></h2>
					</nav>
			</header>
            <br><br>
                <div class="container mt-5">
                    <form action="updatecliente.php" method="POST">
                    <?php
                    

                       $sql= "SELECT * FROM users WHERE id = '8'";
                       
                       $query=mysqli_query($con,$sql);

                       $row=mysqli_fetch_array($query);
                       ?>       
                                <input type="text" class="form-control mb-3" name="id" placeholder="Id" value="<?php echo $row['id'] ?>">
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre'] ?>">
                                <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido" value="<?php echo $row['apellido'] ?>">
                                <input type="email" class="form-control mb-3" name="email" placeholder="email" value="<?php echo $row['email'] ?>">
                                <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono" value="<?php echo $row['telefono'] ?>">
                                <input type="text" class="form-control mb-3" name="password" placeholder="Password" value="<?php echo $row['password'] ?>">
                                <input type="text" class="form-control mb-3" name="category" placeholder="Estado" value="<?php echo $row['category'] ?>">
                                <input type="text" class="form-control mb-3" name="priority" placeholder="Prioridad" value="<?php echo $row['priority'] ?>">
                                
                            
                    </form>
                    
                </div>
    </body>
</html>