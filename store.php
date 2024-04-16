<?php
require_once 'connection.php';

extract($_POST);

$data = mysqli_query($db, sprintf("SELECT * FROM empresas WHERE rfc = '%s' AND business_name = '%s' AND commercial_value = '%d' LIMIT 1", $rfc, $business_name, $commercial_value));

if (mysqli_num_rows($data) == 0) {
    $result = mysqli_query($db, sprintf("INSERT INTO empresas VALUES(NULL, '%s', '%s', '%d')", $rfc, $business_name, $commercial_value));

    if ($result) {
        $response = ['type' => 'success', 'text' => 'La empresa que fue insertada con éxito'];
    } else {
        $response = ['type' => 'danger', 'text' => 'Lamentamos informar que ha ocurrido un error interno, inténtelo nuevamente'];
    }
} else {
    $response = ['type' => 'warning', 'text' => 'La empresa que desea agregar ya existe en nuestros registros'];
}

mysqli_error($db);
mysqli_close($db);

$title = 'Respuesta | Guardar';

include_once 'partials/header.php';
include_once 'partials/store.php';
include_once 'partials/footer.php';
