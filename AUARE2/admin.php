<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM users";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Acciones </title>
    <link rel="stylesheet" href="assets/css/estilo2.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
    
    <div class="container">
       
        <div class="card">
            <img src="images/img1.jpg">
            <li><input type="button" onclick="location.href='sucursal.php'" value="Nuevo Sucursal" /></li>

        </div>
        
        <div class="card">
        <img src="images/img2.jpg">
            <li><input type="button" onclick="location.href='trabajador.php'" value="Nuevo Trabajador" /></li>

        </div>
        
        <div class="card">
        <img src="images/img3.jpg">
            <li><input type="button" onclick="location.href='propietario.php'" value="Nuevo Propietario" /></li>

        </div>
        <div class="card">
        <img src="images/img4.jpg">
            <li><input type="button" onclick="location.href='promotor.php'" value="Nuevo Promotor" /></li>

        </div>
        
        <div class="card">
        <img src="images/img5.jpg">
            <li><input type="button" onclick="location.href='clientes.php'" value="Nuevo Cliente" /></li>

        </div>
        
      
    </div>
    
</body>
</html>