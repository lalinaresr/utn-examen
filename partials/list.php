<?php if (count($rCompanies) > 0) : ?>
    <table class="table table-condensed table-bordered table-responsive table-dark table-hover">
        <thead>
            <tr>
                <th colspan="3" class="bg-secondary text-white text-center">Listado de empresas</th>
            </tr>
            <tr>
                <th>RFC</th>
                <th>Razón social</th>
                <th>Valor comercial</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rCompanies as $key => $company) : ?>
                <tr>
                    <td><?= $company['rfc']; ?></td>
                    <td><?= $company['business_name']; ?></td>
                    <td><?= $company['commercial_value']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else : ?>
    <div class="alert alert-info">No se encontraron datos de empresas para mostrar en estos momentos</div>
<?php endif; ?>
<a href="index.php" class="btn btn-primary">Agregar</a>
<a href="delete.php" class="btn btn-danger">Eliminar</a>