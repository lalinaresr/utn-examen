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

$title = 'Respuesta';

include_once 'partials/header.php';
include_once 'partials/store.php';
include_once 'partials/footer.php';
