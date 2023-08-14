<?php
session_start(); // Memulai Session
$error=''; // Variabel untuk menyimpan pesan error
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
 
// Variabel username dan password
$username=$_POST['username'];
$password=$_POST['password'];
include "koneksi.php";

// SQL query untuk memeriksa apakah member terdapat di database?
$query = mysqli_query($conn,"select * from login where password='$password' AND username='$username'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Membuat Sesi/session
header("location: member.php"); // Mengarahkan ke halaman member
} else {
$error = "Username atau Password belum terdaftar";
echo $error;
}
mysqli_close($conn); // Menutup koneksi
}
}
?>