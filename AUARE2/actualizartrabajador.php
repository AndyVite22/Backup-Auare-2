<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM trabajador WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
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
                    <form action="updatetrabajador.php" method="POST">
                    
                                
                                <input type="text" class="form-control mb-3" name="id" placeholder="Id" value="<?php echo $row['id']  ?>">
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono" value="<?php echo $row['telefono']  ?>">                                
                                <input type="email" class="form-control mb-3" name="correo" placeholder="Correo" value="<?php echo $row['correo']  ?>">
                                <input type="text" class="form-control mb-3" name="puesto" placeholder="Puesto" value="<?php echo $row['puesto']  ?>">                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>