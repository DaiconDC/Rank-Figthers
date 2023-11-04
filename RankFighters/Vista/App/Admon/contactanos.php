<?php
include('Menu.php');
?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Contacto</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                       
                        <div class="col-md-12 align-self-end card-header py-3 justify-content-end">
                        </div>

                        
                        <div class="card-body">
                           
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                         <th>Correo</th>
                                         <th>Mensaje</th>
                                            <th>Eliminar</th>
                                            <th>Modificar</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                    <th>ID</th>
                                        <th>Nombre</th>
                                         <th>Correo</th>
                                         <th>Mensaje</th>
                                            <th>Eliminar</th>
                                            <th>Modificar</th>

                                        </tr>
</tfoot>
                    <?php 
                      include( '../../../Control/conex.php'); 
                      $cons = $conexion -> query("SELECT *  FROM contacto");
                      while ($row = $cons -> fetch_row()) {
                    ?>
                <tr>
            <td><?php echo number_format(''.$row[0].''); ?></td>
            <td><?php echo ''.$row[1].''; ?></td>
            <td><?php echo ''.$row[2].''; ?></td>
            <td><?php echo ''.$row[3].''; ?></td>
                   
          <!-- Si el usuario presiona el botòn Modificar ira a el archivo Modificarusua, si presiona eliminar irà a Borrarusua en la Carpeta Control--> 
          <!-- Onclick nos dice a donde se va a dirigir cuando presione el botón-->    
            <td> <center><button type="submit" class="btn btn-sm bg-gradient-primary" name="EliminaDeporte" onclick="location='../../../Control/BorrarContacto.php?id=<?php echo ''.$row[0].'' ?>'">Eliminar</button></center></td>
            <td> <center> <button type="submit" class="btn btn-sm bg-gradient-danger"  data-toggle="modal" data-target="#exampleModal1?id<?php echo ''.$row[0].''; ?>"  >Modificar</button>
                      
       </tr>
       <?php }   ?>
                                    </tfoot>                                    
                                </table>
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
                        <span>Hecho por: <strong>Samuel Henao Lara, Santiago Salcedo, Yoseph Mazo</span>
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