
<?php 
include ('conex.php');
   /* El  usuario debiò haber presionado el botòn guardar que lo trae hasta acà--> */
   if(isset($_POST['BTNcontacto'])) {

   	 /* Creamos  unas nuevas variables con el signo $, donde almacenaremos lo que trae en los formularios en name ="idusuario", por ejemplo */
	
	
	
	$Nombre = $_POST['Nombre'];
    $correo = $_POST['Correo'];
	$Mensaje = $_POST['Mensaje'];

	 /* Creamos la sentencia para insertar datos en la tabla  usuario, las primeras variables corresponden a las que aparecen en la estructura de la BD y despues de Values corresponde a las que creamos anteriormente */
	$ins= "INSERT INTO `contacto`(`Nombre`, `Correo`, `Mensaje`) VALUES ('$Nombre','$correo','$Mensaje')";
	
	if(mysqli_query($conexion,$ins)==TRUE) {
		echo "<script>
				location.href='../Vista/mensaje.php';
					</script>";
			}else{
				"<script>
				alert('El registro no pudo ser guardado');
				location.href='../Vista/mensaje.php';
					</script>";
			} 
  }

  mysqli_close($conexion);
 ?>
