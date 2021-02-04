<?php 
$id=$_GET['id'];

$result_= mysqli_query($koneksi,"DELETE FROM users WHERE nik='$id'");

if($result_){
	header("Location:index.php?modul=users&msg=hapus");
}else{
	header("Location:index.php?modul=users&msg=hapusgagal");
}
?>