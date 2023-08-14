<?php
// membangun koneksi dengan server dengan nama server, user_id dan password sebagai parameter
include "koneksi.php";
session_start();//memulai session
//menyimpan session
$user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query($conn,"select username from login where username='$user_check'");
$row = mysqli_fetch_array($ses_sql);
$login_session = $row['username'];
if(!isset($login_session)){
mysqli_close($connection); // menutup koneksi
header('location: indexlogin.php'); // mengarahkan ke home page    
}
?>
