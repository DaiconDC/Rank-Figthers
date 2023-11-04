<?php 
include ('conex.php');
   /* El  usuario debiò haber presionado el botòn guardar que lo trae hasta acà--> */
   if(isset($_POST['BTNGuardarEquipo'])) {

   	 /* Creamos  unas nuevas variables con el signo $, donde almacenaremos lo que trae en los formularios en name ="idusuario", por ejemplo */
	$Nombre_Equipo= $_POST["NombreEquipo"];
	$Id_Inst_Edu= $_POST["IdInstEducativa"];
	 /* Creamos la sentencia para insertar datos en la tabla  usuario, las primeras variables corresponden a las que aparecen en la estructura de la BD y despues de Values corresponde a las que creamos anteriormente */
	$ins= "INSERT INTO `equipos` (`idequipo`, `nombreequipo`, `idinsteducat`) VALUES (NULL, '$Nombre_Equipo',$Id_Inst_Edu)";
	
	if(mysqli_query($conexion,$ins)==TRUE) {
		echo "<script>
				location.href='../Vista/App/Admon/Equipo.php';
					</script>";
			}else{
				echo"<script>
				alert('El registro no pudo ser guardado');
				location.href='../Vista/App/Admon/Equipo.php';
					</script>";
			} 
  }

  mysqli_close($conexion);
 ?>
