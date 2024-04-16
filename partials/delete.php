<fieldset>
    <legend>Eliminar empresa</legend>
    <form action="confirm-delete.php" method="POST">
        <p>La eliminación de un registro es una acción permanente que no podrá revertirse en el futuro</p>
        <div class="form-group mb-3">
            <label for="rfc">RFC:</label>
            <input type="number" name="rfc" id="rfc" value="<?= $_GET['company'] ?? ''; ?>" class="form-control" required autofocus autocomplete="off">
        </div>
        <button type="submit" class="btn btn-outline-danger">Eliminar</button>
        <a href="index.php" class="btn btn-primary">Agregar</a>
        <a href="list.php" class="btn btn-info">Ver lista</a>
    </form>
</fieldset>