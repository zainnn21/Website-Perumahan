<?php           
$username = $_POST['username'];
$password= $_POST['password'];
$sql="insert into login(username,password)values (
'$username',
'$password,')";
include "koneksi.php";
$result = mysqli_query($conn, $sql);
echo "Input berhasil";
{
header("Location: index.html"); // Langsung mengarah ke Home index.php
}
mysqli_close($conn);
           
?>