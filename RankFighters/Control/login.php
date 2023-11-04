<?php
session_start();
include('conex.php');
error_reporting(0);
//Indicamos que el documento será de tipo html y con caracteres de UTF-8:
header('Content-Type: text/html; charset=UTF-8');
//Al presionar el boton que previamente le llamamos "login", traeremos los datos del formulario:
$btninicio=$_POST['login'];

if(isset($btninicio)){
    //Traemos de los inputs los datos de usuario y contraseña:
    $Correo=$_POST['Correo'];
    $Clave=$_POST['contraseña'];
   
	$sql = "SELECT Correo, contraseña, concat(Nombre, ' ', Apellido), idTipoUsuario, idUsuario 
    FROM usuario 
    WHERE Correo = '$Correo' 
      AND contraseña = '$Clave'";
    $res = $conexion->query($sql);
    $fila = $res->fetch_row();
   echo $fila[0];
    if($fila[0]==$Correo && $fila[1]==$Clave){
   	
    	$_SESSION['user']=$fila[4];
		$_SESSION['correo']=$fila[0];
        $_SESSION['tipo']=$fila[3];
    	$_SESSION['usuario']=$fila[2];
    	$msj="Bienvenido ".$_SESSION['usuario']."";

		if ($_SESSION['tipo'] == 7) {
			// idTipoUsuario es igual a 7
			header("location:../Vista/App/Admon/InterAyu.php?mensaje=$msj");
		
		} elseif ($_SESSION['tipo'] == 2) {
			// idTipoUsuario es igual a 2
			header("location:../Vista/INTUsuarios.php?mensaje=$msj");
		
		} elseif ($_SESSION['tipo'] == 1) {
			// $_SESSION['tipo'] es igual a $Correo y $_SESSION['tipo'] es igual a $Clave
			header("location:../Vista/app/admon/index.php?mensaje=$msj");
		}		
			
	} else {
		echo "<script>
			alert('Usuario y/o Contraseña Incorrectos');
			location.href='../vista/login.php';
			</script>";
	}
}
?>
