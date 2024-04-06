<?php
    include_once 'connection.php';
    extract($_POST);
    $rCompanies = mysqli_query($db, sprintf("SELECT * FROM empresas WHERE rfc = '%s' AND business_name = '%s' AND commercial_value = '%d'", $rfc, $business_name, $commercial_value));
    if (mysqli_num_rows($rCompanies) == 0) {
        $rCompany = mysqli_query($db, sprintf("INSERT INTO empresas VALUES(NULL, '%s', '%s', '%d')", $rfc, $business_name, $commercial_value));

        if ($rCompany) {
            $response = ['type' => 'success', 'text' => 'La empresa que fue insertada con éxito'];
        } else {
            $response = ['type' => 'danger', 'text' => 'Lamentamos informar que ha ocurrido un error interno, inténtelo nuevamente'];
        }
    } else {
        $response = ['type' => 'warning', 'text' => 'La empresa que desea agregar ya existe en nuestros registros'];
    }
    mysqli_error($db);
    mysqli_close($db);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row my-3">
            <div class="col-12">
                <div class="alert alert-<?= $response['type']; ?>"><?= $response['text']; ?></div>
                <a href="index.php" class="btn btn-primary">Agregar</a>
                <a href="list.php" class="btn btn-info">Ver lista</a>
                <a href="delete.php" class="btn btn-danger">Eliminar</a>
            </div>
        </div>
    </div>
</body>

</html>
