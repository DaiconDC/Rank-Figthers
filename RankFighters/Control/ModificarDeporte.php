<?php 
include ('conex.php');
  #Creamoslas variables que almacenan la información que está 
  #actualmente en los input de las tablas
	$IDDeporte= $_POST['IdEquipo'];
 	$Nombre_E= $_POST['NombreDeporte']; 


#Ahora en vez de utilizar Insert, 
#utilizaremos UDPATE para actualizar los datos de la tabla
$Actualizar = $conexion -> query("UPDATE deportes SET 
iddeporte='$IDDeporte',
nombredeporte='$Nombre_E'
WHERE iddeporte= '$IDDeporte'" );
if ($Actualizar) {
	echo "<script>
	alert('El registro ha sido Modificado');
	location.href='../Vista/App/Admon/ConsultaDeporte.php';
	</script>";
}else{
	echo "<script>
	alert('El registro no pudo ser Modificado');
	location.href='../Vista/App/Admon/ConsultaDeporte.php';
	</script>";
}

?>
