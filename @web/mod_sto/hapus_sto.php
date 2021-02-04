<?php 
$id=$_GET['id'];

$result_= mysqli_query($koneksi,"DELETE FROM sto WHERE nourut='$id'");

if($result_){
	header("Location:index.php?modul=sto&msg=hapus");
}else{
	header("Location:index.php?modul=sto&msg=hapusgagal");
}
?>