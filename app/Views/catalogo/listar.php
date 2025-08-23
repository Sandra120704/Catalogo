<!-- Header -->
<? $header ?>
  <!-- Contenedor principal -->
  <div class="container mt-4">
    <h3 class="mb-3">Lista De Productos De Mascotas</h3>

    <div class="table-responsive">
      <table class="table table-sm table-striped table-hover align-middle">
        <colgroup>
          <col width="5%">
          <col width="20%">
          <col width="15%">
          <col width="15%">
          <col width="10%">
          <col width="15%">
          <col width="10%">
          <col width="10%">
        </colgroup>
        <thead class="table-dark">
          <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Categoria</th>
          <th>Marca</th>
          <th>Precio</th>
          <th>Expediente</th> 
          <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
        <?php if (!empty($productos)) : ?>
          <?php foreach ($productos as $p) : ?>
            <tr class="align-middle">
              <td><?= $p['id_producto'] ?></td>
              <td><?= $p['nombre'] ?></td>
              <td><?= $p['categoria'] ?></td>
              <td><?= $p['marca'] ?></td>
              <td>S/. <?= number_format($p['precio'], 2) ?></td>
              <td>
                <?php if (!empty($p['expediente'])): ?>
                  <a href="<?= base_url('uploads/' . $p['expediente']) ?>" target="_blank" class="btn btn-sm btn-outline-primary">
                    Ver Archivo
                  </a>
                <?php else: ?>
                  <span class="text-muted">No disponible</span>
                <?php endif; ?>
              </td>
              <td>
                <a href="" class="btn btn-sm btn-danger">Eliminar</a>
                <a href="" class="btn btn-sm btn-info">Editar</a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else : ?>
          <tr>
            <td colspan="8" class="text-center">No hay productos disponibles.</td>
          </tr>
        <?php endif; ?>
      </tbody>
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-JWrj0l5vQhAvX5+dW/9gZqNHg9O1eZprz0yHJ3bkpE3wtTfE2Cr7XkeUulG0fjH9" crossorigin="anonymous"></script>
</body>
</html>
