<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row my-3">
            <div class="col-12">
                <fieldset>
                    <legend>Eliminar empresa</legend>
                    <form action="confirm-delete.php" method="POST">
                        <p>La eliminación de un registro es una acción permanente que no podrá revertirse en el futuro</p>
                        <div class="form-group mb-3">
                            <label for="rfc">RFC:</label>
                            <input type="number" name="rfc" id="rfc" class="form-control" required autofocus autocomplete="off">
                        </div>
                        <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                        <a href="index.php" class="btn btn-primary">Agregar</a>
                        <a href="list.php" class="btn btn-info">Ver lista</a>
                    </form>
                </fieldset>
            </div>
        </div>
    </div>
</body>

</html>