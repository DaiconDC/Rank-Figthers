<?php 
include ('conex.php');
  #Creamoslas variables que almacenan la información que está 
  #actualmente en los input de las tablas
	$ID_INSTITUCION= $_POST['IdINSTEDUC'];
 	$NombreInstitucion = $_POST['NombreINST']; 
	$cel = $_POST['Celular'];
	$DireccionINST = $_POST['DireccionINST'];
	$Nombre_Encargado = $_POST['Encargado'];

#Ahora en vez de utilizar Insert, 
#utilizaremos UDPATE para actualizar los datos de la tabla
$Actualizar = $conexion -> query("UPDATE insteduc SET 
idinsteduc='',
NombreIE='$NombreInstitucion',
Direccion='$DireccionINST',
Celular='$cel',
idEncargado='$Nombre_Encargado' 
WHERE idinsteduc= '$ID_INSTITUCION'" );
if ($Actualizar) {
	echo "<script>
	alert('El registro ha sido Modificado');
	location.href='../Vista/App/Admon/ConsultaInstitucion.php';
	</script>";
}else{
	echo "<script>
	alert('El registro no pudo ser Modificado');
	location.href='../Vista/App/Admon/ConsultaInstitucion.php';
	</script>";
}

?>
