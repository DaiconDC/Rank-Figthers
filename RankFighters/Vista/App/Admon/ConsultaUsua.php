<?php
include('Menu.php');
$IdUsuario= $_GET['id'];
?>
<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Modificar Usuarios</h1>

 
    <?php  
        include( '../../../Control/conex.php'); 
          # Consultamos a la tabla tipo documento, que es la que tiene los tipos de docuementos en la BD:
          $sql = "SELECT usuario.idUsuario, tipodoc.Descripcion, tipousuario.Descripcion, documento, Nombre, Apellido, Fecha, Direccion, Correo, Telefono, contraseña 
          FROM usuario
          INNER JOIN tipodoc ON tipodoc.idtipodoc = usuario.idTipodoc
          INNER JOIN tipousuario ON tipousuario.idTipoUsuario = usuario.idTipoUsuario
          WHERE idUsuario='$IdUsuario'
          ";
          $eje = $conexion->query($sql);
          # Mostramos a través de un ciclo todas las opciones válidas:
          while($row = $eje->fetch_row()){
            
            
        ?>
  <div>
           <!-- Aca va el FORMULARIO DE TABLA USUARIOS -->
           <div class="card shadow mb-4">

           
           <form  class="mt-5 mr-5 ml-5 mb-5"  action="../../../Control/ModificaUsua.php" method="POST">
                <div class="form-row">



                  <div class="form-group col-md-6">
                    <label for="Usuario">Nombre</label>
                    <input type="Text" name="Nombre" class="form-control" id="Nombre" value="<?php echo $row[4];?>" >
                  </div>

                  <div class="form-group col-md-6">
                    <label for="Apellido">Apellido</label>
                    <input type="Text" name="Apellido" class="form-control" id="Apellido" value="<?php echo $row[5];?>" >
                  </div>

                  <div class="form-group col-md-12">
                    <label for="inputTipoDocumento4">Tipo Usuario</label>
                    <select class="form-control"  name="TipoUsua" id="inputTipoDocumento4" >
             <?php  
                        include( '../../Control/conex.php'); 
                          $sql = "SELECT * FROM tipousuario";
                          $eje = $conexion->query($sql);
                          while($row2 = $eje->fetch_row()){
                            echo '<option value="'.$row2[0].'">'.$row2[1].'</option>';
                          }
                    ?>
                    </select>
                  </div>

                  <div class="form-group col-md-12">
                    <label for="inputTipoDocumento4">Tipo Documento</label>
                    <select class="form-control"  name="TipoId" id="inputTipoDocumento4" >
             <?php  
                        include( '../../Control/conex.php'); 
                          $sql = "SELECT * FROM tipodoc";
                          $eje = $conexion->query($sql);
                          while($row1 = $eje->fetch_row()){
                            echo '<option value="'.$row1[0].'">'.$row1[1].' </option>';
                          }
                    ?>
                    </select>
                  </div>


                  <div class="form-group col-md-6">
                    <label for="Identificacion">Identificacion</label>
                    <input type="Id" name="documento" class="form-control" id="Identificacion" maxlength="10" value="<?php echo $row[3];?>" readonly>
                  </div>
                  
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Correo</label>
                    <input type="email" name="Correo"  class="form-control" id="inputEmail4" value="<?php echo $row[8];?>" >
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Contraseña</label>
                    <input type="password" name="Contraseña" class="form-control" id="inputPassword4" value="<?php echo $row[10];?>" >
                  </div>

                <div class="form-group col-md-6">
                  <label for="inputAddress">Telefono</label>
                  <input type="text" name="Telefono" class="form-control" id="inputAddress" value="<?php echo $row[9];?>" >                        
                </div>

                <div class="form-group col-md-12">
                  <label for="inputAddress">Dirección</label>
                  <input type="text" name="Direccion" class="form-control" id="inputAddress" value="<?php echo $row[7];?>"  >
                </div>

                <div class="form-group col-md-12">
                  <label for="inputAddress">Fecha</label>
                  <input type="date" name="Fecha" class="form-control" id="inputAddress" value="<?php echo $row[6];?>" >
                </div>

                </div>
                 
               <button type="submit" name="BTnGuardarUsua" class="btn btn-primary">Guardar</button> 
                  

              </form>


   </div>
  </div>
 </div>
</div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->

            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
     <?php } ?>                 
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- MODAL DE USUARIO -->
    <!-- Button trigger modal -->
 
   
  
  
    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
</body>

</html>