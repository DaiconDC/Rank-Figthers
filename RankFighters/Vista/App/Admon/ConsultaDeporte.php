<?php
include('Menu.php');
$IdUsuario= $_GET['id'];
?>
<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Modificar Deporte </h1>

 
    <?php  
        include( '../../../Control/conex.php'); 
          # Consultamos a la tabla tipo documento, que es la que tiene los tipos de docuementos en la BD:
          $sql = "SELECT *  FROM deportes WHERE iddeporte = '$IdUsuario'
          ";
          $eje = $conexion->query($sql);
          # Mostramos a través de un ciclo todas las opciones válidas:
          while($row = $eje->fetch_row()){
            
            
        ?>
  <div>
           <!-- Aca va el FORMULARIO DE TABLA USUARIOS -->
           <div class="card shadow mb-4">

           
           <form class="mr-5 ml-5 mt-5 mb-5" action="../../../Control/ModificarDeporte.php" method="POST">

           <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="TipoId">Id del Equipo</label>
                    <input type="id" name="IdEquipo" class="form-control" id="Nombre_De_Deporte" value="<?php echo $row[0];?>" readonly>
                    </div>
                </div>

           <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="TipoId">Nombre de Deporte</label>
                    <input type="id" name="NombreDeporte" class="form-control" id="Nombre_De_Deporte" value="<?php echo $row[1];?>">
                    </div>
                </div>
                
              <center> <button type="submit" name="BTNGuardarDeporte"class="btn btn-primary">Guardar</button></center> 
              </form>
   </div>
  </div>
 </div>
</div>
                <!-- /.container-fluid -->

            
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