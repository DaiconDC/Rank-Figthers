<?php 
include ('conex.php');
  #Creamoslas variables que almacenan la información que está 
  #actualmente en los input de las tablas
	$usuario = $_POST['documento']; 
	$TipoDoc = $_POST['TipoId'];
	$Tipousua = $_POST['TipoUsua'];
	$Nombre = $_POST['Nombre'];
	$Apellidos = $_POST['Apellido'];
	$clave = $_POST['Contraseña'];
	$Direccion = $_POST['Direccion'];
	$Cel = $_POST['Telefono'];
	$correo = $_POST['Correo'];
	$fecha= $_POST['Fecha'];

#Ahora en vez de utilizar Insert, 
#utilizaremos UDPATE para actualizar los datos de la tabla
$Actualizar = $conexion -> query("UPDATE `usuario` SET
idTipodoc='$TipoDoc',
idTipoUsuario='$Tipousua',
Nombre='$Nombre',
Apellido='$Apellidos',
Fecha='$fecha',
Direccion='$Direccion',
Correo='$correo',
Telefono='$Cel',
contraseña='$clave'
    WHERE documento= '$usuario'" );



if ($Actualizar) {
	echo "<script>
	alert('El registro ha sido Modificado');
	location.href='../Vista/App/Admon/ConsultaUsua.php';
	</script>";
}else{
	echo "<script>
	alert('El registro no pudo ser Modificado');
	location.href='../Vista/App/Admon/ConsultaUsua.php';
	</script>";
}

?>
