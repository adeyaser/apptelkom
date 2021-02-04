<?php  session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Monitoring</title>   
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
		<link href="css/font-awesome.css" rel="stylesheet">
		<link rel="stylesheet" href="fontawesome-5.12.0/css/fontawesome.min.css">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/pages/dashboard.css" rel="stylesheet">
		<!--	<link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet"> -->
		<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">	
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
     <!-- <link href="css/login.css" rel="stylesheet"> -->
    <script src="../@web/js/alert.js"></script>
  </head>
<body>
<div class="subnavbar">
	<div class="subnavbar-inner">
		<div class="container">
			<ul class="mainnav">			
				<li class="active dropdown">
					<a href="data.php"><h1>Sistem Monitoring</h1>
					</a>	    				
				</li>												
				<li class="active dropdown">
					<a href="">
				
					</a>    				
				</li>
				<li class="active dropdown">
					<a href="logout.php">
						<i class="icon-group"></i>
						<span><h3>Logout</h3></span>
					</a>    				
				</li>										
			</ul>
		</div> <!-- /container -->	
	</div> <!-- /subnavbar-inner -->
</div> <!-- /subnavbar -->

<div class='wrapper-box padding-bottom'>
<div class='widget-content'>
     <h1> Data <small> Project</small></h1>
      <ol class='breadcrumb'>
      </ol>                   
    </div>

  <div class='widget-content'>		
		<div class='table-responsive'>
    <table id='example1' class='table table-bordered'>
			<thead>
			<tr>
			<th>No</th>
			<th>LOKASI</th>
			<th>PID</th>
			<th>Aksi</th>
			</tr>
			</thead>
			<tbody>		
   <?php
   include "koneksi.php";
    $tampil=mysqli_query($koneksi,"SELECT pr.pid,st.lokasi FROM project pr left join sto st on st.nourut= pr.nourutsto where tanggalgolive =STR_TO_DATE('0000-00-00', '%Y-%m-%d')or tanggalgolive is null ORDER BY pr.tanggalgolive ASC");
    $no=1;
    while ($r=mysqli_fetch_array($tampil)){ ?>	
			<tr>
				<td><?php echo $no++;?></td>
				<td><?php echo $r['lokasi']?></td>
				<td><?php echo $r['pid']?></td>
				<td align='center'>
					<a href="edit.php?id=<?php echo $r['pid']?>" class='btn btn-small btn-success'>Pilih</a> &nbsp;
				</td>				
			</tr>
  <?php  }?>
    </tbody>
</table>
<?php
if(isset($_GET['msg'])){
  if($_GET['msg']=='berhasil'){
      echo "<script>Swal.fire('info','Data Berhasil Disimpan  !!!...'); </script>";
    }else if($_GET['msg']=='gagal'){
      echo "<script>Swal.fire('info','Data Gagal Disimpan !!!...'); </script>";
    }
}?>
</div>
</div>
<div class="footer">	
	<div class="footer-inner">		
		<div class="container">			
			<div class="row">				
    			<div class="span12">
    				<h3>	&copy; 2020 <a href="#">Monitoring 2020</a></h3>
    			</div> <!-- /span12 -->
    		</div> <!-- /row -->
		</div> <!-- /container -->
	</div> <!-- /footer-inner -->
</div> <!-- /footer -->   
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/base.js"></script>
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src='js/kit.js'></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>