<?php
include "koneksi.php";
function anti_injection($data){
  $filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter;
}

$username = $_POST['username'];
$pass     = md5($_POST['password']);

// pastikan username dan password adalah berupa huruf atau angka.
if (!ctype_alnum($username) OR !ctype_alnum($pass)){
  include "login.html";
}
else{
$login=mysqli_query($koneksi,"SELECT * FROM users WHERE username='$username' AND password='$pass' and role !='pegawai'");
$ketemu=mysqli_num_rows($login);
$r=mysqli_fetch_array($login);

// Apabila username dan password ditemukan
if ($ketemu > 0){
  session_start();

  $_SESSION['username']     = $r['username'];
  $_SESSION['password']     = $r['password'];
  $_SESSION['nik']          = $r['nik'];
  $_SESSION['role']         = $r['role'];
  // session timeout
  $_SESSION['login'] = 1;
  header('location:index.php?modul=home');
}
else{
  include "login.html";
  echo "<script>Swal.fire('info','Login Gagal  !!!...'); </script>";
}
}
?>
