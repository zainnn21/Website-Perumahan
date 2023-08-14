<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];

$sql    ="delete from pesan where id='$id'";
$query  = mysqli_query($conn,$sql);
if($query){
    header('location:about.php');
}else{
    echo mysqli_error($conn);
}
// menghapus data dari database
//mysqli_query($koneksi,"delete from pesan where id='$id'");

// mengalihkan halaman kembali ke index.php
//header("location:member.php");

?>