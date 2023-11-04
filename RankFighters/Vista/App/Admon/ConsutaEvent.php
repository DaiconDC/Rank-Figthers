<?php
include('Menu.php');
$IdUsuario = $_GET['id'];
?>

 <div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">Modificar Evento</h1>                   
<?php  
        include( '../../../Control/conex.php'); 
          # Consultamos a la tabla tipo documento, que es la que tiene los tipos de docuementos en la BD:
          $sql = "SELECT `idevento`, `nombreevento`, deportes.nombredeporte, insteduc.NombreIE, `fechainicio`, `fechafinal`, estado.descripcion, `linkfoto` FROM `eventos` 
          INNER JOIN deportes 
          INNER JOIN estado 
          INNER JOIN insteduc
          ON deportes.iddeporte = eventos.iddeporte AND insteduc.idinsteduc = eventos.lugarevento
          AND estado.idestado = eventos.idestado
           WHERE idevento ='$IdUsuario'";
          $eje = $conexion->query($sql);
          # Mostramos a través de un ciclo todas las opciones válidas:
          while($row = $eje->fetch_row()){
            
?>            
    
    <div class="card shadow mb-4">


        <form action="../../../Control/ModificarEvent.php" method="POST" class="mt-5 mr-5 ml-5">
                <div class="form-row">

                <div class="form-group col-md-12">
                    <label for="Identificacion">Id evento</label>
                    <input type="text" name="idEven" class="form-control" value="<?php echo ''.$row[0].''; ?>" readonly>
                    </div>


                    <div class="form-group col-md-6">
                    <label for="Identificacion">Nombre de Evento</label>
                    <input type="text" name="Nombreevento" class="form-control" value="<?php echo ''.$row[1].''; ?>">
                    </div>



                   <div class="form-group col-md-6">
                    <label for="inputEmail4">Lugar Evento</label>
                    <select class="form-control" name="Lugarevento">
             <?php  
                        include( '../../Control/conex.php'); 
                          $sql = "SELECT * FROM insteduc";
                          $eje = $conexion->query($sql);
                          while($row3 = $eje->fetch_row()){
                            echo '<option value="'.$row3[0].'">'.$row3[1].'</option>';
                          }
                    ?>
                    </select>
                    </div>
          


                    <div class="form-group col-md-12">
                    <label for="TipoId">Id deporte</label>
                    <select class="form-control" name="TipoId">
             <?php  
                        include( '../../Control/conex.php'); 
                          $sql = "SELECT * FROM deportes";
                          $eje = $conexion->query($sql);
                      
                          while($fila = $eje->fetch_row()){
                            echo '<option value="'.$fila[0].'">'.$fila[1].'</option>';
                          }
                    ?>
                    </select>
                    </div>


                   <div class="form-group col-md-6">
                    <label for="inputPassword4">Fecha inicio</label>
                    <input type="date" name="FechaIni" class="form-control" value="<?php echo ''.$row[4].''; ?>">
                   </div>

                   <div class="form-group col-md-6">
                  <label for="inputAddress">Fecha final</label>
                  <input type="date" class="form-control" name="FechaFin" value="<?php echo ''.$row[5].''; ?>">
                   </div>

                   <div class="form-group col-md-6">
                    <label for="inputTelefono">Id Estado</label>
                    <select class="form-control" name="Idestado" >
             <?php  
                        include( '../../Control/conex.php'); 
                          $sql = "SELECT * FROM estado";
                          $eje = $conexion->query($sql);

                          while($row1 = $eje->fetch_row()){
                            echo '<option value="'.$row1[0].'">'.$row1[1].'</option>';
                          }
                    ?>
                    </select>
                    </div>

                    <div class="form-group col-md-6">
                   <label for="inputTelefono">Link Foto</label>
                    <input type="text" class="form-control" name="link" id="LinkFo" value="<?php echo ''.$row[7].''; ?>">
                  </div>


                </div>
                
         <button type="submit" name="GuardarEvento" class="btn btn-primary">Guardar</button>
              </form>
       
            <!-- End of Main Content -->
 <?php  } ?>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class=" text-center my-auto">
                        <span> </span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

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