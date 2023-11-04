<?php
include('Menu.php');
?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Reporte</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                       
                        <div class="col-md-12 align-self-end card-header py-3 justify-content-end">
                            <button class="btn btn-sm bg-gradient-primary offset-md-10 col-md-2 " data-toggle="modal" data-target="#exampleModal">Nuevo Usuario</button>
                        </div>
                        <div class="card-body">
                           
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Identificación</th>
                                            <th>Tipo Usuario</th>
                                            <th>Tipo Doc.</th>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>Teléfono</th>
                                            <th>Direccion</th>
                                            <th>Eliminar</th>
                                            <th>Modificar</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Identificación</th>
                                            <th>Tipo Usuario</th>
                                            <th>Tipo Doc.</th>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>Teléfono</th>
                                            <th>Direccion</th>
                                            <th>Eliminar</th>
                                            <th>Modificar</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                       
                                        <tr>
                                            <th>33816156</th>
                                            <th>Administrador</th>
                                            <th>Tipo Doc.</th>
                                            <th>Dianeth Yamile</th>
                                            <th>León Valencia</th>
                                            <th>3135417303</th>
                                            <th>Direccion</th>
                                            <th><center><button class="btn btn-sm bg-gradient-primary">Eliminar</center></button></th>
                                            <th><center><button class="btn btn-sm bg-gradient-danger">Modificar</center></button></th>
                                        </tr>
                                        <tr>
                                            <th>33816156</th>
                                            <th>Administrador</th>
                                            <th>Tipo Doc.</th>
                                            <th>Dianeth Yamile</th>
                                            <th>León Valencia</th>
                                            <th>3135417303</th>
                                            <th>Direccion</th>
                                            <th><center><button class="btn btn-sm bg-gradient-primary">Eliminar</center></button></th>
                                            <th><center><button class="btn btn-sm bg-gradient-danger">Modificar</center></button></th>
                                        </tr>

                                    </tbody>
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
                        <span>Copyright &copy; Your Website 2020</span>
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
          <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="Usuario">Usuario</label>
                    <input type="Text" name="usuario" class="form-control" id="Usuario">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="Identificacion">Identificacion</label>
                    <input type="Id" name="Identificacion" class="form-control" id="Identificacion">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="TipoId">Tipo Identificacion</label>
                    <select id="TipoId" name="TipoId" class="form-control">
                      <option selected>Escoge...</option>
                      <option>T.I</option>
                      <option>C.C</option>
                      <option>C.E</option>
                      <option>P.P.T</option>
                    </select>
                  </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Correo</label>
                    <input type="email" name="Correo" class="form-control" id="inputEmail4">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Contraseña</label>
                    <input type="password" name="Contraseña" class="form-control" id="inputPassword4">
                  </div>
                </div>
                <div class="form-group col-md-12">
                  <label for="inputAddress">Dirección</label>
                  <input type="text" name="Direccion" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="form-row">

                </div>
                 <div
                   <center> <button type="submit" class="btn btn-primary">Guardar</button></center>
                  </div>

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