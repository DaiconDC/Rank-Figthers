<?php
include ('conex.php');
header( 'Content-Type: text/html; charset=UTF-8'); 
session_start(); 
error_reporting(0); 

$id = $_REQUEST['id'];

$del = $conexion -> query("DELETE FROM estado WHERE idestado = '$id' ");
	if ($del) {
		echo "<script>
		location.href='../Vista/App/Admon/Estado.php#';
		</script>";
		}else{
			echo "<script>
			 alert('El registro no pudo ser eliminado');
			location.href='../Vista/App/Admon/Estado.php';
			</script>";

		}


		
 ?>