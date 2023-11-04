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
  
      <a href="index.php"h1 class="Logo2"><img src="assets/img/Logo2.png" width="90" height="70"></a>
     

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto" href="login.php"><button type="button" class="btn btn-info">Cerrar Sesion</button></a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

    <!-- AQUI VA A IR TODA LA Interfaz de Usuario -->
   <section>
    <!-- Botón para abrir la ventana emergente -->

   <div class="col-md-12">
            <h3 class="section-title espacio">Interfaz De Usuario</h3>
            <div class="section-title-divider"></div>

            <p class="section-description "> ¡Bienvenid@, . Aqui podras encontrar todo lo necesario para ser un gran atleta!!! </p>
            
          </div>
          <section>


          <h3 class="section-title espacio">Publicaciones</h3>

          <title>Sección de Publicaciones</title>
    <style>
        .post {
            border: 1px solid #ccc;
            margin: 10px;
            padding: 10px;
            background-color: #fff;
        }

        .post img {
            max-width: 100%;
        }

        .comments {
            margin-top: 10px;
        }

        .comment {
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            padding: 5px;
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <!-- Publicación 1 -->
    <div class="post">  <?php 
                        include( '../Control/conex.php'); ?>
        <h2>Publicación 1</h2>
        <img src="assets\img\logo.png" alt="Imagen 1">
        <p><?php $cons = $conexion -> query("SELECT * from publicaciones");
            while ($row1 = $cons -> fetch_row()) {   ?>

              <td><?php echo ''.$row1[2].''; ?></td>
              <img src="assets\img\<?php echo ''.$row1[4].''?>" alt="Imagen 1">
              </div>
              <?php } ?>
        <div class="comments">
            <div class="comment">
              
           <?php 
            $cons = $conexion -> query("SELECT ID_Comment, usuario.Nombre, `Descripcion`, `Fecha de Creacion` FROM comentarios INNER JOIN usuario ON usuario.idUsuario = comentarios.ID_Usuario");
            while ($row5 = $cons -> fetch_row()) {   ?>

                          
            <td><?php echo ''.$row5[1].''; ?></td>
            <td><?php echo ''.$row5[2].''; ?></td>
            </div>
            <?php } ?>
            <div class="comment">
                Usuario B: ¡Me encanta!
            </div></div>
    </div>

    <!-- Publicación 2 -->
    <div class="post">
        <h2>Publicación 2</h2>
        <img src="imagen2.jpg" alt="Imagen 2">
        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <div class="comments">
            <div class="comment">
                Usuario C: ¡Gran foto!
            </div>
            <div class="comment">
                Usuario D: ¡Qué hermoso lugar!
            </div>
        </div>
    </div>
</body>



         <center> <button class="btn btn-info" id="openModal">Crear Publicacion</button> <center>
<center> 
<!-- Ventana emergente (modal) para la creación de eventos -->
<div id="myModal" class="modal">
<div class="modal-content">
        <h2>Crear</h2>
        <form action="procesar_evento.php" method="POST">
            <label for="nombre">Nombre de la Publicacion:</label>
            <input type="text" name="nombre" required><br>
            
            
            <label for="descripcion">Descripción de la publicacion:</label>
            <textarea name="descripcion"></textarea><br>
            
<input type="file" id="fileInput">
    
            <input type="submit" name="Modal-Publicacion" class="btn btn-info"  value="Crear Evento">
        </form>
    </div>
</div>
<center/>

<script>
    // Función para mostrar el modal
    function showModal() {
        var modal = document.getElementById('myModal');
        modal.style.display = 'block';
    }

    // Función para ocultar el modal
    function hideModal() {
        var modal = document.getElementById('myModal');
        modal.style.display = 'none';
    }

    // Escucha el clic en el botón "Crear Evento" y muestra el modal
    var btn = document.getElementById('openModal');
    btn.onclick = showModal;

    // Cierra el modal si se hace clic fuera de él
    window.onclick = function(event) {
        var modal = document.getElementById('myModal');
        if (event.target == modal) {
            hideModal();
        }
    }
    
    // Oculta el modal al cargar la página
    hideModal();
</script>

</section>
          <style>
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>

    <h3 class="section-title espacio espacio">Eventos</h3>

  </div>
 </div>
</div>



    </table>

    <!-- Resto de tu código HTML -->
</section>

<div class="espacio">
</div>

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