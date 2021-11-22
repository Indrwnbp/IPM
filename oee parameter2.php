<?php
//koneksi ke database
$conn = mysqli_connect("localhost","root","","oee"); 
//ambil data dari data tabel
$result = mysqli_query($conn, "SELECT * fROM data_tabel");

//ambil data (fetch) dari object result
//mysqli_fetch_row() // mengembalikan array numerik
//mysqli_fetch_assoc() //mengembalikan array associative
//mysqli_fetch_array()
//mysqli_fetch_object()

//while($data = mysqli_fetch_assoc($result) ) {
//var_dump($data);

//}
?> 





<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OEE Monitoring System </title>
   

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

          <!-- Sidebar -->
          <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

           
            <!-- Sidebar - Brand -->
         <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index2.php">
             <div class="sidebar-brand-icon rotate-n-15">
                 
             </div>
             <div class="sidebar-brand-text mx-1"> INSTITUT TEKNOLOGI SEPULUH NOPEMBER </div>
         </a>

         <!-- Divider -->
         <hr class="sidebar-divider my-0">

         <!-- Nav Item - Dashboard -->
         <li class="nav-item active">
             <a class="nav-link" href=" index.html">
                 <i class="fas fa-fw fa-clipboard-list"></i>
                 <span>Dashboard</span></a> 
                 
                 <!-- Nav Item - OEEParameter -->
                 <li class="nav-item active">
                     <a class="nav-link" href="oee parameter2.php">
                         <i class="fas fa-fw fa-chart-area"></i>
                         <span>OEE Parameter</span></a> 
<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading"> </div>
                
                 <!--Nav Item-Logout-->
                 <li class="nav-item active">
                     <div class="fixed-bottom">
                         <a class="nav-link" href="login.php">
                             <i class="fas fa-fw fa-key"></i>
                             <span>Logout</span></a>
 
                     </div>
       
         <!-- Heading -->
     <div class="sidebar-heading"> </div>

            <!-- Sidebar Toggler (Sidebar) -->
   

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

                    <!--OEE tittle-->

                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                     
                           <b>Overall Equipment Effeciveness
                        </b>

                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                     
                   
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">admin1</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                 <!-- Begin Page Content -->
               

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-center mb-4">
                        <h1 class="h3 mb-0 text-gray-800">OEE parameter</h1>
                        </div>
                        <div class="d-sm-flex align-items-center justify-content-center mb-4">
                        
                        <div class="btn-group">
                           <a href="plant1.php" class="btn btn-primary active" aria-current="page">Plant 1</a>
                           <a href="plant2.php" class="btn btn-primary active" aria-current="page">Plant 2</a>
                           <a href="plant3.php" class="btn btn-primary active" aria-current="page">Plant 3</a>
                           <a href="chart.php" class="btn btn-primary active" aria-current="page">Chart</a>
                           <a href="table.php" class="btn btn-primary active" aria-current="page">Table</a>
       
                    <!--plant option-->
                    
                            
                            <!-- PLANT  BUTTON -->
</div>
</body>

    

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
</html>

              
