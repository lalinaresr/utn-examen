<?php
include_once 'connection.php';
$registro=mysqli_query($db,"select * from empresas")or die("Error de la BD");
echo "<table border double>";
echo "<tr><th>RFC</th><th>RAZON SOCIAL</th><th>VALOR COMERCIAL</th><tr>";
while($reg=mysqli_fetch_array($registro)){
echo "<tr>";
echo "<td>";
echo $reg['rfc'];
echo "</td>";
echo "<td>";
echo $reg['business_name'];
echo "</td>";
echo "<td>";
echo $reg['commercial_value'];
echo "</td>";
echo" </tr>";
}
echo "</table>";
mysqli_error($db);
mysqli_close($db);
?>
<input type="button" value="INICIO" id="button" onClick="location.href='index.php'">
<input type="button" value="LISTA" id="button" onClick="location.href='list.php'">
<input type="button" value="ELIMINAR" id="button" onClick="location.href='delete.php'">