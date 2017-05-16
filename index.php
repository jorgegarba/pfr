<?php
require_once("funciones.php");
$xc = conectar();
?>

<h1>Mi Primera Consulta SELECT</h1>

<?php
$sql = "SELECT * FROM alumno";
$resultado = mysqli_query($xc,$sql);
while($fila = mysqli_fetch_array($resultado)){
	$nombre = $fila[1];
	$coreo = $fila[6];
	echo "Nombre: $nombre, Correo: $coreo <br>";
}
desconectar($xc);
?>