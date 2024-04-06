<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row my-3">
            <div class="col-12">
                <fieldset>
                    <legend>Agregar empresa</legend>
                    <form action="store.php" method="POST">
                        <div class="form-group mb-3">
                            <label for="rfc">RFC:</label>
                            <input type="number" name="rfc" id="rfc" class="form-control" required autofocus autocomplete="off">
                        </div>
                        <div class="form-group mb-3">
                            <label for="business_name">Razón social:</label>
                            <input type="text" name="business_name" id="business_name" class="form-control" required autocomplete="off">
                        </div>
                        <div class="form-group mb-3">
                            <label for="commercial_value">Valor comercial:</label>
                            <input type="number" name="commercial_value" id="commercial_value" class="form-control" required autocomplete="off">
                        </div>
                        <button type="submit" class="btn btn-outline-primary">Guardar</button>
                        <a href="list.php" class="btn btn-info">Ver lista</a>
                        <a href="delete.php" class="btn btn-danger">Eliminar</a>
                    </form>
                </fieldset>
            </div>
        </div>
    </div>
</body>

</html>