<?php 
include ('conex.php');
  #Creamoslas variables que almacenan la información que está 
  #actualmente en los input de las tablas
	$Equipo_x_Evento= $_POST['IdExE'];
 	$ID_Equipo= $_POST['IdEquipo']; 
	$ID_Evento = $_POST['IdEvento'];

#Ahora en vez de utilizar Insert, 
#utilizaremos UDPATE para actualizar los datos de la tabla
$Actualizar = $conexion -> query("UPDATE equiposxevento SET 
idequipoevento='',
idequipo='$ID_Equipo',
idevento='$ID_Evento'
WHERE idequipoevento= '$Equipo_x_Evento'" );
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
