<!DOCTYPE html>
<html>
<head><title> Empresa </title></head>
<body>
<label> Ingrese los sig datos: </label>
<form name="frm" method="get" action="Eliminacion.php"><br>
RFC: <input type="text" name="rfc"><br>

<input type="submit" value="Eliminar" onClick="<?php include 'Registros.php'; $da=new Clientes();$da->Conexion();  $da->Elimina(); ?>"><br>

</form>
<input type="button" value="INICIO" id="button" onClick="location.href='home.html'">
<input type="button" value="LISTA" id="button" onClick="location.href='Lista.php'">
<input type="button" value="ELIMINAR" id="button" onClick="location.href='Eliminar.php'">
</body>
</html>