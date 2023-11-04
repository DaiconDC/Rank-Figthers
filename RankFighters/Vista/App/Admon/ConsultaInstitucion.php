<?php
include('Menu.php');
$IdUsuario= $_GET['id'];
?>
<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Modificar Institucion</h1>

 
    <?php  
        include( '../../../Control/conex.php'); 
          # Consultamos a la tabla tipo documento, que es la que tiene los tipos de docuementos en la BD:
          $sql = "SELECT idinsteduc, NombreIE, insteduc.Direccion, Celular, usuario.Nombre FROM insteduc INNER JOIN usuario ON usuario.idUsuario = insteduc.idEncargado WHERE idinsteduc='$IdUsuario'
          ";
          $eje = $conexion->query($sql);
          # Mostramos a través de un ciclo todas las opciones válidas:
          while($row = $eje->fetch_row()){
            
            
        ?>
  <div>
           <!-- Aca va el FORMULARIO DE TABLA USUARIOS -->
           <div class="card shadow mb-4">

           
           <form class="mt-5 ml-5 mr-5 mb-5"action="../../../Control/ModificarINST.php" method="POST">
                <div class="form-row">

                <div class="form-group col-md-12">
                    <label for="inputPassword4">Id Institucion</label>
                    <input type="Text" name="IdINSTEDUC" class="form-control" id="inputPassword4" value="<?php echo $row[0];?>" readonly>
                  </div>

                <div class="form-group col-md-12">
                    <label for="inputPassword4">Nombre institución</label>
                    <input type="Text" name="NombreINST" class="form-control" id="inputPassword4" value="<?php echo $row[1];?>">
                  </div>

                  <div class="form-group col-md-12">
                    <label for="Identificacion">Celular</label>
                    <input type="Text" name="Celular" class="form-control" id="Celular" value="<?php echo $row[3];?>">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Direccion</label>
                    <input type="Text" name="DireccionINST" class="form-control" id="inputEmail4" value="<?php echo $row[2];?>" >
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputTipoDocumento4">Identificacion del Encargado</label>
                    <select class="form-control"  name="Encargado" id="inputEncargado" value="<?php echo $row[4];?>">
             <?php  
                        include( '../../Control/conex.php'); 
                          $sql = "SELECT * FROM usuario";
                          $eje = $conexion->query($sql);
                          while($row2 = $eje->fetch_row()){
                            echo '<option value="'.$row2[0].'">'.$row2[1].'</option>';
                          }
                    ?>
                    </select>
                  </div>
                
              <button type="submit" name="BTNGuardarINST" class="btn btn-primary">Guardar</button>
              </form>
   </div>
  </div>
 </div>
</div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
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