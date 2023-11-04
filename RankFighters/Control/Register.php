
<?php 
include ('conex.php');
   /* El  usuario debiò haber presionado el botòn guardar que lo trae hasta acà--> */
   if(isset($_POST['BTNRegistrar'])) {

   	 /* Creamos  unas nuevas variables con el signo $, donde almacenaremos lo que trae en los formularios en name ="idusuario", por ejemplo */
	$TipoDoc = $_POST['tipoID'];
	$Tipousua = 2;
	$documento = $_POST["Identifi"];
	$Nombre = $_POST['nombre'];
	$Apellidos = $_POST['Apellido'];
	$Fecha= $_POST['Fechadenacimiento'];
	$Direccion = $_POST['Dirección'];
    $correo = $_POST['email'];
	$clave = $_POST['subject'];
	$Telefono= $_POST['Telefono'];
	$claveR= $_POST['subjectRepeat'];

	 /* Creamos la sentencia para insertar datos en la tabla  usuario, las primeras variables corresponden a las que aparecen en la estructura de la BD y despues de Values corresponde a las que creamos anteriormente */
	$ins= "INSERT INTO `usuario`(`idTipodoc`, `idTipoUsuario`,`documento`,`Nombre`, `Apellido`, `Fecha`, `Direccion`, `Correo`, `Telefono`, `contraseña`) VALUES ('$TipoDoc','$Tipousua','$documento','$Nombre','$Apellidos','$Fecha','$Direccion','$correo','$Telefono','$clave')";
	
	if(mysqli_query($conexion,$ins)==TRUE) {
		echo "<script>
				location.href='../Vista/login.php';
					</script>";
			}else{
				"<script>
				alert('El registro no pudo ser guardado');
				location.href='../Vista/register.php';
					</script>";
			} 
  }

  mysqli_close($conexion);
 ?>
