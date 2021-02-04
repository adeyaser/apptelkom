<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['password'])){
           echo "<link href='style.css' rel='stylesheet' type='text/css'>
                <center>Untuk mengakses modul, Anda harus login <br>";
          echo "<a href=login.html><b>LOGIN</b></a></center>";
          exit;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Monitoring Project</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <script src="js/alert.js"></script>


  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
         <img src='img/icon-ta.png' width='100%'>
        </div>
        <div class="sidebar-brand-text mx-3">MONITORING PROJECT</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>
      <?php 
      if($_SESSION['role']=="admin"){

      ?>
      <!-- Nav Item - Utilities Collapse Menu -->
         <li class="nav-item">
       <a class="nav-link" href="?modul=witel">
          <i class="fas fa-fw fa-folder"></i>
          <span>Master Witel</span></a>
      </li>

      <li class="nav-item">
       <a class="nav-link" href="?modul=sto">
          <i class="fas fa-fw fa-folder"></i>
          <span>Master Sto</span></a>
      </li>

      <li class="nav-item">
         <a class="nav-link" href="?modul=users">
          <i class="fas fa-fw fa-folder"></i>
          <span>Master Users</span></a>
      </li>

       <li class="nav-item">
         <a class="nav-link" href="?modul=project">
          <i class="fas fa-fw fa-folder"></i>
         <span>Project</span></a>
      </li>

        <li class="nav-item">
         <a class="nav-link" href="?modul=laporan">
          <i class="fas fa-fw fa-folder"></i>
           <span>Laporan</span></a>
      </li>

    <?php }else{?>
      <li class="nav-item">
         <a class="nav-link" href="?modul=laporan">
          <i class="fas fa-fw fa-folder"></i>
           <span>Laporan</span></a>
    <?php }?>
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
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-12 static-top shadow">
        <div class="col-sm-12">
       <a href="logout.php" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm" style="float:right;"></i> Log out</a>
      </div>
        </nav>
        <!-- End of Topbar -->
   <br>


   <?php 

       // echo $_GET['modul'];
        error_reporting(error_reporting() & ~E_NOTICE);
        include "koneksi.php";
        if ($date1 > $date2) { header('location:logout.php');}
          if ($_GET['modul'] == 'home') { include "home.php";}
          // Controll User
              else if($_GET['modul']== 'users'){include "mod_users/users.php";}
              else if($_GET['modul']  == 'add_users'){include "mod_users/add_users.php";}
              else if($_GET['modul']  == 'detail_users'){include "mod_users/detail_users.php";}
              else if($_GET['modul']  == 'edit_users'){include "mod_users/edit_users.php";}
              else if($_GET['modul']  == 'hapus_users'){include "mod_users/hapus_users.php";}
         // Controll Wistel
              else if($_GET['modul']== 'witel'){include "mod_witel/witel.php";}
              else if($_GET['modul']== 'add_witel'){include "mod_witel/add_witel.php";}
              else if($_GET['modul']== 'detail_witel'){include "mod_witel/detail_witel.php";}
              else if($_GET['modul']== 'edit_witel'){include "mod_witel/edit_witel.php";}
              else if($_GET['modul']== 'hapus_witel'){include "mod_witel/hapus_witel.php";}
          //Controll STO
              else if($_GET['modul']== 'sto'){include "mod_sto/sto.php";}
              else if($_GET['modul']== 'add_sto'){include "mod_sto/add_sto.php";}
              else if($_GET['modul']== 'detail_sto'){include "mod_sto/detail_sto.php";}
              else if($_GET['modul']== 'edit_sto'){include "mod_sto/edit_sto.php";}
              else if($_GET['modul']== 'hapus_sto'){include "mod_sto/hapus_sto.php";}
          //Controll Project
              else if($_GET['modul']== 'project'){include "mod_project/project.php";}
              else if($_GET['modul']== 'add_project'){include "mod_project/add_project.php";}
              else if($_GET['modul']== 'detail_project'){include "mod_project/detail_project.php";}
              else if($_GET['modul']== 'edit_project'){include "mod_project/edit_project.php";}
              else if($_GET['modul']== 'hapus_project'){include "mod_project/hapus_project.php";}
              else if($_GET['modul']== 'laporan'){include "mod_laporan/laporan.php";}
              else if($_GET['modul']== 'cetak_laporan'){include "mod_laporan/cetaklaporan.php";}

              else{include "home.php";}
                                   

   ?>
<?php
if(isset($_GET['msg'])){
  if($_GET['msg']=='berhasil'){
      echo "<script>Swal.fire('info','Data Berhasil Disimpan  !!!...'); </script>";
    }else if($_GET['msg']=='hapus'){
      echo "<script>Swal.fire('info','Data Berhasil Dihapus !!!...'); </script>";
    }else if($_GET['msg']=='hapusgagal'){
      echo "<script>Swal.fire('info','Data Gagal Dihapus !!!...'); </script>";
    }else{
      echo "<script>Swal.fire('info','Data Gagal Disimpan !!!...'); </script>";
    }
}?>

      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto text-danger">
            <span>Copyright &copy; Procject 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>

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

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
  <script>
  $(document).ready(function(){
      $("#hide").click(function(){
        $("#p").hide();
        $("#hide").hide();
        $("#show").show();
      });
      $("#show").click(function(){
        $("#p").show();
        $("#hide").show();
        $("#show").hide();
      });
      $("#p").hide();
      $("#hide").hide();
  });
  $(document).ready(function() {
    $('#example').DataTable();
} );

  function goBack() {
    window.history.back();
  }
  
  //UNTUK MENAMPILKAN POSISI LATITUDE DAN LONGITUDE
    // Set up global variable
    var result;
    
    function showPosition() {
        // Store the element where the page displays the result
        result = document.getElementById("result");
        
        // If geolocation is available, try to get the visitor's position
        if(navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
            result.innerHTML = "Getting the position information...";
        } else {
            alert("Sorry, your browser does not support HTML5 geolocation.");
        }
    };
    
    // Define callback function for successful attempt
    function successCallback(position) {
        result.innerHTML = "<input name='Latitude' type='text'  value = '" +position.coords.latitude + "'class='form-control form-control-user'> <br>";
        result.innerHTML += "<input name='Longitude' type='text'  value = '" +position.coords.longitude  + "'class='form-control form-control-user'>";
    }
    
    // Define callback function for failed attempt
    function errorCallback(error) {
        if(error.code == 1) {
            result.innerHTML = "You've decided not to share your position, but it's OK. We won't ask you again.";
        } else if(error.code == 2) {
            result.innerHTML = "The network is down or the positioning service can't be reached.";
        } else if(error.code == 3) {
            result.innerHTML = "The attempt timed out before it could get the location data.";
        } else {
            result.innerHTML = "Geolocation failed due to unknown error.";
        }
    }
    showPosition();
</script>
</body>

</html>
