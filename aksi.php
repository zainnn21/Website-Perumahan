<?php           
$username = $_POST['username'];
$password= $_POST['password'];
$email = $_POST['email'];
$telp= $_POST['telp'];
$sql="insert into login(username,password,email,telp)values (
'$username',
'$password',
'$email',
'$telp')";
include "koneksi.php";
$result = mysqli_query($conn, $sql);
echo "Input berhasil";
{
header("Location: index.html"); // Langsung mengarah ke Home index.php
}
mysqli_close($conn);
           
?>