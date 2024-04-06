<!DOCTYPE html>
<html>
<head><title> Empresa </title></head>
<body>
<label> Ingrese los sig datos: </label>
<form name="frm" method="get" action="datos.php"><br>
RFC: <input type="text" name="rfc"><br>
Razon Social: <input type="text" name="razonsocial"><br>
Valor Comercial: <input type="text" name="valorcomercial"><br>
<input type="submit" value="Enviar"><br>
</form>
<input type="button" value="INICIO" id="button" onClick="location.href='index.php'">
<input type="button" value="LISTA" id="button" onClick="location.href='Lista.php'">
<input type="button" value="ELIMINAR" id="button" onClick="location.href='Eliminar.php'">
</body>
</html>