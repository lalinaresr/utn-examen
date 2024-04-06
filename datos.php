<?php
$con=mysqli_connect("localhost","root","","base2")or die("Error en la BD");
mysqli_select_db($con,"base2")or die("Error en la BD");
mysqli_query($con,"insert into empresa(rfc,razonsocial,valorcomercial) value('$_REQUEST[rfc]','$_REQUEST[razonsocial]',$_REQUEST[valorcomercial])")or die("Problemas en la consulta");
mysqli_error($con);
mysqli_close($con);
echo "Datos registrados";
?>
<input type="button" value="INICIO" id="button" onClick="location.href='home.html'">
<input type="button" value="LISTA" id="button" onClick="location.href='Lista.php'">
<input type="button" value="ELIMINAR" id="button" onClick="location.href='Eliminar.php'">
