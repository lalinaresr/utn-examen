<?php
class Clientes{
private $reg;
private $rfc;
private $razonsocial;
private $valorcomercial;
private $con;
private $registro;

public function Inicializar($rfc,$razonsocial,$valorcomercial){
$this->rfc=rfc;
$this->razonsocial=razonsocial;
$this->valorcomercial=valorcomercial;

}
public function Conexion(){
$this->con=mysqli_connect("localhost","root","","base2") or die ("Problemas de conexion");
}

public function Datos(){
mysqli_query($this->con,"insert into empresa(rfc,razonsocial,valorcomercial) value('$_REQUEST[$this->rfc]','$_REQUEST[$this->razonsocial]',$_REQUEST[$this->valorcomercial])")or die("Problemas en la consulta");
mysqli_error($this->con);
mysqli_close($this->con);
echo "Datos registrados";
}

public function Elimina(){
$this->registro=mysqli_query($this->con,"select * from empresa where rfc='$_REQUEST[$this->rfc]'")or die("Error en la consulta");
if($this->reg=mysqli_fetch_array($this->registro)){
echo "Datos a Eliminar: ";
echo "<br>";
echo "RFC =".$this->reg['$this->rfc'];
echo "<br>";
echo "RAZON SOCIAL".$this->reg['$this->razonsocial'];
echo "<br>";
echo "VALOR COMERCIAL".$this->reg['$this->valorcomercial'];
echo "<br>";
mysqli_query($con,"delete from empresa where rfc='$_REQUEST[$this->rfc]'")or die("Error");
} else{
echo "No existe este rfc";
}
mysqli_error($this->con);

mysqli_close($this->con);

}
}
?>