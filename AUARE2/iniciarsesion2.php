<?php
    session_start();
    if(isset($_SESSION)){
        session_destroy();
    }
    $servidor="ftp.utdgrupoti.com";
    $usuario="u646610080_viteandy";
    $clave="Utd_2020";
    $BaseDeDatos="u646610080_viteandy";

    $conexion=mysqli_connect($servidor,$usuario, $clave, $BaseDeDatos);

    $mensaje = 'ninguno';
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $email = $_POST['email'];
        $password = $_POST['password'];
        

        $consulta=("SELECT id,email, password, tipo_usuario FROM users WHERE email ='$email' AND password='$password' ");
        $query=mysqli_query($conexion,$consulta) or die("Error al realizar la consulta");

        if($columna=mysqli_fetch_array($query)){
            $priv=$columna['tipo_usuario'];
        }

        if(mysqli_num_rows($query)>0){
            session_start();

            $_SESSION['email']=$email;
            $_SESSION['password']=$password;

            if($priv=="1"){
                //$_SESSION['priv']="admin";
                header("Location: admin.php");
            }else if($priv=="2"){
                //$_SESSION['priv']="estandar";
                header("Location: usuario.html");
            }

            $mensaje = 'correcto';

        } else {

            $mensaje = 'incorrecto';
        }
    }
?>

