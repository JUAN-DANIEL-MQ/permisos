<?php 
require_once('librerias/conexionBD.php');
$sql = "select * from roles";
$result = $conn->query($sql);
$roles = array();
while ($fila = $result->fetch_array()) {
	$roles[] = $fila;
}
require_once('librerias/cabe.php');

?>
  <div class="container">
  	<div class="row">
  		<div class="col-12">
  			 <h1>Roles de Usuarios</h1>
  			 <p>
  			 	<a href="edit_roles.php" class="btn btn-success">Nuevo</a>
  			 </p>
  			 <table class="table table-striped">
  			 	<tr>
  			 		<th>Id</th>
  			 		<th>Descripcion</th>
  			 		<th></th>
  			 		<th></th>
  			 	</tr>
  			 	<?php foreach ($roles as $item): ?>
  			 	<tr>
  			 		<td><?= $item['id']?></td>
  			 		<td><?= $item['descripcion']?></td>
  			 		<td>
  			 			<a href="edit_roles.php?id=<?= $item['id']?>" class="btn btn-primary">Editar</a>
  			 		</td>
  			 		<td>
  			 			<a href="elim_roles.php?id=<?= $item['id']?>" class="btn btn-danger">Eliminar</a>
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