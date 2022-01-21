
<?php
              
                


    include 'conexion.php';

   
       
        $nombre = $_POST['nombre'];
        $apellido=$_POST['apellido']; 
        $email=$_POST['email'];
        $telefono=$_POST['telefono'];
        $password=$_POST['password']; 
        $category=$_POST['category'];
        $priority=$_POST['priority'];
       
        if (!empty($nombre) || !empty($apellido) || !empty($username) || !empty($telefono) || !empty($password) || !empty($category) || !empty($priority)) {
            $servidor="localhost";
            $usuario="root";
            $clave="";
            $BaseDeDatos="auare";

            $conexion=mysqli_connect($servidor,$usuario, $clave, $BaseDeDatos);
            if(mysqli_connect_error()){
                      
                die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
            }
             else{
                $SELECT = "SELECT telefono from users where telefono = ? limit 1";
                $INSERT = "INSERT INTO users (nombre,apellido,email,telefono,password,category,priority)values(?,?,?,?,?,?,?)";
            
                $stmt = $conexion->prepare($SELECT);
                $stmt->bind_param("i", $telefono);
                $stmt->execute();
                $stmt->bind_result($telefono);
                $stmt->store_result();
                $rnum = $stmt->num_rows;
                if ($rnum == 0) {
                    $stmt -> close();
                    $stmt = $conexion->prepare($INSERT);
                    $stmt->bind_param("sssisss", $nombre,$apellido,$email,$telefono,$password,$category,$priority);
                    $stmt->execute();
                    echo "REGISTRO COMPLETADO.";
                    header('location:index.html');
                }
                else {
                    echo "NUMERO YA REGISTRADO";
                }
                 $stmt -> close();
                 $conexion -> close();
            }
        }
        else {
            echo "Favor de llenar todos los datos";
            die();
        }

   
    
 
?>