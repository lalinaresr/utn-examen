<?php
$con=mysqli_connect("localhost","root","","base2")or die("Error de la BD");
$registro=mysqli_query($con,"select * from empresa")or die("Error de la BD");
echo "<table border double>";
echo "<tr><th>RFC</th><th>RAZON SOCIAL</th><th>VALOR COMERCIAL</th><tr>";
while($reg=mysqli_fetch_array($registro)){
echo "<tr>";
echo "<td>";
echo $reg['rfc'];
echo "</td>";
echo "<td>";
echo $reg['razonsocial'];
echo "</td>";
echo "<td>";
echo $reg['valorcomercial'];
echo "</td>";
echo" </tr>";
}
echo "</table>";
mysqli_error($con);
mysqli_close($con);
?>
<input type="button" value="INICIO" id="button" onClick="location.href='home.html'">
<input type="button" value="LISTA" id="button" onClick="location.href='Lista.php'">
<input type="button" value="ELIMINAR" id="button" onClick="location.href='Eliminar.php'">