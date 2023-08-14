<?php   
$username = $_POST['username'];         
$tanggal = $_POST['tanggal'];
$nama= $_POST['nama'];
$rumah = $_POST['rumah'];
$jam= $_POST['jam'];
$sql="insert into pesan(username,tanggal,nama,rumah,jam)values (
'$username',    
'$tanggal',
'$nama',
'$rumah',
'$jam')";
include "koneksi.php";
$result = mysqli_query($conn, $sql);
echo "Input berhasil";
{
header("Location: member.php"); // Langsung mengarah ke Home index.php
}
mysqli_close($conn);
           
?>