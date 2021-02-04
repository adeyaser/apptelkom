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

$result_=mysqli_query($koneksi,"INSERT INTO `dbtelkom`.`project` (`pid`, `stf`, `idwitel`, `nourutsto`, `port`, `jumlahport`, `tanggalcomite`, `tanggalut`, `tanggalgolive`, `statusfisik`, `statusgolive`, `ideswawal`, `ideswakhir`, `nik`) VALUES ('$pid', '$stf', '$idwitel', '$nourutsto', '$port', '$jumlahport', '$tanggalcomite', '$tanggalut', '$tanggalgolive', '$statusfisik', '$statusgolivelop', '$ideswawal', '$ideswakhir', '$nik');");

if($result_){
	header("Location:../index.php?modul=project&msg=berhasil");
}else{
	header("Location:../index.php?modul=project&msg=gagal");
}
?>