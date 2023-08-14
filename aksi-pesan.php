<?php
$username = $_POST['username'];  
      
$nama = $_POST['nama'];
$rumah = $_POST['rumah'];
$handphone= $_POST['handphone'];
$tgl = $_POST['tgl']; 
$jam= $_POST['jam'];


$sql="insert into pesan(username,nama,rumah,handphone,tgl,jam)values (
'$username',    
'$nama',
'$rumah',
'$handphone',
'$tgl',
'$jam')";
include "koneksi.php";
$result = mysqli_query($conn, $sql);
echo "Input berhasil";
{
header("location: member.php"); // Langsung mengarah ke Home index.php
}
mysqli_close($conn);
           
?>