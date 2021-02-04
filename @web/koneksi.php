<?php
 define('HOST','localhost');
 define('USER','root');
 define('PASS','');
 define('DB','dbtelkom');
 $koneksi = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

$date1=date('Y-m-d');
$orgDate = '10-02-2021';   
$date2 = date('Y-m-d', strtotime($orgDate)); 
?>