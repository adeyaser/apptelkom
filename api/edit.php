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
  </head>
<body>
<div class="navbar navbar-fixed-top">	
	<div class="navbar-inner">		
		<!-- /container -->		
	</div> <!-- /navbar-inner -->	
</div> <!-- /navbar -->
      
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
<?php 
 error_reporting(error_reporting() & ~E_NOTICE);
include "koneksi.php";
   $id=$_GET['id']; 
   $sql=mysqli_query($koneksi,"SELECT ST.NOURUT,ST.IDSTO,ST.NAMASTO,ST.LOKASI,WS.NAMAWITEL,WS.ALAMATWITEL,PR.* FROM PROJECT PR LEFT JOIN STO ST ON ST.NOURUT = PR.NOURUTSTO LEFT JOIN WITEL WS ON WS.IDWITEL =PR.IDWITEL WHERE pid='$id'");
    $data=mysqli_fetch_assoc($sql);
?>


<div class='widget-content'>
	<a href="data.php">				
     <h1> Edit Data <small> project</small></h1> 
     </a>                 
</div>			
		<div class='widget-content'>				
			<h3>Edit Project</h3>
			<br>	
			<form  class='form-horizontal' method=POST action='aksi_edit.php' enctype='multipart/form-data'>
			<fieldset>
				<input type="hidden" name="nik" class="form-control form-control-user" placeholder="nik" value="<?php echo $_SESSION[nik]?>">
				<div class='control-group'>											
					<label class='control-label'>PID</label>
					<div class='controls'>
						<input type='text' class='span8' name='pid' value="<?php echo $data[pid]?>" readonly>
					</div>			
				</div> 

				<div class='control-group'>											
					<label class='control-label'>STP</label>
					<div class='controls'>
						<input type='text' class='span8' name='stp' value="<?php echo $data[stf]; ?>" readonly>
					</div>			
				</div> 
				
				
				<div class='control-group'>											
					<label class='control-label'>WITEL</label>
					<div class='controls'>
						<input type='text' class='span8' name='WITEL' value="<?php echo $data[NAMAWITEL]; ?>" readonly>
					</div>		
				</div> 

				<div class='control-group'>											
					<label class='control-label'>STO</label>
					<div class='controls'>
						<input type='text' class='span8' name='sto' value="<?php echo $data[NAMAWITEL]; ?>" readonly>
					</div>		
				</div> 

				<div class='control-group'>											
					<label class='control-label'>LOKASI</label>
					<div class='controls'>
						<input type='text' class='span8' name='lokasi' value="<?php echo $data[LOKASI]; ?>" readonly>
					</div>		
				</div>
			

				<div class='control-group'>											
					<label class='control-label'>PORT</label>
					<div class='controls'>
					<select class='span8' name='port' id='port'>
						<option value="">Pilih Port</option>
					    <option  <?php $selected = ($data[port]=="8") ? 'selected' : ''; echo $selected;?> value="8"> 8</option>
					     <option  <?php $selected = ($data[port]=="16") ? 'selected' : ''; echo $selected;?> value="16"> 16</option>
					</select>	
					</div>
				</div> 

				<div class='control-group'>											
					<label class='control-label'>JUMLAH PORT</label>
					<div class='controls'>
						<input type='number' class='span8' name='jumlahport' value="<?php echo $data[jumlahport]; ?>" >
					</div>		
				</div>
					
				<div class='control-group'>											
					<label class='control-label'>TANGGAL COMITES</label>
					<div class='controls'>
						<input type='date' class='span8' name='tanggalcomite' value="<?php echo $data[tanggalcomite]; ?>">
					</div> 		
				</div> 
				
				<div class='control-group'>											
					<label class='control-label'>TANGGAL UT</label>
					<div class='controls'>
						<input type='date' class='span8' name='tanggalut' value="<?php echo $data[tanggalut]; ?>">
					</div> 		
				</div> 

				<div class='control-group'>											
					<label class='control-label'>TANGGAL GOLIVE</label>
					<div class='controls'>
						<input type='date' class='span8' name='tanggalgolive' value="<?php echo $data[tanggalgolive]; ?>">
					</div> 		
				</div> 

				<div class='control-group'>											
					<label class='control-label'>STATUS FISIK</label>
					<div class='controls'>
					<select class='span8' name='statusfisik' id='statusfisik'>
					   <option value="">Pilih Status Fisik</option>
	                   <option  <?php $selected = ($data['statusfisik']=="drop") ? 'selected' : ''; echo $selected;?> value="drop"> Drop</option>
	                   <option  <?php $selected = ($data['statusfisik']=="selesai") ? 'selected' : ''; echo $selected;?> value="selesai">Selesai</option>
					</select>	
					</div>
				</div> 

				<div class='control-group'>											
					<label class='control-label'>STATUS GOLIVE</label>
					<div class='controls'>
					<select class='span8' name='statusgolive' id='statusgolive'>
					  <option  <?php $selected = ($data['statusgolive']=="drop") ? 'selected' : ''; echo $selected;?> value="drop"> Drop</option>
	                  <option  <?php $selected = ($data['statusgolive']=="ut") ? 'selected' : ''; echo $selected;?> value="ut">Ut</option>
	                  <option  <?php $selected = ($data['statusgolive']=="golive") ? 'selected' : ''; echo $selected;?> value="golive">Go Live</option>
	                  <option  <?php $selected = ($data['statusgolive']=="selesai") ? 'selected' : ''; echo $selected;?> value="selesai">Selesai</option>
					</select>	
					</div>
				</div> 

				<div class='control-group'>											
					<label class='control-label'>IDE SW AWAL </label>
					<div class='controls'>
					<input name="ideswawal" type="text" class='span8'  placeholder="ideswawal" value="<?php echo $data['ideswawal'] ?>">
					</div> 		
				</div>							
				
					<div class='control-group'>											
					<label class='control-label'>IDE SW AKHIR</label>
					<div class='controls'>
						<input name="ideswakhir" type="text" class='span8' placeholder="ideswakhir" value="<?php echo $data['ideswakhir'] ?>">
					</div> 		
				</div>	

				<div class='form-actions'>
					<button type='submit' class='btn btn-danger'>Save</button> 
					<input type=button value='Cancel'  class='btn btn-warning' onclick=self.history.back()>
				</div> 

			</fieldset>										
			</form>
		</div>
</div>
<div class="footer">	
	<div class="footer-inner">		
		<div class="container">			
			<div class="row">				
    			<div class="span12">
    			<h3>	&copy; 2020 <a href="#">Monitoring 2020</a>.</h3>
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