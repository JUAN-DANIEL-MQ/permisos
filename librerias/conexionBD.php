<?php 
 $host = 'sql205.epizy.com';
 $user = 'epiz_27088032';
 $pass= 'pBBIRqyecsCZisS';
 $bdat = 'epiz_27088032_bd_blog';
 $conn = new mysqli($host,$user,$pass,$bdat);

 if ($conn->connect_errno > 0) {
    die('error de conexion'.$conn->connect_error);
 }
 ?>
