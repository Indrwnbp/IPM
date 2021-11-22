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
             <div class="sidebar-brand-text mx-1">PT. Sumber Makmur Sejati Sejahtera </div>
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
                        <h1 class="h3 mb-0 text-gray-800">Tabel OEE Harian</h1>
                        </div>

                    <!--plant option-->
</h4>

<!--table-->
<?php
    if(isset($_GET['sdate']) || isset($_GET['edate']))
    {
      
      $sdate = $_GET['sdate'];
      $edate = $_GET['edate'];  
      $result= mysqli_query($conn, "SELECT id, tanggal, minggu_ke, run_time, setup_time, idle_time, breakdown_time, support_time, actual_product, good_product, last_breakdown_time FROM data_tabel WHERE tanggal BETWEEN ' $sdate ' AND ' $edate ' ORDER BY ID DESC LIMIT 0,100");
    }
    else
    {
      $result = mysqli_query($conn, "SELECT id, tanggal, minggu_ke, run_time, setup_time, idle_time, breakdown_time, support_time, actual_product, good_product, last_breakdown_time FROM data_tabel ORDER BY ID DESC LIMIT 0,100");
    }
    ?>

    

    <div class="panel-body">
      <form class="form-horizontal" method="GET">  
        <div class="form-group">
          <label class="col-md-2">Dari tanggal</label>   
          <div class="col-md-2">
            <input type="date" name="sdate" class="form-control" value="<?php echo $sdate; ?>" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2">sampai tanggal</label>   
          <div class="col-md-2">
            <input type="date" name="edate" class="form-control" value="<?php echo $edate; ?>" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2"></label>   
          <div class="col-md-8">
            <input type="submit" class="btn btn-primary" value="Filter">
            <a href='table.php'  class='btn btn-warning btn-sm'>Reset</a>
          </div>
        </div>
      </form>
                <h5> 
                <center>
    <div class="panel-body">
      <table class="table table-bordered table-striped">
                    <tr> 
                        <th> ID </th>
                        <th> Tanggal </th>
                        <th> Minggu Ke- </th>
                        <th> Run Time </th>
                        <th> Setup Time </th>
                        <th> Idle Time </th>
                        <th> Breakdown Time  </th>
                        <th> Support Time  </th> 
                        <th> Actual Product </th>
                        <th> Good Product </th>
                        <th> Last Breakdown Time </th>      
            </tr>
            <?php while( $row = mysqli_fetch_array($result)) :?>
            <tr>
                <td> <?= $row ["id"]; ?></td>
                <td> <?= $row ["tanggal"]; ?> </td>
                <td> <?= $row ["minggu_ke"]; ?></td>
                <td> <?= $row ["run_time"]; ?> </td>
                <td> <?= $row ["setup_time"];?> </td>
                <td> <?= $row ["idle_time"];?> </td>
                <td> <?= $row ["breakdown_time"];?> </td>
                <td> <?= $row ["support_time"];?> </td>
                <td> <?= $row ["actual_product"];?> </td>
                <td> <?= $row ["good_product"];?> </td>
                <td> <?= $row ["last_breakdown_time"];?> </td>
</tr>
            <?php endwhile;?>

                    </center>

                </h5>

              
