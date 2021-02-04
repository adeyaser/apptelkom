<?php 
include "../koneksi.php";
$idsto 		   =$_POST['idsto'];
$idwitel  	   =$_POST['idwitel'];
$namasto  	   =$_POST['namasto'];
$lokasi		   =$_POST['lokasi'];
$latitude      =$_POST['Latitude'];
$longitude     =$_POST['Longitude'];

// echo "INSERT INTO sto(idsto,idwitel,namasto,lokasi,latitude,longitude)VALUES('$idsto','$idwitel','$namasto','$lokasi','$latitude','$longitude')";die();
$result_=mysqli_query($koneksi,"INSERT INTO sto(idsto,idwitel,namasto,lokasi,latitude,longitude)VALUES('$idsto','$idwitel','$namasto','$lokasi','$latitude','$longitude')");

if($result_){
	header("Location:../index.php?modul=sto&msg=berhasil");
}else{
	header("Location:../index.php?modul=sto&msg=gagal");
}
?>