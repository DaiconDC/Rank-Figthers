
<?php 
include ('conex.php');
   /* El  usuario debiò haber presionado el botòn guardar que lo trae hasta acà--> */
   if(isset($_POST['ZXD'])) {

   	 /* Creamos  unas nuevas variables con el signo $, donde almacenaremos lo que trae en los formularios en name ="idusuario", por ejemplo */
	$NombreEvento = $_POST["Nombreevento"];
	$IdDeporte =$_POST['TipoId'];
	$LugarEvento = $_POST['Lugarevento'];
	$FechaInicial = $_POST['FechaIni'];
	$FechaFinal = $_POST['FechaFin'];
	$IdEstado= $_POST['Idestado'];
	$LinkFoto = $_POST['link'];

	 /* Creamos la sentencia para insertar datos en la tabla  usuario, las primeras variables corresponden a las que aparecen en la estructura de la BD y despues de Values corresponde a las que creamos anteriormente */
	$ins= "INSERT INTO `eventos`(`nombreevento`, `iddeporte`, `lugarevento`, `fechainicio`, `fechafinal`, `idestado`, `linkfoto`) VALUES ('$NombreEvento','$IdDeporte','$LugarEvento','$FechaInicial','$FechaFinal','$IdEstado','$LinkFoto')";
	
	if(mysqli_query($conexion,$ins)==TRUE) {
		echo "<script>
				location.href='../Vista/App/Admon/InterAyu.php';
					</script>";
			}else{
				"<script>
				alert('El registro no pudo ser guardado');
				location.href='../Vista/App/Admon/InterAyu.php';
					</script>";
			} 
  }

  mysqli_close($conexion);
 ?>
