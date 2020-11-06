<?php 
require_once('librerias/conexionBD.php');
$id = $_POST['id'];
$usuarios = $_POST['usuarios'];
$correo = $_POST['correo'];
$clave = md5($_POST['password']);
//

if ($id == 0) {
	$sql = "insert into usuarios (usuarios,correo,clave) 
        values('$usuarios','$correo','$clave')";
}
else{
$sql = "update usuarios set usuarios = '$usuarios',correo = '$correo',
                               clave = '$clave' where id = $id";
}

$result = $conn->query($sql);
if (!$result) die('Error al insertar');
header('Location: usuarios.php');
 ?>
