<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catalogo</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Catalogo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Registrar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Listar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Contenedor principal -->
  <div class="container mt-4">
    <h3 class="mb-3">Lista De Productos De Mascotas</h3>

    <div class="table-responsive">
      <table class="table table-sm table-striped table-hover align-middle">
        <colgroup>
          <col width="5%">
          <col width="25%">
          <col width="20%">
          <col width="15%">
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
            <th>Stock</th>
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
                <td><?= $p['precio'] ?></td>
                <td><?= $p['stock'] ?></td>
                <td>
                  <a href="" class="btn btn-sm btn-danger">Eliminar</a>
                  <a href="" class="btn btn-sm btn-info">Editar</a>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php else : ?>
            <tr>
              <td colspan="7" class="text-center">No hay productos disponibles.</td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-JWrj0l5vQhAvX5+dW/9gZqNHg9O1eZprz0yHJ3bkpE3wtTfE2Cr7XkeUulG0fjH9" crossorigin="anonymous"></script>
</body>
</html>
