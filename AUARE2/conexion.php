

<?php
function conectar(){
    $host="ftp.utdgrupoti.com";
    $user="u646610080_viteandy";
    $pass="Utd_2020";

    $bd="u646610080_viteandy";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>
