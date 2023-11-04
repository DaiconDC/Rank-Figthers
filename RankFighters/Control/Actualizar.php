<html>
    <body>
    <?php
include( 'conex.php'); 
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