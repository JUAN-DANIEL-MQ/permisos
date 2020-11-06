<?php 
//$usuario = '';
$rol = '';
$sql='';
require_once('librerias/conexionBD.php');
$sql = "select * from permisos";
$result = $conn->query($sql);
$permisos = array();
while ($fila = $result->fetch_array()) {
	$permisos[] = $fila;
}

require_once('librerias/cabe.php');

?>
  <div class="container">
  	<div class="row">
  		<div class="col-12">
  			 <h1>Permisos</h1>
  			 <p>
  			 	<a href="edit_permiso.php" class="btn btn-success">Nuevo_Permiso</a>
  			 </p>
  			 <table class="table table-striped">
  			 	<tr>
  			 		<th>Id</th>
  			 		<th>Id_Usuario</th>
                    <th>Descripcion_Rol</th>
  			 		<th></th>
  			 		<th></th>
  			 	</tr>
                 

                <?php foreach ($permisos as $item): ?>
  			 	<tr>
  			 		<td><?= $item['id']?></td>
  			 		
  			 		<?php 
                  if (isset($item['id_usuario'])) {
					     $sql = "select * from usuarios where id = ".$item['id_usuario'];
					     $result = $conn->query($sql);
					     $fila = $result->fetch_array();
					      
					      $usuarios = $fila['usuarios'];;
                       }
  			 		 ?>
  			 		<td><?= $usuarios ?></td>
  			 		<?php 
                  if (isset($item['id_rol'])) {
					     $sql = "select * from roles where id = ".$item['id_rol'];
					     $result = $conn->query($sql);
					     $fila = $result->fetch_array();
					      
					      $roles = $fila['descripcion'];;
                       }
  			 		 ?>
                    <td><?= $roles ?></td>
  			 		<td>
  			 			<a href="edit_usuarios.php?id=<?= $item['id']?>" class="btn btn-primary">Editar</a>
  			 		</td>
  			 		<td>
  			 			<a href="elim_usuarios.php?id=<?= $item['id']?>" class="btn btn-danger">Eliminar</a>
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