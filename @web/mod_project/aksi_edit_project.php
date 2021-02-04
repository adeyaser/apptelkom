<?php 
include "../koneksi.php";
   	$nik            =$_POST['nik'];
    $pid            =$_POST['pid'];
    $stf            =$_POST['stf'];
    $idwitel       =$_POST['idwitel'];
    $nourutsto      =$_POST['nourutsto'];
    $statusgolivelop=$_POST['statusgolivelop'] ;
    $statusfisik    =$_POST['ststusfisik'];
    $port		    =$_POST['port'];
    $jumlahport	    =$_POST['jumlahport'];
    $tanggalcomite  =$_POST['tanggalcomite'];
    $tanggalut      =$_POST['tanggalut'];
    $tanggalgolive  =$_POST['tanggalgolive'];
    $ideswawal      =$_POST['ideswawal'];
    $ideswakhir     =$_POST['ideswakhir'];


$result_=mysqli_query($koneksi,"UPDATE `dbtelkom`.`project` SET `stf` = '$stf', `idwitel` = '$idwitel', `nourutsto` = '$nourutsto', `port` = '$port', `jumlahport` = '$jumlahport', `tanggalcomite` = '$tanggalcomite', `tanggalut` = '$tanggalut', `tanggalgolive` = '$tanggalgolive', `statusfisik` = '$statusfisik', `statusgolive` = '$statusgolivelop', `ideswawal` = '$ideswawal', `ideswakhir` = '$ideswakhir', `nik` = '$nik' WHERE `project`.`pid` = '$pid';");
if($result_){
	header("Location:../index.php?modul=project&msg=berhasil");
}else{
	header("Location:../index.php?modul=project&msg=gagal");
}
?>