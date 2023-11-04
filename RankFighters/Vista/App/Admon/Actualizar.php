<html>
    <body>
    <?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);






include( '../../../Control/conex.php'); 
if(isset($_GET['editar']));{
$update=$_GET['editar'];

$Consulta_1= "SELECT * FROM usuario WHERE idUsuario='$update'";
$Execute_Consulta= mysqli_query($conexion, $Consulta_1);
$OrgArray=mysqli_fetch_array ($Execute_Consulta);
$variable1=$OrgArray ['idUsuario'];
$variable2=$OrgArray ['idTipodoc'];
$variable3=$OrgArray ['idTipoUsuario'];
$variable4=$OrgArray ['Nombre'];
$variable5=$OrgArray ['Apellido'];
$variable6=$OrgArray ['Fecha'];
$variable7=$OrgArray ['Direccion'];
$variable8=$OrgArray ['Correo'];
$variable9=$OrgArray ['Telefono'];
$variable10=$OrgArray ['contraseña'];
}
?>

<hr>
formulario para actualizar datos
<hr>
<form action="" method="POST">
<input type="text" name="idUsuario" value="<?php echo $variable1;?>"><br>
<input type="text" name="idTipodoc" value="<?php echo $variable2;?>"><br>
<input type="text" name="idTipoUsuario" value="<?php echo $variable3;?>"><br>
<input type="text" name="Nombre" value="<?php echo $variable4;?>"><br>
<input type="text" name="Apellido" value="<?php echo $variable5;?>"><br>
<input type="text" name="Fecha" value="<?php echo $variable6;?>"><br>
<input type="text" name="Direccion" value="<?php echo $variable7;?>"><br>
<input type="text" name="Correo" value="<?php echo $variable8;?>"><br>
<input type="text" name="Telefono" value="<?php echo $variable9;?>"><br>
<input type="text" name="contraseña" value="<?php echo $variable10;?>"><br>
<input type="submit" name="update" value="Actualizar">
</form>
<?php
if (isset($_POST['update'])) {
# code... el comprueba que ya se ha dado click al botón update
$variable11=$_POST['idUsuario'];
$variable12=$_POST['idTipodoc'];
$variable13=$_POST['idTipoUsuario'];
$variable14=$_POST['Nombre'];
$variable15=$_POST['Apellido'];
$variable16=$_POST['Fecha'];
$variable17=$_POST['Direccion'];
$variable18=$_POST['Correo'];
$variable19=$_POST['Telefono'];
$variable20=$_POST['contraseña'];

$AlmacenActualizacion = "UPDATE usuario SET idUsuario='$variable11',idTipodoc='$variable12',idTipoUsuario='$variable13',Nombre='$variable14',Apellido='$variable15',Fecha='$variable16',Direccion='$variable17',Correo='$variable18',Telefono='$variable19',contraseña='$variable20' WHERE idUsuario='$update'";

$Safe_Execute=mysqli_query($conexion, $AlmacenActualizacion);
if ($Safe_Execute) {
    echo "<script>alert('datos actualizados')</script>";
    echo "<script>window.open('crud_php.php','_self')</script>";
    echo "<script>
				location.href='usuarios.php';
					</script>";
    }
    else{
    echo    "<script>
        alert('El registro no pudo ser actualizado');
        location.href='usuarios.php';
            </script>";
    } 
}

?>

</body>
</html>