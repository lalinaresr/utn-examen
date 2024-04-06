<?php
include_once 'connection.php';
$registro=mysqli_query($db,"select * from empresas where rfc='$_REQUEST[rfc]'")or die("Error en la consulta");
if($reg=mysqli_fetch_array($registro)){
echo "Datos a Eliminar: ";
echo "<br>";
echo "RFC =".$reg['rfc'];
echo "<br>";
echo "RAZON SOCIAL".$reg['business_name'];
echo "<br>";
echo "VALOR COMERCIAL".$reg['commercial_value'];
echo "<br>";
mysqli_query($db,"delete from empresas where rfc='$_REQUEST[rfc]'")or die("Error");
} else{
echo "No existe este rfc";
}
mysqli_error($db);
mysqli_close($db);
?>
<input type="button" value="INICIO" id="button" onClick="location.href='index.php'">
<input type="button" value="LISTA" id="button" onClick="location.href='list.php'">
<input type="button" value="ELIMINAR" id="button" onClick="location.href='delete.php'">