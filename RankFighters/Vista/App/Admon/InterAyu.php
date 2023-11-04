<?php  

include('../../../Control/conex.php');
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Eventos</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Imperial
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


   <!-- ======= header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

    <a class="nav-link scrollto" href="../../login.php"><button type="button" class="btn btn-info">Volver</button></a>


      <nav id="navbar" class="navbar">
        <ul>

        
        
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

    <!-- AQUI VA A IR TODA LA Interfaz de Usuario -->
   
   <section>
   <div class="col-md-12">
            <h3 class="section-title espacio">Crear Evento</h3>
            <div class="section-title-divider"></div>
            <div class="section-description espacio">  
            <div class="container">

            <center>
          <div class="col-lg-5 col-md-8">
            <div class="form">
            <form action="../../../Control/GuardarAyudante.php" method="POST">

              
              <div class="form-group mt-3">
                    <label for="Identificacion">Nombre de Evento</label>
                    <input type="text" name="Nombreevento" class="form-control" id="NEvento">
                    </div><br>

                    <div class="form-group mt-3">
                    <label for="inputEmail4">Lugar Evento</label>
                    <select class="form-control" name="Lugarevento" id="TipoId">
             <?php  
                        include( '../../Control/conex.php'); 
                          $sql = "SELECT * FROM insteduc";
                          $eje = $conexion->query($sql);
                          while($row2 = $eje->fetch_row()){
                            echo '<option value="'.$row2[0].'">'.$row2[1].'</option>';
                          }
                    ?>
                    </select>
                    </div><br>
                    

                    <div class="form-group mt-3">
                    <label for="TipoId">Deporte</label>
                    <select class="form-control" name="TipoId" id="TipoId">
             <?php  
                        include( '../../Control/conex.php'); 
                          $sql = "SELECT * FROM deportes";
                          $eje = $conexion->query($sql);
                          while($row2 = $eje->fetch_row()){
                            echo '<option value="'.$row2[0].'">'.$row2[1].'</option>';
                          }
                    ?>
                    </select>
                    </div><br>

                    <div class="form-group mt-3">
                    <label for="inputPassword4">Fecha inicio</label>
                    <input type="date" name="FechaIni" class="form-control" id="FechaI">
                   </div><br>

                   <div class="form-group mt-3">
                  <label for="inputAddress">Fecha final</label>
                  <input type="date" class="form-control" name="FechaFin" id="FechaF">
                   </div><br>

                <div class="form-group mt-3">
                    <label for="inputTelefono">Estado</label>
                    <select class="form-control" name="Idestado" id="idestado">
             <?php  
                        include( '../../Control/conex.php'); 
                          $sql = "SELECT * FROM estado";
                          $eje = $conexion->query($sql);
                          while($row2 = $eje->fetch_row()){
                            echo '<option value="'.$row2[0].'">'.$row2[1].'</option>';
                          }
                    ?>
                    </select>
                    </div><br>

                    <div class="form-group mt-3">
                   <label for="inputTelefono">Link Foto</label>
                    <input type="text" class="form-control" name="link" id="LinkFo">
                  </div>
  

            


                <div class="text-center espacio"><button type="submit" name="ZXD" class="btn btn-primary">Guardar</button>
</div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </center>
    </section>







            </div>
            </div>
</div>


    <!-- Resto de tu código HTML -->

</body>
</html>

<?php  



?>






</section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
             Hecho por: <strong>Samuel Henao Lara, Santiago Salcedo, Yoseph Mazo</strong>
          </div>
          <div class="credits">
           
            Instagram de la pagina <a href="https://www.instagram.com/rankfighters/">RankFighters</a>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  
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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>