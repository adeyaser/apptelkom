<?php 
$id=$_GET['id'];

$result_= mysqli_query($koneksi,"DELETE FROM project WHERE pid='$id'");

if($result_){
	header("Location:index.php?modul=project&msg=hapus");
}else{
	header("Location:index.php?modul=project&msg=hapusgagal");
}
?>