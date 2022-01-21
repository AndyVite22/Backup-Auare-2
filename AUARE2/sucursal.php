<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM sucursal";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title> PAGINA SUCURSAL</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/main.css" />
        
    </head>
    <body>
    <br><br>
        
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
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertarsucursal.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="id" placeholder="id">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion">                                    
                                    <input type="phone" class="form-control mb-3" name="telefono" placeholder="Telefono">
                                    

                                    
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Direccion</th>
                                        <th>Telefono</th>                                        
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['direccion']?></th>                                                   
                                                <th><?php  echo $row['telefono']?></th>                                              
                                                
                                                <th><a href="actualizarsucursal.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="deletesucursal.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                            <footer id="footer">
					<ul class="icons">
						<li><a href="https://twitter.com/auaremx" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://www.facebook.com/auaremx/" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="https://www.youtube.com/channel/UCpPyg3ciG7EGPTOMFZ-sgIQ" class="icon brands fa-youtube"><span class="label">YouTube</span></a></li>
						<li><a href="https://www.pinterest.com.mx/auaremx/_saved/" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a></li>
						
					</ul>
					<ul class="copyright">
						<li>&copy; AUARE Arquitectura y Bienestar S.C</li>
					</ul>
				</footer>
                        </div>
                    </div>  
            </div>
    </body>
</html>