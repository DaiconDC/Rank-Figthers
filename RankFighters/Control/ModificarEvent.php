<?php 
include ('conex.php');

$idevento = $_POST['idEven'];
$NombreEvento = $_POST['Nombreevento'];
	$IdDeporte = $_POST['TipoId'];
	$LugarEvento = $_POST['Lugarevento'];
	$FechaInicial = $_POST['FechaIni'];
	$FechaFinal = $_POST['FechaFin'];
	$IdEstado = $_POST['Idestado'];
	$LinkFoto = $_POST['link'];

    $Actualizar = $conexion -> query("UPDATE eventos SET 
	idevento='$idevento',
     nombreevento='$NombreEvento',
     iddeporte='$IdDeporte',
     lugarevento='$LugarEvento',
     fechainicio='$FechaInicial',
     fechafinal='$FechaFinal',
     idestado='$IdEstado',
     linkfoto='$LinkFoto'
     WHERE idevento = '$idevento'" );

if ($Actualizar) {
	echo "<script>
	alert('El registro ha sido Modificado');
	location.href='../Vista/App/Admon/eventos.php';
	</script>";
}else{
	echo "<script>
	alert('El registro no pudo ser Modificado');
	location.href='../Vista/App/Admon/ConsultaEvent.php';
	</script>";
}

?>
