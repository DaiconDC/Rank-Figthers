<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inicio de sesión</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

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

      <a href="index.php"h1 class="Logo2"><img src="assets/img/Logo2.png" width="120" height="100"></a>
     

      <nav id="navbar" class="navbar">
        <ul>

          <li><a class="nav-link scrollto active" href="index.php">Inicio</a></li>
          <li><a class="nav-link scrollto" href="INTUSuarios.php">Panel</a></li>
          <li><a class="nav-link scrollto" href="Eventos.php">Eventos</a></li>
          <li><a class="nav-link setction id" href="index.php#Acerca">Acerca</a></li>
          <li><a class="nav-link scrollto" href="index.php#services">Servicios</a></li>
          <li><a href="index.php#contacto">Contacto</a></li>
          <li><a class="nav-link scrollto" href="login.php"><button type="button" class="btn btn-info">Inicio de sesión</button></a></li>
        
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

    <!-- AQUI VA A IR TODA LA Interfaz de Usuario -->
   <section>
   <div class="section-title-divider"></div>
            <p class="section-description"> Perfil </p>
          </div>
 <?php  
session_start();
include('conex.php');
error_reporting(0);

// Obtén los datos del usuario de la sesión
$idUsuario = $_SESSION['user'];
$nombreUsuario = $_SESSION['usuario'];
$tipoUsuario = $_SESSION['tipo'];

// Resto de tu código HTML

?>


    <!-- Resto de tu código HTML -->

    <!-- Aquí comienza el panel de usuario -->

    <section>
        <h1>Panel de Usuario</h1>
        <p>Bienvenido, <?php echo $nombreUsuario; ?>.</p>

        <!-- Puedes agregar más contenido personalizado aquí -->

        <ul>
            <li><a href="Perfil.php">Mi Perfil</a></li>
            <li><a href="#">Mis Eventos</a></li>
            <li><a href="../control/logout.php">Cerrar Sesión</a></li>
        </ul>
    </section>

    <!-- Resto de tu código HTML -->

</body>
</html>











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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>