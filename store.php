<?php
include_once 'connection.php';
mysqli_query($db,"insert into empresas(rfc,business_name,commercial_value) value('$_REQUEST[rfc]','$_REQUEST[business_name]',$_REQUEST[commercial_value])")or die("Problemas en la consulta");
mysqli_error($db);
mysqli_close($db);
echo "Datos registrados";
?>
<input type="button" value="INICIO" id="button" onClick="location.href='index.php'">
<input type="button" value="LISTA" id="button" onClick="location.href='list.php'">
<input type="button" value="ELIMINAR" id="button" onClick="location.href='delete.php'">
