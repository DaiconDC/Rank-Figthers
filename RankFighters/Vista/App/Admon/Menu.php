<?php
include('../../../Control/conex.php');
error_reporting(0);
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rank Fighters</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
      

        <ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color:#303030;">

            <!-- Sidebar - Brand -->
            <hr class="espacio4">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">

        <img class="logo" src="img/Logo2.png" height="160" width="180">
       
            </a>    
           <hr class="espacio3">
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
          

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link text-center" href="usuarios.php">
                <i class="fas fa-user-friends"></i>
                   <span>Usuarios</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link text-center" href="Eventos.php">
                <i class="fa fa-calendar" aria-hidden="true"></i>
                    <span>Eventos</span></a>
            </li>
             
             <li class="nav-item">
                <a class="nav-link text-center" href="Institucion.php">
                <i class="fa fa-university" aria-hidden="true"></i>
                    <span>Institución Educativa</span></a>
            </li>
           
            <li class="nav-item">
                <a class="nav-link text-center" href="Equipo_x _Evento.php">
                <i class="fas fa-calendar-check"></i>
                 <span>Equipo x Evento</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-center" href="Equipo.php">
                <i class="fas fa-users"></i>
                    <span>Equipo</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-center" href="Reportes.php">
                <i class="fas fa-flag"></i>
                    <span>Reportes</span></a>
            </li>


 <!-- Divider -->
 <hr class="sidebar-divider">
 

 

 <!-- Nav Item - Pages Collapse Menu -->
 <li class="nav-item">
     <a class="nav-link collapsed text-center" href="#" data-toggle="collapse" data-target="#collapseTwo"
         aria-expanded="true" aria-controls="collapseTwo">
         <i class="fas fa-fw fa-cog"></i>
         <span> Configuración</span>
     </a>
     <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
             
             <a class="collapse-item" href="Deporte.php">Deporte</a>
             <a class="collapse-item" href="Estado.php">Estado</a>
             <a class="collapse-item" href="TipoDoc.php">Tipo Documento</a>
             <a class="collapse-item" href="TipoUsua.php">Tipo Usuario</a>
             <a class="collapse-item" href="contactanos.php">Contacto</a>
         </div>
     </div>
 </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

          

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

<div class="topbar-divider d-none d-sm-block"></div>

<!-- Nav Item - User Information -->
<li class="nav-item dropdown no-arrow">
<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="mr-2 d-none d-lg-inline text-gray-600">
    <?php
echo $_SESSION['usuario'];
    ?>
</span>

<img class="img-profile rounded-circle"
src="img/undraw_profile.svg">
</a>
<!-- Dropdown - User Information -->
<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
aria-labelledby="userDropdown">


<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
Cerrar Sesión
</a>
</div>
</li>

</ul>

</nav>

                </nav>
                <!-- End of Topbar -->

                  <!-- Logout Modal-->
                  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cerrar Sesión</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">¿Está seguro de cerrar sesión?.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../../login.php">Cerrar sesión</a>
                </div>
            </div>
        </div>
    </div>