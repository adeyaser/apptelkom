<?php 
include "../koneksi.php";
$id            =$_POST['nourut'];
$idsto 		   =$_POST['idsto'];
$idwitel  	   =$_POST['idwitel'];
$namasto  	   =$_POST['namasto'];
$lokasi		   =$_POST['lokasi'];
$latitude      =$_POST['Latitude'];
$longitude     =$_POST['Longitude'];


$result_=mysqli_query($koneksi,"UPDATE sto SET idsto='$idsto',idwitel='$idwitel',namasto='$namasto',lokasi='$lokasi',latitude='$latitude',longitude='$longitude' WHERE nourut='$id'");
if($result_){
	header("Location:../index.php?modul=sto&msg=berhasil");
}else{
	header("Location:../index.php?modul=sto&msg=gagal");
}
?>