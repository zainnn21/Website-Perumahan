<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$handphone = $_POST['handphone'];
$tgl = $_POST['tgl'];
$jam = $_POST['jam'];
$status = $_POST['status'];

// update data ke database
mysqli_query($conn,"update pesan set nama='$nama', tgl='$tgl', jam='$jam', status='$status' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:about.php");

?>