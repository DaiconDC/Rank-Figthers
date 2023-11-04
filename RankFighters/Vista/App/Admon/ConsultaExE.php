<?php
include('Menu.php');
$IdUsuario= $_GET['id'];
?>
<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Modificar Equipos por Eventos</h1>

 
    <?php  
        include( '../../../Control/conex.php'); 
          # Consultamos a la tabla tipo documento, que es la que tiene los tipos de docuementos en la BD:
          $sql = "SELECT `idequipoevento`, equipos.nombreequipo, eventos.nombreevento FROM `equiposxevento` INNER JOIN equipos INNER JOIN eventos ON equipos.idequipo = equiposxevento.idequipo AND eventos.idevento = equiposxevento.idevento WHERE idequipoevento = '$IdUsuario'
          ";
          $eje = $conexion->query($sql);
          # Mostramos a través de un ciclo todas las opciones válidas:
          while($row = $eje->fetch_row()){
            
            
        ?>
  <div>
           <!-- Aca va el FORMULARIO DE TABLA USUARIOS -->
           <div class="card shadow mb-4">

           
           <form class="ml-5 mr-5 mt-5 mb-5" action="../../../Control/ModificarExE.php" method="POST">
                <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="Usuario">Id Equipo por Evento</label>
                    <input type="Text" name="IdExE" class="form-control" id="Nombre" readonly value="<?php echo $row[0];?>">
                  </div>

                <div class="form-group col-md-12">
                    <label for="inputNomreEquipo">Nombre del Equipo</label>
                    <select class="form-control"  name="IdEquipo" id="Select ID Equipo" value="<?php echo $row[1];?>">
              <?php  
                          include( '../../Control/conex.php'); 
                          $sql = "SELECT * FROM `equipos`";
                          $eje = $conexion->query($sql);
                          while($row1 = $eje->fetch_row()){
                            echo '<option value="'.$row1[0].'">'.$row1[1].'</option>';
                          }
                    ?>
                    </select>
                  </div>

                  <div class="form-group col-md-12">
                    <label for="inputNombreEvento">Nombre del Evento</label>
                    <select class="form-control"  name="IdEvento" id="Select ID Evento" value="<?php echo $row[2];?>">
              <?php  
                          include( '../../Control/conex.php'); 
                          $sql = "SELECT * FROM `eventos`";
                          $eje = $conexion->query($sql);
                          while($row2 = $eje->fetch_row()){
                            echo '<option value="'.$row2[0].'">'.$row2[1].'</option>';
                          }
                    ?>
                    </select>
                  </div>

              <center> <button type="submit" name="BTNGuardarEquipoxEvento" class="btn btn-primary">Guardar</button></center> 
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