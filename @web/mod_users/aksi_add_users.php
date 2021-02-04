<?php 
include "koneksi.php";

$nik     =$_POST['nik'];
$username=$_POST['username'];
$password=md5($_POST['password']);
$role    =$_POST['role'];

//echo "INSERT INTO users(nik,nama,username,password,role)VALUES('$nik','$nama','$username','$password','$role')";die();
$result_=mysqli_query($koneksi,"INSERT INTO users(nik,username,password,role)VALUES('$nik','$username','$password','$role')");

if($result_){
	header("Location:index.php?modul=users&msg=berhasil");
}else{
	header("Location:index.php?modul=users&msg=gagal");
}
?>