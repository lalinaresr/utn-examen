<!DOCTYPE html>
<html>
<head><title> Empresa </title></head>
<body>
<label> Ingrese los sig datos: </label>
<form name="frm" method="POST" action="confirm-delete.php"><br>
RFC: <input type="text" name="rfc"><br>

<input type="submit" value="Eliminar"><br>

</form>
<input type="button" value="INICIO" id="button" onClick="location.href='index.php'">
<input type="button" value="LISTA" id="button" onClick="location.href='list.php'">
<input type="button" value="ELIMINAR" id="button" onClick="location.href='delete.php'">
</body>
</html>