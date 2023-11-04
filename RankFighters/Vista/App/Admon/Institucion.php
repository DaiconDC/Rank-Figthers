<?php
include('Menu.php');
?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Instituciones</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                       
                        <div class="col-md-12 align-self-end card-header py-3 justify-content-end">
                            <button class="btn btn-sm bg-gradient-primary offset-md-10 col-md-2 " data-toggle="modal" data-target="#exampleModal">Nueva Institucion</button>
                        </div>
                        <div class="card-body">
                           
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id Institucion educativa</th>
                                            <th>Nombre institución</th>
                                            <th>Dirección</th>
                                            <th>Celular</th>
                                            <th>Nombre del Encargado</th>
                                            <th>Eliminar</th>
                                            <th>Modificar</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Id Institucion educativa</th>
                                            <th>Nombre institución</th>
                                            <th>Dirección</th>
                                            <th>Celular</th>
                                            <th>Nombre del Encargado</th>
                                            <th>Eliminar</th>
                                            <th>Modificar</th>
                                        </tr>
                                        </tfoot>
                    <?php 
                      include( '../../../Control/conex.php'); 
                      $cons = $conexion -> query("SELECT idinsteduc, NombreIE, insteduc.Direccion, Celular, usuario.Nombre FROM insteduc INNER JOIN usuario ON usuario.idUsuario = insteduc.idEncargado");
                      while ($row = $cons -> fetch_row()) {
                    ?>
                <tr>
            <td><?php echo number_format(''.$row[0].''); ?></td>
            <td><?php echo ''.$row[1].''; ?></td>
            <td><?php echo ''.$row[2].''; ?></td>
            <td><?php echo ''.$row[3].''; ?></td>
            <td><?php echo ''.$row[4].''; ?></td>
                   
          <!-- Si el usuario presiona el botòn Modificar ira a el archivo Modificarusua, si presiona eliminar irà a Borrarusua en la Carpeta Control--> 
          <!-- Onclick nos dice a donde se va a dirigir cuando presione el botón-->    
            <td> <center><button type="submit" class="btn btn-sm bg-gradient-primary" name="EliminaInstitu" onclick="location='../../../Control/BorrarInstitu.php?id=<?php echo ''.$row[0].'' ?>'">Eliminar</button></center></td>
            <td> <center> <button type="submit" class="btn btn-sm bg-gradient-danger"  onclick="location='ConsultaInstitucion.php?id=<?php echo ''.$row[0].''; ?>'"  >Modificar</button>
                      
       </tr>
       <?php }   ?>
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
                        <span> Hecho por: <strong>Samuel Henao Lara, Santiago Salcedo, Yoseph Mazo</span>
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
 
   
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nueva Institución</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="../../../Control/GuardarINST.php" method="POST">
                <div class="form-row">

                <div class="form-group col-md-12">
                    <label for="inputPassword4">Nombre Institución</label>
                    <input type="Text" name="NombreINST" class="form-control" id="inputPassword4">
                  </div>

                  <div class="form-group col-md-12">
                    <label for="Identificacion">Celular</label>
                    <input type="Text" name="Celular" class="form-control" id="Celular" >
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Dirección</label>
                    <input type="Text" name="DireccionINST" class="form-control" id="inputEmail4" >
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputTipoDocumento4">Identificacion del Encargado</label>
                    <select class="form-control"  name="Encargado" id="inputEncargado">
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