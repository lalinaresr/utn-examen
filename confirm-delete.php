<?php

include_once 'connection.php';

$rCompanies = mysqli_query($db, sprintf("SELECT * FROM empresas WHERE rfc = '%s'", $_POST['rfc']));

if (mysqli_num_rows($rCompanies) > 0) {
    $rCompany = mysqli_query($db, sprintf("DELETE FROM empresas WHERE rfc = '%s'", $_POST['rfc']));

    if ($rCompany) {
        $response = ['type' => 'success', 'text' => 'La empresa fue eliminada con éxito'];
    } else {
        $response = ['type' => 'danger', 'text' => 'Lamentamos informar que ha ocurrido un error interno, inténtelo nuevamente'];
    }
} else {
    $response = ['type' => 'warning', 'text' => 'La empresa que desea eliminar no existe en nuestros registros'];
}

mysqli_error($db);
mysqli_close($db);

$title = 'Respuesta';

include_once 'partials/header.php';
include_once 'partials/confirm-delete.php';
include_once 'partials/footer.php';
