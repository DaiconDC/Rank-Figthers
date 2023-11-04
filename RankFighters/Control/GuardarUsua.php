
<?php 
include ('conex.php');
   /* El  usuario debiò haber presionado el botòn guardar que lo trae hasta acà--> */
   if(isset($_POST['BTnGuardarUsua'])) {

   	 /* Creamos  unas nuevas variables con el signo $, donde almacenaremos lo que trae en los formularios en name ="idusuario", por ejemplo */
	
	$TipoDoc = $_POST['TipoId'];
	$Tipousua =$_POST['TipoUsua'];
	$Documento = $_POST["documento"];
	$Nombre = $_POST['Nombre'];
	$Apellidos = $_POST['Apellido'];
	$Fecha= $_POST['Fecha'];
	$Direccion = $_POST['Direccion'];
    $correo = $_POST['Correo'];
	$clave = $_POST['Contraseña'];
	$Telefono= $_POST['Telefono'];

	 /* Creamos la sentencia para insertar datos en la tabla  usuario, las primeras variables corresponden a las que aparecen en la estructura de la BD y despues de Values corresponde a las que creamos anteriormente */
	$ins= "INSERT INTO `usuario`(`idTipodoc`, `idTipoUsuario`,`documento`,`Nombre`, `Apellido`, `Fecha`, `Direccion`, `Correo`, `Telefono`, `contraseña`) VALUES ('$TipoDoc','$Tipousua','$Documento','$Nombre','$Apellidos','$Fecha','$Direccion','$correo','$Telefono','$clave')";
	
	if(mysqli_query($conexion,$ins)==TRUE) {
		echo "<script>
				location.href='../Vista/App/Admon/usuarios.php';
					</script>";
			}else{
				"<script>
				alert('El registro no pudo ser guardado');
				location.href='../Vista/App/Admon/usuarios.php';
					</script>";
			} 
  }

  mysqli_close($conexion);
 ?>
