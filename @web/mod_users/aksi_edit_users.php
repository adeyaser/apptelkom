<?php 
include "koneksi.php";

$nik     =$_POST['nik'];
$username=$_POST['username'];
$role    =$_POST['role'];
$query=mysqli_query($koneksi,"SELECT password FROM users where nik='$nik'");
$data=mysqli_fetch_array($query);

if(($_POST['password'])==($data['password'])){
   $password=$_POST['password'];
}else{
	$password=md5($_POST['password']);
}
//echo $password;die();

$result_=mysqli_query($koneksi,"UPDATE users SET username='$username',password='$password',role='$role' WHERE nik='$nik'");

if($result_){
	header("Location:index.php?modul=users&msg=berhasil");
}else{
	header("Location:index.php?modul=users&msg=gagal");
}
?>