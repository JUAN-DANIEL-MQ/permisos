<?php 
 require_once('librerias/conexionBD.php');

  $id = 0;
  $descripcion = '';
  
  if (isset($_GET['id'])) {
     $sql = "select * from roles where id = ".$_GET['id'];
     $result = $conn->query($sql);
     $fila = $result->fetch_array();
      
      $id = $fila['id'];
      $descripcion = $fila['descripcion'];
  }

require_once('librerias/cabe.php');
 ?>
  <div class="container">
  	<div class="row">
  		<div class="col-12">
  			 <h1><?= ($id > 0)? 'Editar' : 'Nuevo' ?> Rol </h1>
  			 <form action="rol_procesa.php" method="POST" autocomplete="off">
  <div class="form-group">
    <label for="">Id</label>
    <input type="text" name="id" value= "<?= $id?>" class="form-control" readonly >
  </div>  
  <div class="form-group">
    <label for="">Rol_Usuario</label>
    <input type="text" name="descripcion" value="<?= $descripcion?>" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
  		</div>
  	</div>
  </div>
<?php 
require_once('librerias/pie.php');
 ?>