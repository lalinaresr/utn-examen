<?php
require_once 'connection.php';

$data = mysqli_query($db, 'SELECT * FROM empresas ORDER BY id DESC');

mysqli_error($db);
mysqli_close($db);

$title = 'Empresas - Listado';

include_once 'partials/header.php';
include_once 'partials/list.php';
include_once 'partials/footer.php';
