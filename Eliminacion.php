<?php
$con=mysqli_connect("localhost","root","","base2")or die("Error en la BD");
$registro=mysqli_query($con,"select * from empresa where rfc='$_REQUEST[rfc]'")or die("Error en la consulta");
if($reg=mysqli_fetch_array($registro)){
echo "Datos a Eliminar: ";
echo "<br>";
echo "RFC =".$reg['rfc'];
echo "<br>";
echo "RAZON SOCIAL".$reg['razonsocial'];
echo "<br>";
echo "VALOR COMERCIAL".$reg['valorcomercial'];
echo "<br>";
mysqli_query($con,"delete from empresa where rfc='$_REQUEST[rfc]'")or die("Error");
} else{
echo "No existe este rfc";
}
mysqli_error($con);
mysqli_close($con);
?>
<input type="button" value="INICIO" id="button" onClick="location.href='home.html'">
<input type="button" value="LISTA" id="button" onClick="location.href='Lista.php'">
<input type="button" value="ELIMINAR" id="button" onClick="location.href='Eliminar.php'">