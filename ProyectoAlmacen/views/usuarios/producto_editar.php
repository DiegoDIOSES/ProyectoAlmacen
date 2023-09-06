<?php

$id = $_GET['id'];
require_once ("../../includes/_db.php");
$consulta = "SELECT * FROM productos WHERE id = $id";
$resultado = mysqli_query($conexion, $consulta);
$productos = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="en">
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>
<body>

<div class="container">
<div class="col-sm-6 offset-3 mt-5">
<form action="../../includes/_functions.php" method="POST"  enctype="multipart/form-data" >

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="Ejecutivo" class="form-label">Ejecutivo *</label>
<input type="text"  id="Ejecutivo" name="Ejecutivo" value="<?php echo $productos ['Ejecutivo']; ?>" class="form-control" required>
</div>
</div>

<div class="col-sm-6">
<div class="mb-3">
<label for="Serie" class="form-label">Serie *</label>
<input type="text"  id="Serie" name="Serie" value="<?php echo $productos ['Serie']; ?>" class="form-control" required>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="Estado" class="form-label">Estado *</label>
<input type="text"  id="Estado" name="Estado" value="<?php echo $productos ['Estado']; ?>"  class="form-control" required>
</div>
</div>

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="Cantidad" class="form-label">Cantidad *</label>
<input type="text"  id="Cantidad" name="Cantidad"  value="<?php echo $productos ['Cantidad']; ?>" class="form-control" required>
</div>
</div>

</div>
</div>
<div class="row">
    <div class="col-sm-12">
    <div class="mb-3">
<label for="Modelo" class="form-label">Modelo *</label>
<select name="Modelo" id="Modelo" class="form-control" required>
    <option value="culqifull-kozen">CULQIFULL - KOZEN</option>
    <option value="culqifull-wizard">CULQIFULL - WIZARD</option>
    <option value="culqimini">CULQIMINI</option>
    <option value="superpos">SUPERPOS</option>
    <option value="publicidad">PUBLICIDAD</option>
    <option value="equipo">EQUIPO</option>
  </select>
    </div>   
</div>
</div>

<div class="row"> 
<div class="col-sm-6">
<div class="mb-3">
<label for="Recepción" class="form-label">Recepción *</label>
<input type="date"  id="Recepción" name="Recepción"  value="<?php echo $productos ['Recepción']; ?>" class="form-control">
</div>
</div>

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="Entrega" class="form-label">Entrega *</label>
<input type="date"  id="Entrega" name="Entrega"  value="<?php echo $productos ['Entrega']; ?>" class="form-control">
</div>
</div>

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="Venta" class="form-label">Venta *</label>
<input type="date"  id="Venta" name="Venta"  value="<?php echo $productos ['Venta']; ?>" class="form-control">
</div>
</div>

</div>
</div>
<div class="row">
    <div class="col-sm-12">
    <div class="mb-3">
<label for="Progreso" class="form-label">Progreso *</label>
<select name="Progreso" id="Progreso" class="form-control" required>
    <option value="activo">ACTIVO</option>
    <option value="finalizado">FINALIZADO</option>
  </select>
    </div>   
</div>
</div>

<div class="mb-3">
<input type="hidden" name="accion" value="editar_producto">
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-success">Guardar</button>
</div>
</form>
</div>
</div>
</body>
<?php require '../../includes/_footer.php' ?>
</html>