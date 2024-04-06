<!DOCTYPE html>
<html>
<head><title> Empresa </title></head>
<body>
<label> Ingrese los sig datos: </label>
<form name="frm" method="POST" action="store.php"><br>
RFC: <input type="text" name="rfc"><br>
Razon Social: <input type="text" name="business_name"><br>
Valor Comercial: <input type="text" name="commercial_value"><br>
<input type="submit" value="Enviar"><br>
</form>
<input type="button" value="INICIO" id="button" onClick="location.href='index.php'">
<input type="button" value="LISTA" id="button" onClick="location.href='list.php'">
<input type="button" value="ELIMINAR" id="button" onClick="location.href='delete.php'">
</body>
</html>