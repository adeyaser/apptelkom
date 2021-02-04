<?php 
include "../koneksi.php";

$namawitel    =$_POST['namawitel'];
$alamatwitel  =$_POST['alamatwitel'];
$latitude     =$_POST['Latitude'];
$longitude    =$_POST['Longitude'];

//echo "INSERT INTO users(nik,nama,username,password,role)VALUES('$nik','$nama','$username','$password','$role')";die();
$result_=mysqli_query($koneksi,"INSERT INTO witel(namawitel,alamatwitel,latitude,longitude)VALUES('$namawitel','$alamatwitel','$latitude','$longitude')");

if($result_){
	header("Location:../index.php?modul=witel&msg=berhasil");
}else{
	header("Location:../index.php?modul=witel&msg=gagal");
}
?>