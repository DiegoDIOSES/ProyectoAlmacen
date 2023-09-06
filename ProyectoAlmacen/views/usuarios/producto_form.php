
<div class="container">
<div class="col-sm-6 offset-3 mt-5">
<form method="POST" id="Form"  enctype="multipart/form-data">

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="Ejecutivo" class="form-label">Ejecutivo *</label>
<input type="text"  id="Ejecutivo" name="Ejecutivo" class="form-control" required>
</div>
</div>

<div class="col-sm-6">
<div class="mb-3">
<label for="Serie" class="form-label">Serie *</label>
<input type="text"  id="Serie" name="Serie" class="form-control" required >
</div>
</div>
</div>

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="Estado" class="form-label">Estado *</label>
<input type="text"  id="Estado" name="Estado" class="form-control" required>
</div>
</div>

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="Cantidad" class="form-label">Cantidad *</label>
<input type="number"  id="Cantidad" name="Cantidad" class="form-control" required>
</div>
</div>

</div>
</div>
<div class="row">
    <div class="col-sm-12">
    <div class="mb-3">
<label for="Modelo" class="form-label">Modelo *</label>
<select name="Modelo" id="Modelo" class="form-control" required>
    <option value="publicidad">PUBLICIDAD</option>
    <option value="culqifull-kozen">CULQIFULL - KOZEN</option>
    <option value="culqifull-wizard">CULQIFULL - WIZARD</option>
    <option value="culqimini">CULQIMINI</option>
    <option value="superpos">SUPERPOS</option>
    <option value="equipo">EQUIPO</option>
  </select>
    </div>   
</div>
</div>

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="Recepción" class="form-label">Recepción *</label>
<input type="date"  id="Recepción" name="Recepción" class="form-control" required>
</div>
</div>

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="Entrega" class="form-label">Entrega *</label>
<input type="date"  id="Entrega" name="Entrega" class="form-control" required>
</div>
</div>

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="Venta" class="form-label">Venta *</label>
<input type="date"  id="Venta" name="Venta" class="form-control" required>
</div>
</div>

<!-- <div class="mb-3">
<div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <input type="file" class="form-control-file" name="foto" id="foto" required>
            </div>
        </div>
    </div> 
</div> -->

<div class="mb-3">
<a href="index.php"><button type = "button" id="btnSubmit" class="btn btn-success">Guardar</button>
</div>
</form>
</div>
</div>
