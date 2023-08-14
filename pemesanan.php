<!DOCTYPE html>
<html>
<head>
 <title>Booking</title>
 <link rel="icon" type="image/jpg" href="images/2.jpg">
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
 <h1><CENTer><b>BOOKING</b></CENTer></h1>

 <?php 
 if(isset($_GET['pesan'])){
  if($_GET['pesan']=="gagal"){
   echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
  }
 }
 ?>
 
 <div class="kotak_login">
  <p class="tulisan_login">Masukan Data </p>
 
  <form action="aksi-pesan.php" method="post">
           <label>Nama</label>
   <input type="text" name="nama" class="form_login" placeholder="masukkan nama" required="required">
 
   <label>handphone</label>
   <input type="text" name="handphone" class="form_login" placeholder="masukkan no.telp" required="required">
   <label>tanggal</label>
   <input type="date" name="tgl" class="form_login" required="required">

            <label>Waktu</label>
   <input type="text" name="jam" class="form_login" placeholder="Waktu" required="required">
  

   
   <input type="submit" class="tombol_login" value="SUBMIT">
 
   <br/>
   <br/>
   <center>
    <a class="link" href="member.html">BACK</a>
   </center>
  </form>
  
 </div>
 
 
</body>
</html>