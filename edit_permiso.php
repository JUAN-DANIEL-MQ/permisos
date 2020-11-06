<?php 
 require_once('librerias/conexionBD.php');
 ///////
$sql = "select * from usuarios";
$result = $conn->query($sql);
$usuariosM = array();
while ($fila = $result->fetch_array()) {
  $usuariosM[] = $fila;
}
$sql = "select * from roles";
$result = $conn->query($sql);
$rolesM = array();
while ($fila = $result->fetch_array()) {
  $rolesM[] = $fila;
}
/////

  $id = 0;
  $id_usuario = '';
  $id_rol = '';
  $usuarios = '';
  $descripcion = '';
  
  if (isset($_GET['id'])) {
     $sql = "select * from permisos where id = ".$_GET['id'];
     $result = $conn->query($sql);
     $fila = $result->fetch_array();

      $id = $fila['id'];
      $id_usuario = $fila['id_usuario'];
      $id_rol = $fila['id_rol'];
  }

//var_dump($descripcion);
//var_dump($usuarios);

//die();
require_once('librerias/cabe.php');
 ?>
  <div class="container">
  	<div class="row">
  		<div class="col-12">
  			 <h1><?= ($id > 0)? 'Editar' : 'Nuevo' ?> Permiso </h1>
  			 <form action="proc_permiso.php" method="POST" autocomplete="off">
  <div class="form-group">
    <label for="">Id</label>
    <input type="text" name="id" value= "<?= $id?>" class="form-control" readonly >
  </div>  
<div class="form-group">
    <label for="">Usuario</label>
    <select name="id_usuario" class="form-control" >
      <option value="">--- SELECCIONE USUARIO ---</option>
      <?php foreach ($usuariosM as $item): ?>

        <option value="<?= $item['id']?>"> <?= $item['usuarios']?> </option>
      <?php endforeach ?>
    </select>
  </div>

  <div class="form-group">
    <label for="">Descripcion</label>
    <select name="id_descripcion" class="form-control" >
      <option value="">--- SELECCIONE ROL---</option>
      <?php foreach ($rolesM as $item): ?>

        <option value="<?= $item['id']?>"><?= $item['descripcion']?> </option>
      <?php endforeach ?>
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
  		</div>
  	</div>
  </div>
<?php 
require_once('librerias/pie.php');
 ?>