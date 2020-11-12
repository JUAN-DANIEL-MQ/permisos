<?php 
// Esta conexion lo cree para trabajar con mi equipo de forma local
 $host = 'localhost';
 $user = 'root';
 $pass= '';
 $bdat = 'bd_blog';
 $conn = new mysqli($host,$user,$pass,$bdat);

 if ($conn->connect_errno > 0) {
    die('error de conexion'.$conn->connect_error);
 }
 ?>