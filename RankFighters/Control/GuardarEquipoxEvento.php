
<?php 
include ('conex.php');
   /* El  usuario debiò haber presionado el botòn guardar que lo trae hasta acà--> */
   if(isset($_POST['BTNGuardarEquipoxEvento'])) {

   	 /* Creamos  unas nuevas variables con el signo $, donde almacenaremos lo que trae en los formularios en name ="idusuario", por ejemplo */
	$idequipo = $_POST["IdEquipo"];
	$idevento = $_POST["IdEvento"];

	 /* Creamos la sentencia para insertar datos en la tabla  usuario, las primeras variables corresponden a las que aparecen en la estructura de la BD y despues de Values corresponde a las que creamos anteriormente */
	$ins= "INSERT INTO `equiposxevento`(`idequipoevento`, `idequipo`, `idevento`) VALUES (NULL,'$idequipo','$idevento')";
	
	if(mysqli_query($conexion,$ins)==TRUE) {
		echo "<script>
				location.href='../Vista/App/Admon/Equipo_x _Evento.php';
					</script>";
				} else {
					echo "<script>
						alert('El registro no pudo ser guardado');
						location.href='../Vista/App/Admon/Equipo_x _Evento.php';
						</script>";
					exit; 
				}			
  }

  mysqli_close($conexion);
 ?>
