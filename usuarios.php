<?php 
require_once('librerias/conexionBD.php');
$sql = "select * from usuarios";
$result = $conn->query($sql);
$usuarios = array();
while ($fila = $result->fetch_array()) {
	$usuarios[] = $fila;
}
require_once('librerias/cabe.php');

?>
  <div class="container">
  	<div class="row">
  		<div class="col-12">
  			 <h1>Usuarios</h1>
  			 <p>
  			 	<a href="edit_usuarios.php" class="btn btn-success">Nuevo</a>
  			 </p>
  			 <table class="table table-striped">
  			 	<tr>
  			 		<th>Id</th>
  			 		<th>Usuario</th>
            <th>Correo</th>
            <th>Password</th>
  			 		<th></th>
  			 		<th></th>
  			 	</tr>
  			 	<?php foreach ($usuarios as $item): ?>
  			 	<tr>
  			 		<td><?= $item['id']?></td>
  			 		<td><?= $item['usuarios']?></td>
            <td><?= $item['correo']?></td>
            <td readonly><?= $item['clave']?></td>
  			 		<td>
  			 			<a href="edit_usuarios.php?id=<?= $item['id']?>" class="btn btn-primary">Editar</a>
  			 		</td>
  			 		<td>
  			 			<a href="usu_eliminar.php?id=<?= $item['id']?>" class="btn btn-danger">Eliminar</a>
  			 		</td>
  			 	</tr>
  			 	<?php endforeach ?>
  			 	
  			 </table>
  		</div>
  	</div>
  </div>
<?php 
require_once('librerias/pie.php');
 ?>