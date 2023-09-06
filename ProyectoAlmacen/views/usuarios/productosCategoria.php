<!DOCTYPE html>
<html lang="en">
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>
<body>

<div id= "content">
        <section>
        <div class="container mt-5">
<div class="row">
<div class="col-sm-12 mb-3">
<center><h1>ALMACEN</h1></center>
<a href="producto_agregar.php"><input  class="btn btn-primary" type="button" value="Agregar producto"></a>
</div>
<div class="col-sm-12">
<div class="table-responsive">


<table class="table table-striped table-hover">
<thead>

<tr>
<th>Codigo</th>
<th>Ejecutivo</th>
<th>Serie</th>
<th>Estado</th>
<th>Cantidad</th>
<th>Modelo</th>
<th>Recepción</th>
<th>Entrega</th>
<th>Venta</th>
<th>Progreso</th>
<th>Opciones</th>


</tr>

</thead>

<tbody>

<?php
$Modelo = $_GET['Modelo'];
extract($_POST);
$sql = "SELECT * FROM productos WHERE Modelo = '$Modelo'";
$productos = mysqli_query($conexion, $sql);
if($productos -> num_rows > 0){
foreach($productos as $key => $row ){




?>
<?php

if ($row['cantidad']) {
  $color = '#F78E8E';
  $clase = 'problema';
} else {
  $clase = 'correcto';
}
 
// ...

?>
<style>
      .problema{
        background-color: <?php echo $color?>;
        color: #000000;
    }
</style>

<tr>
<td <?php echo  'class="'.$row['Modelo'] .'"'; ?>><?php echo $row['id']; ?></td>
<td><?php echo $row['Serie']; ?></td>
<td><?php echo $row['Ejecutivo']; ?></td>
<td><?php echo $row['Estado']; ?></td>
<td <?php echo  'class="'.$clase .'"'; ?>><?php echo $row['Cantidad']; ?></td>
<td><?php echo $row['Modelo']; ?></td>
<td><?php echo $row['Recepción']; ?></td>
<td><?php echo $row['Entrega']; ?></td>
<td><?php echo $row['Venta']; ?></td>

<td>
  <a href="producto_editar.php?id=<?php echo $row['id']?>">
    <div">
      Editar
    </div>
  </a>
  <a>|</a>
  <a href="producto_eliminar.php?id=<?php echo $row['id']?>">
    <div">
    Eliminar
    </div>
  </a>
</td>
</tr>


<?php
}
}else{

    ?>
    <tr class="text-center">
    <td colspan="4">No existe registros</td>
    </tr>

    <?php
}?>
</tbody>

</table>
</div>
</div>
</div>
</div>
        </section>


        <section>
            <div class= "container">
                <div class= "row">
                    <div class= "col-lg-9">
            </div>
        </section>
    </div>
    <?php require '../../includes/_footer.php' ?>
</html>