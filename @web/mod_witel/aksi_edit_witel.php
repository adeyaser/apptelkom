<?php 
include "../koneksi.php";
$id   =$_POST['id'];
$namawitel    =$_POST['namawitel'];
$alamatwitel  =$_POST['alamatwitel'];
$latitude      =$_POST['latitude'];
$longitude     =$_POST['longitude'];

//echo "UPDATE witel SET namawitel='$namawitel',alamatwitel='$alamatwitel',latitude='$latitude',longitude='$longitude' WHERE idwitel='$id'";die();
$result_=mysqli_query($koneksi,"UPDATE witel SET namawitel='$namawitel',alamatwitel='$alamatwitel',latitude='$latitude',longitude='$longitude' WHERE idwitel='$id'");
if($result_){
	header("Location:../index.php?modul=witel&msg=berhasil");
}else{
	header("Location:../index.php?modul=witel&msg=gagal");
}
?>