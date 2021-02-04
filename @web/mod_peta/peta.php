<!DOCTYPE html>
<html>
<head>
	<title>Peta Lokasi</title>
	<link rel="stylesheet" href="../leaflet/leaflet.css" />
	<script src="../leaflet/leaflet.js"></script>
<style type="text/css">
	#mapid {
		margin: 0 auto 0 auto;
		height: 100%;
		width: 100%;
	}
	html, body {
        height: 100%;
      }
</style>

</head>
<body>
<div id="mapid" ></div>
<script type="text/javascript">
		var mapOptions = {
		   center: [-6.118918, 106.898600], 
		   zoom: 13
		}
		var map = new L.map('mapid', mapOptions);
		var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
		map.addLayer(layer);
  <?php
  include '../koneksi.php';
  $js = '';
    $markernya = '';
  $data = mysqli_query($koneksi, "SELECT PR.PID,PR.STF,WS.NAMAWITEL,ST.IDSTO,ST.NAMASTO,ST.LOKASI,ST.LONGITUDE,ST.LATITUDE FROM PROJECT PR LEFT JOIN STO ST ON ST.NOURUT=PR.NOURUTSTO LEFT JOIN WITEL WS ON WS.IDWITEL=PR.IDWITEL");
  while ($row = mysqli_fetch_assoc($data)) {
      //var marker = L.marker([-6.238168, 106.991664]).addTo(map);
      $js .= 'L.marker(['.$row['LATITUDE'].', '.$row['LONGITUDE'].']).addTo(map).bindPopup("<b> PID :'.$row['PID'].'</b><br> <b> STF :'.$row['STF'].'</br><b> WITEL : '.$row['NAMAWITEL'].'</b><br> <b> STO :'.$row['IDSTO'].'<b> NAMA STO :'.$row['NAMASTO'].'</br>");';
  }
    echo "$js";
    ?>	
	</script>
</body>
</html>