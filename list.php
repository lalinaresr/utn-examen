<?php
    include_once 'connection.php';
    $rCompanies = mysqli_fetch_all(mysqli_query($db, 'SELECT * FROM empresas'), MYSQLI_ASSOC);
    mysqli_error($db);
    mysqli_close($db);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row my-3">
            <div class="col-12">
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
                <?php else: ?>
                    <div class="alert alert-info">No se encontraron datos de empresas para mostrar en estos momentos</div>
                <?php endif; ?>
                <a href="index.php" class="btn btn-primary">Agregar</a>
                <a href="delete.php" class="btn btn-danger">Eliminar</a>
            </div>
        </div>
    </div>
</body>

</html>