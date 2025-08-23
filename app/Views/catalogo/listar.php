<?= $header ?>

<div class="container mt-4">
    <h1>Lista de Productos</h1>
    <table class="table table-bordered">
        <tr>
            <th>Nombre</th>
            <th>Categoría</th>
            <th>Marca</th>
            <th>Precio</th>
            <th>Expediente</th>
            <th>Acciones</th>
        </tr>
        <?php foreach($productos as $producto): ?>
        <tr>
            <td><?= $producto['nombre'] ?></td>
            <td><?= $producto['categoria'] ?></td>
            <td><?= $producto['marca'] ?></td>
            <td><?= $producto['precio'] ?></td>
            <td>
                <?php if($producto['expediente']): ?>
                    <a href="<?= base_url('writable/uploads/'.$producto['expediente']) ?>" target="_blank">Ver archivo</a>
                <?php else: ?>
                    No adjunto
                <?php endif; ?>
            </td>
              <td>
                <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                <a href="#" class="btn btn-sm btn-info">Editar</a>
              </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

<?= $footer ?>
