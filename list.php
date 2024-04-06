<?php

include_once 'connection.php';

$rCompanies = mysqli_fetch_all(mysqli_query($db, 'SELECT * FROM empresas'), MYSQLI_ASSOC);

mysqli_error($db);
mysqli_close($db);

$title = 'Listado';

include_once 'partials/header.php';
include_once 'partials/list.php';
include_once 'partials/footer.php';
