<?php if (mysqli_num_rows($data) > 0) : ?>
    <table class="table table-condensed table-bordered table-responsive table-hover">
        <thead>
            <tr>
                <th colspan="3" class="bg-info text-white text-center">Listado de empresas</th>
            </tr>
            <tr>
                <th>RFC</th>
                <th>Razón social</th>
                <th>Valor comercial</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach (mysqli_fetch_all($data, MYSQLI_ASSOC) as $key => $value) : ?>
                <tr>
                    <td><a href="delete.php?company=<?= $value['rfc']; ?>"><?= $value['rfc']; ?></a></td>
                    <td><?= $value['business_name']; ?></td>
                    <td><?= $value['commercial_value']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else : ?>
    <div class="alert alert-info">No se encontraron datos de empresas para mostrar en estos momentos</div>
<?php endif; ?>
<a href="index.php" class="btn btn-primary">Agregar</a>
<a href="delete.php" class="btn btn-danger">Eliminar</a>