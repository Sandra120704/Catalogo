<?= $header ?>

<div class="container mt-4">
  <h3 class="mb-3">Editar Producto</h3>

  <form action="<?= base_url('catalogo/guardar') ?>" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre" required>
    </div>

    <div class="mb-3">
      <label for="categoria" class="form-label">Categoría</label>
      <input type="text" class="form-control" id="categoria" name="categoria" required>
    </div>

    <div class="mb-3">
      <label for="marca" class="form-label">Marca</label>
      <input type="text" class="form-control" id="marca" name="marca">
    </div>

    <div class="mb-3">
      <label for="precio" class="form-label">Precio</label>
      <input type="number" step="0.01" class="form-control" id="precio" name="precio" required>
    </div>

    <div class="mb-3">
      <label for="expediente" class="form-label">Expediente (archivo)</label>
      <input type="file" class="form-control" id="expediente" name="expediente">
    </div>

    <button type="submit" class="btn btn-success">Guardar</button>
    <a href="<?= base_url('catalogo/listar') ?>" class="btn btn-secondary">Volver</a>
  </form>
</div>

<?= $footer ?>
