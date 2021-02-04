<?php 
$id=$_GET['id'];

$result_= mysqli_query($koneksi,"DELETE FROM witel WHERE idwitel='$id'");

if($result_){
	header("Location:index.php?modul=witel&msg=hapus");
}else{
	header("Location:index.php?modul=witel&msg=hapusgagal");
}
?>