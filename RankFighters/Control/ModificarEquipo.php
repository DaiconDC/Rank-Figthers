<?php 
include ('conex.php');
  #Creamoslas variables que almacenan la información que está 
  #actualmente en los input de las tablas
	$IDEquipo= $_POST['IdEquipo'];
 	$Nombre_E= $_POST['NombreEquipo']; 
	$ID_INST = $_POST['IdInstEducativa'];

#Ahora en vez de utilizar Insert, 
#utilizaremos UDPATE para actualizar los datos de la tabla
$Actualizar = $conexion -> query("UPDATE equipos SET 
nombreequipo='$Nombre_E',
idinsteducat='$ID_INST',
WHERE idequipo= '$IDEquipo'" );
if ($Actualizar) {
	echo "<script>
	alert('El registro ha sido Modificado');
	location.href='../Vista/App/Admon/ConsultaExE.php';
	</script>";
}else{
	echo "<script>
	alert('El registro no pudo ser Modificado');
	location.href='../Vista/App/Admon/ConsultaExE.php';
	</script>";
}

?>
