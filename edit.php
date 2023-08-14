<!DOCTYPE html>
<html>
<head>
<title>Tamini Residence</title>
 <link rel="icon" type="image/jpg" href="images/2.jpg">
 <link rel="stylesheet" type="text/css" href="style.css">
 <link rel="stylesheet" type="text/css" href="animate.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
 <div class="container">
 <center><h3>EDIT DATA BOOKING</h3>
 <?php
 include 'koneksi.php';
 $id = $_GET['id'];
 $data = mysqli_query($conn,"select * from pesan where id='$id'");
 while($d = mysqli_fetch_array($data)){
  ?>
  
  <form method="post" action="update.php">
   <table>
    <tr>   
     <td>Nama</td>
     <td>
      <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
      <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
     </td>
    </tr>
    <tr>
     <td>handphone</td>
     <td><input type="text" name="handphone" value="<?php echo $d['handphone']; ?>"></td>
    </tr>
    <tr>
     <td>Tanggal</td>
     <td><input type="text" name="tgl" value="<?php echo $d['tgl']; ?>"></td>
    </tr>
    <tr>
     <td>Jam</td>
     <td><input type="text" name="jam" value="<?php echo $d['jam']; ?>"></td>
    </tr>
    <tr>
     
    </tr>
    <tr>
     <td>Status</td>
     <td><input type="text" name="status" value="<?php echo $d['status']; ?>"></td>
    </tr>
    <tr>
     <td></td>
     <td><input type="submit" value="SIMPAN"></td>
    </center>
    <a href="halaman-admin.php">KEMBALI</a>
    </tr>  
   </table>
  </form>
  
  </div>
  <?php 
 }
 ?>
 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
</body>
</html>