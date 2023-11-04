<?php 
include ('conex.php');
   /* El  usuario debiò haber presionado el botòn guardar que lo trae hasta acà--> */
   if(isset($_POST['BTNGuardarINST'])) {

   	 /* Creamos  unas nuevas variables con el signo $, donde almacenaremos lo que trae en los formularios en name ="idusuario", por ejemplo */
	$Nombre_INST= $_POST["NombreINST"];
	$Celular_= $_POST["Celular"];
	$Direccion_INST= $_POST["DireccionINST"];
	$Encargado_= $_POST["Encargado"];	
	 /* Creamos la sentencia para insertar datos en la tabla  usuario, las primeras variables corresponden a las que aparecen en la estructura de la BD y despues de Values corresponde a las que creamos anteriormente */
	$ins= "INSERT INTO `insteduc` (`idinsteduc`, `NombreIE`, `Direccion`, `Celular`, `idEncargado`) VALUES (NULL, '$Nombre_INST', '$Direccion_INST', '$Celular_', '$Encargado_')";
	
	if(mysqli_query($conexion,$ins)==TRUE) {
		echo "<script>
				location.href='../Vista/App/Admon/Institucion.php';
					</script>";
			}else{
				echo"<script>
				alert('El registro no pudo ser guardado');
				location.href='../Vista/App/Admon/Institucion.php';
					</script>";
			} 
  }

  mysqli_close($conexion);
 ?>
