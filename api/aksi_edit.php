<?php 
include "koneksi.php";
    $statusgolivelop=$_POST['statusgolive'] ;
    $statusfisik    =$_POST['statusfisik'];
    $port		    =$_POST['port'];
    $jumlahport	    =$_POST['jumlahport'];
    $tanggalcomite  =$_POST['tanggalcomite'];
    $tanggalut      =$_POST['tanggalut'];
    $tanggalgolive  =$_POST['tanggalgolive'];
    $ideswawal      =$_POST['ideswawal'];
    $ideswakhir     =$_POST['ideswakhir'];
    $nik            =$_POST['nik'];
    $pid            =$_POST['pid'];

$result_=mysqli_query($koneksi,"UPDATE `dbtelkom`.`project` SET `port` = '$port', `jumlahport` = '$jumlahport', `tanggalcomite` = '$tanggalcomite', `tanggalut` = '$tanggalut', `tanggalgolive` = '$tanggalgolive', `statusfisik` = '$statusfisik', `statusgolive` = '$statusgolivelop', `ideswawal` = '$ideswawal', `ideswakhir` = '$ideswakhir', `nik` = '$nik' WHERE `project`.`pid` = '$pid';");
if($result_){
	header("Location:data.php?msg=berhasil");
}else{
	header("Location:data.php?msg=gagal");
}
?>