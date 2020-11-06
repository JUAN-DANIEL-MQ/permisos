<?php 
 require_once('librerias/conexionBD.php');

  $id = 0;
  $usuarios = '';
  $correo = '';
  $password = '';
  
  if (isset($_GET['id'])) {
     $sql = "select * from usuarios where id = ".$_GET['id'];
     $result = $conn->query($sql);
     $fila = $result->fetch_array();
      
      $id = $fila['id'];
      $usuarios = $fila['usuarios'];
      $correo = $fila['correo'];
      $password = $fila['password'];
  }

require_once('librerias/cabe.php');
 ?>
  <div class="container">
  	<div class="row">
  		<div class="col-12">
  			 <h1><?= ($id > 0)? 'Editar' : 'Nuevo' ?> Usuario </h1>
  			 <form action="usu_procesa.php" method="POST" autocomplete="off">
  <div class="form-group">
    <label for="">Id</label>
    <input type="text" name="id" value= "<?= $id?>" class="form-control" readonly >
  </div>  
  <div class="form-group">
    <label for="">Usuario</label>
    <input type="text" name="usuarios" value="<?= $usuarios?>" class="form-control">
  </div>
  <div class="form-group">
    <label for="">Correo</label>
    <input type="text" name="correo" value="<?= $correo ?>" class="form-control">
  </div>
  <div class="form-group">
    <label for="">Password</label>
    <input type="password" name="password" value="<?= $password ?>" class="form-control">
  </div>

  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
  		</div>
  	</div>
  </div>
<?php 
require_once('librerias/pie.php');
 ?>