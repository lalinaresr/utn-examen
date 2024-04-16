<fieldset>
    <legend>Agregar empresa</legend>
    <form action="store.php" method="POST">
        <div class="form-group mb-3">
            <label for="rfc">RFC:</label>
            <input type="number" name="rfc" id="rfc" class="form-control" required step="1" autofocus autocomplete="off">
        </div>
        <div class="form-group mb-3">
            <label for="business_name">Razón social:</label>
            <input type="text" name="business_name" id="business_name" class="form-control" required autocomplete="off">
        </div>
        <div class="form-group mb-3">
            <label for="commercial_value">Valor comercial:</label>
            <input type="number" name="commercial_value" id="commercial_value" class="form-control" required step="1" autocomplete="off">
        </div>
        <button type="submit" class="btn btn-outline-primary">Guardar</button>
        <a href="list.php" class="btn btn-info">Ver lista</a>
        <a href="delete.php" class="btn btn-danger">Eliminar</a>
    </form>
</fieldset>